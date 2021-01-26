<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Operations\CompanyOp;

class CompanyController extends Controller
{
    public function company()
    {
        $company = CompanyOp::data();
        return view('back-end.pages.about', compact('company'));
    }

    public function update()
    {
        CompanyOp::_update();
        toastr()->success('Updated successfully');
        return redirect()->back();
    }
}
