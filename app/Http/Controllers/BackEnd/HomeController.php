<?php
namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Operations\ContactOp;
use App\Models\Operations\SolutionOp;
use App\Models\Operations\UserOp;

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
        $users = UserOp::_count();
        $contacts = ContactOp::_count();
        $networks = SolutionOp::_networkCount();
        $softwares = SolutionOp::_softwareCount();
        return view('back-end.home', compact('users', 'networks', 'contacts', 'softwares'));
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
