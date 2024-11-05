<?php

namespace App\Http\Controllers;

use App\Services\FrontService;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index(): View
    {
        $data = $this->frontService->getFrontPageData();
        return view('front.index', $data);
    }

    public function showTutorialsByCategory(string $slug): View
    {
        $category = Categori::where('slug', $slug)->firstOrFail();

        $tutorials = $this->frontService->getTutorialsByCategory($category);

        return view('front.tutorial.index', compact('tutorials', 'category'));
    }

    public function showTutorial($slug): View
    {
        $tutorial = $this->frontService->getTutorialBySlug($slug);

        if (!$tutorial) {
            abort(404, 'Tutorial not found');
        }

        return view('front.tutorial.show', compact('tutorial'));
    }
}
