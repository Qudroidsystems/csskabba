<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Website\SiteController;
use App\Http\Controllers\Website\WebsiteAdminController as WA;
use App\Http\Middleware\EnsureWebsiteAdmin;
use App\Http\Middleware\WebsiteEnabled;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| School website
|--------------------------------------------------------------------------
| Public pages (site.*) and the website admin under /admin (website.admin.*).
| Admins sign in with their school portal account (AdminAuthController).
*/

Route::middleware(WebsiteEnabled::class)->name('site.')->group(function () {
    Route::get('/', [SiteController::class, 'home'])->name('home');
    Route::get('/pages/{slug}', [SiteController::class, 'page'])->name('page');
    Route::get('/news', [SiteController::class, 'news'])->name('news');
    Route::get('/news/{slug}', [SiteController::class, 'post'])->name('post');
    Route::get('/gallery', [SiteController::class, 'gallery'])->name('gallery');
    Route::get('/gallery/{slug}', [SiteController::class, 'album'])->name('album');
    Route::get('/our-people', [SiteController::class, 'people'])->name('people');
    Route::get('/academics', [SiteController::class, 'academics'])->name('academics');
    Route::get('/admissions', [SiteController::class, 'admissions'])->name('admissions');
    Route::post('/admissions/apply', [SiteController::class, 'apply'])->middleware('throttle:6,10')->name('apply');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::post('/contact', [SiteController::class, 'sendContact'])->middleware('throttle:6,10')->name('contact.send');
    Route::post('/newsletter', [SiteController::class, 'newsletter'])->middleware('throttle:6,10')->name('newsletter');
    Route::get('/school-calendar', [SiteController::class, 'calendar'])->name('calendar');
    Route::get('/app', [SiteController::class, 'app'])->name('app');
});


// Files: always available (also while the website is switched off).
Route::get('/media/{path}', [SiteController::class, 'media'])->where('path', 'website/.+')->name('site.media');
Route::get('/app/download', [SiteController::class, 'apk'])->name('site.app.apk');

// Admin sign-in with the portal account.
Route::get('/admin/login', [AdminAuthController::class, 'form'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->middleware('throttle:8,1')->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
// Parents and staff who type /login on the website want the portal.
Route::get('/login', fn () => redirect()->away(\App\Services\Website\WebsiteContent::portalUrl('login')));

Route::middleware(EnsureWebsiteAdmin::class)->prefix('admin')->name('website.admin.')->group(function () {
    Route::get('/refresh-portal', [WA::class, 'refresh'])->name('refresh');
    Route::get('/', [WA::class, 'index'])->name('index');
    Route::get('/settings', [WA::class, 'settings'])->name('settings');
    Route::post('/settings', [WA::class, 'saveSettings'])->name('settings.save');

    Route::get('/gallery', [WA::class, 'albums'])->name('albums');
    Route::post('/gallery', [WA::class, 'saveAlbum'])->name('albums.store');
    Route::get('/gallery/{id}', [WA::class, 'album'])->whereNumber('id')->name('album');
    Route::post('/gallery/{id}', [WA::class, 'saveAlbum'])->whereNumber('id')->name('album.save');
    Route::post('/gallery/{id}/photos', [WA::class, 'uploadPhotos'])->whereNumber('id')->name('album.upload');
    Route::post('/gallery/{id}/photos/update', [WA::class, 'updatePhotos'])->whereNumber('id')->name('album.photos');
    Route::delete('/gallery/{id}', [WA::class, 'deleteAlbum'])->whereNumber('id')->name('album.delete');

    Route::get('/messages', [WA::class, 'messages'])->name('messages');
    Route::get('/messages/export', [WA::class, 'exportMessages'])->name('messages.export');
    Route::post('/messages/{id}/read', [WA::class, 'readMessage'])->whereNumber('id')->name('messages.read');
    Route::delete('/messages/{id}', [WA::class, 'deleteMessage'])->whereNumber('id')->name('messages.delete');

    Route::get('/app', [WA::class, 'app'])->name('app');
    Route::post('/app', [WA::class, 'saveApp'])->name('app.save');

    Route::get('/people/staff-options', [WA::class, 'staffOptions'])->name('people.staff');
    Route::post('/people/import', [WA::class, 'importStaff'])->name('people.import');

    Route::get('/{type}', [WA::class, 'list'])->where('type', '[a-z]+')->name('list');
    Route::get('/{type}/new', [WA::class, 'create'])->where('type', '[a-z]+')->name('create');
    Route::post('/{type}', [WA::class, 'store'])->where('type', '[a-z]+')->name('store');
    Route::get('/{type}/{id}', [WA::class, 'edit'])->where('type', '[a-z]+')->whereNumber('id')->name('edit');
    Route::post('/{type}/{id}', [WA::class, 'update'])->where('type', '[a-z]+')->whereNumber('id')->name('update');
    Route::delete('/{type}/{id}', [WA::class, 'destroy'])->where('type', '[a-z]+')->whereNumber('id')->name('destroy');
});
