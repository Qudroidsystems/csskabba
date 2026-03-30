<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Home';

          $images = [
            // [
            //     'id' => 1,
            //     'thumbnail' => asset('assets/assets/images/gallery/1.jpg'),
            //     'full' => asset('assets/assets/images/gallery/1.jpg'),
            //     'title' => 'Campus Event 1',
            //     'description' => 'Description for image 1. A vibrant campus gathering with students engaging in activities.'
            // ],
            // [
            //     'id' => 2,
            //     'thumbnail' => asset('assets/assets/images/gallery/2.jpg'),
            //     'full' => asset('assets/assets/images/gallery/2.jpg'),
            //     'title' => 'Campus Event 2',
            //     'description' => 'Description for image 2. Exploring innovation in the science lab during open house.'
            // ],
            [
                'id' => 3,
                'thumbnail' => asset('assets/assets/images/gallery/3.jpg'),
                'full' => asset('assets/assets/images/gallery/3.jpg'),
                'title' => '',
                'description' => 'Cross section of students during ICT session'
            ],
            [
                'id' => 4,
                'thumbnail' => asset('assets/assets/images/gallery/4.jpg'),
                'full' => asset('assets/assets/images/gallery/4.jpg'),
                'title' => '',
                'description' => 'Year 12 students during CBT exercise'
            ],
             [
                'id' => 5,
                'thumbnail' => asset('assets/assets/images/gallery/5.jpg'),
                'full' => asset('assets/assets/images/gallery/5.jpg'),
                'title' => '',
                'description' => 'Happy students'
            ],
             [
                'id' => 6,
                'thumbnail' => asset('assets/assets/images/gallery/6.jpg'),
                'full' => asset('assets/assets/images/gallery/6.jpg'),
                'title' => '',
                'description' => 'An on-going Data Processing class'
            ],
             [
                'id' => 7,
                'thumbnail' => asset('assets/assets/images/gallery/7.jpg'),
                'full' => asset('assets/assets/images/gallery/7.jpg'),
                'title' => '',
                'description' => 'The office of the director'
            ],
            //  [
            //     'id' => 8,
            //     'thumbnail' => asset('assets/assets/images/gallery/8.jpg'),
            //     'full' => asset('assets/assets/images/gallery/8.jpg'),
            //     'title' => 'Campus Event 4',
            //     'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            // ],
             [
                'id' =>9,
                'thumbnail' => asset('assets/assets/images/gallery/9.jpg'),
                'full' => asset('assets/assets/images/gallery/9.jpg'),
                'title' => '',
                'description' => 'Cross section of attentive students'
            ],
             [
                'id' => 10,
                'thumbnail' => asset('assets/assets/images/gallery/10.jpg'),
                'full' => asset('assets/assets/images/gallery/10.jpg'),
                'title' => '',
                'description' => 'An on-going mathematics class with our year 10 students'
            ],
             [
                'id' => 11,
                'thumbnail' => asset('assets/assets/images/gallery/11.jpg'),
                'full' => asset('assets/assets/images/gallery/11.jpg'),
                'title' => '',
                'description' => 'an on-going Nigerian language class at junior school'
            ],
             [
                'id' => 12,
                'thumbnail' => asset('assets/assets/images/gallery/12.jpg'),
                'full' => asset('assets/assets/images/gallery/12.jpg'),
                'title' => '',
                'description' => 'Year 10 learners'
            ],
            //  [
            //     'id' => 13,
            //     'thumbnail' => asset('assets/assets/images/gallery/13.jpg'),
            //     'full' => asset('assets/assets/images/gallery/13.jpg'),
            //     'title' => 'Campus Event 4',
            //     'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            // ],
            //  [
            //     'id' => 14,
            //     'thumbnail' => asset('assets/assets/images/gallery/14.jpg'),
            //     'full' => asset('assets/assets/images/gallery/14.jpg'),
            //     'title' => 'Campus Event 4',
            //     'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            // ],
             [
                'id' => 15,
                'thumbnail' => asset('assets/assets/images/gallery/15.jpg'),
                'full' => asset('assets/assets/images/gallery/15.jpg'),
                'title' => '',
                'description' => 'Happy students taking notes'
            ],
            //  [
            //     'id' => 16,
            //     'thumbnail' => asset('assets/assets/images/gallery/16.jpg'),
            //     'full' => asset('assets/assets/images/gallery/16.jpg'),
            //     'title' => 'Campus Event 4',
            //     'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            // ],
            //  [
            //     'id' => 17,
            //     'thumbnail' => asset('assets/assets/images/gallery/17.jpg'),
            //     'full' => asset('assets/assets/images/gallery/17.jpg'),
            //     'title' => 'Campus Event 4',
            //     'description' => 'Description for image 4. Cultural festival showcasing diversity and traditions.'
            // ],
             [
                'id' => 18,
                'thumbnail' => asset('assets/assets/images/gallery/18.jpg'),
                'full' => asset('assets/assets/images/gallery/18.jpg'),
                'title' => '',
                'description' => 'Assembly time'
            ],
            [
                'id' => 19,
                'thumbnail' => asset('assets/assets/images/gallery/19.jpeg'),
                'full' => asset('assets/assets/images/gallery/19.jpeg'),
                'title' => '',
                'description' => 'First term PTA meeting'
            ],
            [
                'id' => 20,
                'thumbnail' => asset('assets/assets/images/gallery/20.jpeg'),
                'full' => asset('assets/assets/images/gallery/20.jpeg'),
                'title' => '',
                'description' => 'Junior school students'
            ],
            [
                'id' => 21,
                'thumbnail' => asset('assets/assets/images/gallery/21.jpeg'),
                'full' => asset('assets/assets/images/gallery/21.jpeg'),
                'title' => '',
                'description' => '2025/2026 student executives'
            ],
            [
                'id' => 22,
                'thumbnail' => asset('assets/assets/images/gallery/22.jpeg'),
                'full' => asset('assets/assets/images/gallery/22.jpeg'),
                'title' => '',
                'description' => 'End of the year party'
            ],
             [
                'id' => 23,
                'thumbnail' => asset('assets/assets/images/gallery/23.jpeg'),
                'full' => asset('assets/assets/images/gallery/23.jpeg'),
                'title' => '',
                'description' => 'winners of first term extra-curricular competition finals  '
            ],
            
            
        ];

        
        return view('home')->with('pageTitle',$pageTitle)->with('images',$images);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
