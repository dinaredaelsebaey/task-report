<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $statistics = Statistics::orderBy('task_count', 'desc')->get();
        //dd($statistics);
        return view('statistics.index', compact('statistics'));
    }
}
