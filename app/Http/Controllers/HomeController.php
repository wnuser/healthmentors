<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\frontSlider;
use App\Blog;
use App\blogCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $frontSlider     =   frontSlider::get();
        $categories      =   blogCategory::get();
        $recentBlogs     =   Blog::orderBy('id', 'desc')->take(4)->get();
        $defaultBlogs    =   Blog::orderBy('id', 'desc')->skip(4)->take(2)->get();
        $popularBlogs    =   Blog::orderBy('id', 'desc')->whereFrontCategory(config('constants.FRONTCATEGORY.POPULAR'))->get();
        $generalBlogs    =   Blog::orderBy('id', 'desc')->skip(6)->take(10)->get();
        $trendingBlogs   =   Blog::orderBy('id', 'desc')->whereFrontCategory(config('constants.FRONTCATEGORY.TRENDING'))->get();
        $trendingCount   =   $trendingBlogs->count();

        $supperArray     =  array();
        $subArray        =  array();
        $count           =  0;
       
        foreach ($trendingBlogs as $key => $value) {

            $subArray[$key]   =  $value->toArray();
            $count++;
            if($count%4 == 0)
            {
                $supperArray[$count]  = $subArray;
                $subArray             = array();
            } 
            else {
                if($count == $trendingCount){
                $supperArray[$count]  = $subArray;
                }
            }
        }

        return view('welcome', compact('frontSlider', 'recentBlogs', 'defaultBlogs', 'trendingBlogs', 'popularBlogs', 'categories', 'generalBlogs', 'supperArray'));
    }
}
