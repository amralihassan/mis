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

    public function access()
    {
        return view('front-end.access');
    }

    public function client()
    {
        return view('front-end.client');
    }

    public function elearn()
    {
        return view('front-end.elearn');
    }

    public function ems()
    {
        return view('front-end.ems');
    }

    public function fire()
    {
        return view('front-end.fire');
    }

    public function fms()
    {
        return view('front-end.fms');
    }

    public function infra()
    {
        return view('front-end.infra');
    }

    public function mms()
    {
        return view('front-end.mms');
    }

    public function pms()
    {
        return view('front-end.pms');
    }

    public function smart()
    {
        return view('front-end.smart');
    }

    public function time()
    {
        return view('front-end.time');
    }

    public function voip()
    {
        return view('front-end.voip');
    }

}
