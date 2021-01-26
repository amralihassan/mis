<?php

namespace App\Models\Operations;

use App\Models\Company;

class CompanyOp extends Company
{
    public static function data()
    {
        return Company::first();
    }

    public static function _update()
    {
        $data = Company::first();
        $data->update(request()->only('about', 'mission', 'vision', 'customers', 'projects','partners'));
        return true;
    }
}
