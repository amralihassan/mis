<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('front-end.home');
    }

    public function solutions()
    {
        return view('front-end.solutions');
    }

    public function projects()
    {
        return view('front-end.projects');
    }

    public function contact()
    {
        return view('front-end.contact');
    }
        public function service()
    {
        return view('front-end.service');
    }
}
