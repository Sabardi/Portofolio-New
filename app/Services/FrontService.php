<?php

namespace App\Services;

use App\Repositories\Contracts\ArticleRepositoryInterface;
use App\Repositories\Contracts\CategoriRepositoryInterface;
use App\Repositories\Contracts\TutorialRepositoryInterface;

class FrontService
{
    protected $articleRepository;
    protected $tutorialRepository;
    protected $categoriesRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository, TutorialRepositoryInterface $tutorialRepository, CategoriRepositoryInterface $categoriesRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->tutorialRepository = $tutorialRepository;
        $this->categoriesRepository = $categoriesRepository;
    }

    public function getFrontPageData(): array
    {
        $articles = $this->articleRepository->all();
        $tutorials = $this->tutorialRepository->all();
        $categories = $this->categoriesRepository->all();

        return compact('articles', 'tutorials', 'categories');
    }
}
