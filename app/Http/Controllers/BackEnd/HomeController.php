<?php
namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('back-end.home');
    }

    public function about()
    {
        return view('back-end.home');
    }

    public function contact()
    {
        return view('back-end.home');
    }

    public function solutions()
    {

    }



}
