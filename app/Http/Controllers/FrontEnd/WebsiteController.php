<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Operations\CarouselOp;
use App\Models\Operations\CompanyOp;

class WebsiteController extends Controller
{
    public function homepage()
    {
        $company = CompanyOp::data();
        $carousels = CarouselOp::_fetchAll();
        return view('front-end.home', compact('company', 'carousels'));
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
