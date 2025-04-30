<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class ReportController extends Controller
{
    public function index()
    {
        return view('admin.reports.index');
    }

    public function ytd()
    {
        return view('admin.reports.ytd');
    }

    public function business()
    {
        return view('admin.reports.business');
    }

    public function country()
    {
        return view('admin.reports.country');
    }
   
}