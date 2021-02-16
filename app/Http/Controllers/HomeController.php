<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        return view('about_us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function terms()
    {
        return view('terms');
    }

    public function article1()
    {
        return view('article1');
    }
     
    public function article2()
    {
        return view('article2');
    }

    public function article3()
    {
        return view('article3');
    }

}
