<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\WorkPage;
use Illuminate\Http\Request;

class WorkController extends Controller
{

    public function index()
    {
        $works = Work::orderBy('created_at', 'desc')->get();
        $worksSeo = WorkPage::firstOrFail();

        return view('pages.works', compact('works', 'worksSeo'));
    }


    public function show($slug)
    {

        $work = Work::where('slug', $slug)->firstOrFail();

        return view('pages.work-single', compact('work'));
    }
}
