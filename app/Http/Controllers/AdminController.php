<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loan_application()
    {
        return view('admin.loan_application');
    }

}
