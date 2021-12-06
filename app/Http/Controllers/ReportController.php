<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getReports()
    {
        $reports = DB::select('select * from report');
        dd($reports);
    }
}
