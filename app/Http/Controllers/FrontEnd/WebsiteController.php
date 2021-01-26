<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Operations\CompanyOp;

class WebsiteController extends Controller
{
    public function homepage()
    {
        $company = CompanyOp::data();
        return view('front-end.home', compact('company'));
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
