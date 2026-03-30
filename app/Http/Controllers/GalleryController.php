<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // For Str::limit()

class GalleryController extends Controller
{
    /**
     * Display a listing of the gallery images.
     */
    public function index()
    {
        $pageTitle = 'Gallery';
        // Hardcoded for demo; fetch from DB in production (e.g., Gallery::all())
        $images = [
            [
                'id' => 1,
                'thumbnail' => asset('assets/assets/images/gallery/1.jpg'),
                'full' => asset('assets/assets/images/gallery/1-full.jpg'),
                'title' => 'Campus Event 1',
                'description' => 'Description for image 1. A vibrant campus gathering with students engaging in activities.'
            ],
            [
                'id' => 2,
                'thumbnail' => asset('assets/assets/images/gallery/2.jpg'),
                'full' => asset('assets/assets/images/gallery/2-full.jpg'),
                'title' => 'Campus Event 2',
                'description' => 'Description for image 2. Exploring innovation in the science lab during open house.'
            ],
            [
                'id' => 3,
                'thumbnail' => asset('assets/assets/images/gallery/3.jpg'),
                'full' => asset('assets/assets/images/gallery/3-full.jpg'),
                'title' => 'Campus Event 3',
                'description' => 'Description for image 3. Sports day highlights with team spirit and cheers.'
            ],
            [
                'id' => 4,
                'thumbnail' => asset('assets/assets/images/gallery/4.jpg'),
                'full' => asset('assets/assets/images/gallery/4-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 5,
                'thumbnail' => asset('assets/assets/images/gallery/5.jpg'),
                'full' => asset('assets/assets/images/gallery/5-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 6,
                'thumbnail' => asset('assets/assets/images/gallery/6.jpg'),
                'full' => asset('assets/assets/images/gallery/6-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 7,
                'thumbnail' => asset('assets/assets/images/gallery/7.jpg'),
                'full' => asset('assets/assets/images/gallery/7-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 8,
                'thumbnail' => asset('assets/assets/images/gallery/8.jpg'),
                'full' => asset('assets/assets/images/gallery/8-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' =>9,
                'thumbnail' => asset('assets/assets/images/gallery/9.jpg'),
                'full' => asset('assets/assets/images/gallery/9-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 10,
                'thumbnail' => asset('assets/assets/images/gallery/10.jpg'),
                'full' => asset('assets/assets/images/gallery/10-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 11,
                'thumbnail' => asset('assets/assets/images/gallery/11.jpg'),
                'full' => asset('assets/assets/images/gallery/11-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 12,
                'thumbnail' => asset('assets/assets/images/gallery/12.jpg'),
                'full' => asset('assets/assets/images/gallery/12-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 13,
                'thumbnail' => asset('assets/assets/images/gallery/13.jpg'),
                'full' => asset('assets/assets/images/gallery/13-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 14,
                'thumbnail' => asset('assets/assets/images/gallery/14.jpg'),
                'full' => asset('assets/assets/images/gallery/14-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 15,
                'thumbnail' => asset('assets/assets/images/gallery/15.jpg'),
                'full' => asset('assets/assets/images/gallery/15-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 16,
                'thumbnail' => asset('assets/assets/images/gallery/16.jpg'),
                'full' => asset('assets/assets/images/gallery/16-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 17,
                'thumbnail' => asset('assets/assets/images/gallery/17.jpg'),
                'full' => asset('assets/assets/images/gallery/17-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
             [
                'id' => 18,
                'thumbnail' => asset('assets/assets/images/gallery/18.jpg'),
                'full' => asset('assets/assets/images/gallery/18-full.jpg'),
                'title' => 'Campus Event 4',
                'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            ],
            
            
        ];
        return view('gallery', compact('pageTitle', 'images'));
    }
}