<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{

    public function index()
    {
        $works = Work::orderBy('created_at', 'desc')->get();

        return view('pages.works', compact('works'));
    }


    public function show($slug)
    {

        $work = Work::where('slug', $slug)->firstOrFail();

        return view('pages.work-single', compact('work'));
    }
}
