<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Makes everything the home page shows an editable default in this website's
 * database (Admin › Settings / Highlights). Only INSERTS what is missing; never
 * overwrites what the admin has written. The school name, contacts and numbers
 * still come from the portal (or the "School details" overrides).
 */
return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('website_settings')) return;
        $now = now();
        $defaults = [
            'values_title' => 'Let your child be part of this exceptional growth system',
            'app_features' => "Results & report cards\nPay school fees online\nAttendance & timetable\nHomework & e-learning\nAI learning guidance\nNotices & reminders",
            'topbar_links' => "Apply | /admissions#apply\nVisit us | /contact#visit\nNews & updates | /news\nGallery | /gallery",
            'quick1_title' => 'Academics', 'quick1_text' => 'Classes, subjects and how our learners grow.',
            'quick2_title' => 'Admission ongoing', 'quick2_text' => "Start your child's application online today.",
            'quick3_title' => 'Our mobile app', 'quick3_text' => 'Results, fees, attendance and news on your phone.',
            'testimonials_title' => 'What our families say', 'news_title' => 'From around the school',
            'faq_title' => 'Frequently asked questions', 'faq_text' => "Can't find what you're looking for? Our admissions team is happy to help.",
            'cta_title' => 'Give your child the best start', 'cta_text' => 'Visit our campus, meet our teachers and see learning in action.',
            'hero_button_text' => 'Admission ongoing — apply now', 'hero_button_link' => '/admissions#apply',
            'app_intro' => 'Results, fees, attendance, timetable, homework and school news — in your pocket.',
        ];
        $have = DB::table('website_settings')->pluck('value', 'key')->all();
        foreach ($defaults as $k => $v) {
            if (!array_key_exists($k, $have)) DB::table('website_settings')->insert(['key' => $k, 'value' => $v, 'created_at' => $now, 'updated_at' => $now]);
            elseif (trim((string) $have[$k]) === '') DB::table('website_settings')->where('key', $k)->update(['value' => $v, 'updated_at' => $now]);
        }
        DB::table('website_settings')->where('key', 'hero_button_link')->where('value', '/admissions/apply')->update(['value' => '/admissions#apply', 'updated_at' => $now]);

        if (Schema::hasTable('website_items') && !DB::table('website_items')->where('kind', 'highlight')->exists()) {
            foreach ([
                ['Caring, qualified teachers', 'Small classes where every learner is known by name.', 'ri-user-heart-line'],
                ['Strong academics and character', 'Results that matter, and values that last.', 'ri-medal-line'],
                ['Parents always in the loop', 'Results, fees, attendance and homework on the portal and mobile app.', 'ri-smartphone-line'],
                ['Clubs, sports and creativity', 'Activities every week beyond the classroom.', 'ri-trophy-line'],
            ] as $i => [$title, $body, $icon]) {
                DB::table('website_items')->insert(['kind' => 'highlight', 'title' => $title, 'body' => $body, 'icon' => $icon,
                    'sort' => $i, 'published' => true, 'created_at' => $now, 'updated_at' => $now]);
            }
        }
        try { Cache::forget('website.settings.v1'); } catch (\Throwable $e) {}
    }

    public function down(): void {}
};
