<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Operations\ContactOp;
use App\Models\Operations\SettingOp;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('front-end.home');
    }

    public function about()
    {
        return view('front-end.about');
    }

    public function softwareSolutions()
    {

        return view('front-end.software-solutions');
    }

    public function networkSolutions()
    {
        return view('front-end.network-solutions');
    }

    public function showSolution()
    {
        return view('front-end.show-solution');
    }

    public function projects()
    {
        return view('front-end.projects');
    }

    public function contact()
    {
        return view('front-end.contact');
    }

    public function storeContacts()
    {
        ContactOp::_store();
        return redirect()->back();
    }

}
