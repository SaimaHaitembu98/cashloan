<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_loan_application()
    {
        return view('admin.loan_application');
    }

};
