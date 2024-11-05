<?php

namespace App\Http\Controllers;

use App\Services\FrontService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    /**
     * Display the front page with articles and tutorials.
     *
     * @return View
     */
    public function index(): View
    {
        $data = $this->frontService->getFrontPageData();

        return view('front.index', $data);
    }
}
