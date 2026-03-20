<?php

namespace App\Http\Controllers;

use App\Services\WorkService;


class WorkController extends Controller
{
    private WorkService $workService;

    public function __construct(WorkService $workService)
    {
        $this->workService = $workService;
    }


    public function index()
    {
        return view('pages.works', $this->workService->getWorkPageData());
    }


    public function show($slug)
    {
        return view('pages.work-single', $this->workService->getWorkPage($slug));
    }
}
