<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Operations\CarouselOp;
use App\Models\Operations\CompanyOp;
use App\Models\Operations\ContactOp;
use App\Models\Operations\SolutionOp;

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
        $softwares = SolutionOp::softwares();
        $networks = SolutionOp::networks();
        return view('front-end.solutions', compact('softwares', 'networks'));
    }

    public function showSolution($id)
    {
        $solution = SolutionOp::_fetchById($id);
        return view('front-end.show-solution', compact('solution'));
    }

    public function projects()
    {
        return view('front-end.projects');
    }

    public function contact()
    {
        $solutions = SolutionOp::_fetchAll();
        return view('front-end.contact', compact('solutions'));
    }

    public function storeContacts()
    {
        ContactOp::_store();
        return redirect()->back();
    }

    public function service()
    {
        return view('front-end.service');
    }
}
