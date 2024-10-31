<?php

namespace App\Services;

use App\Repositories\Contracts\ArticleRepositoryInterface;

class FrontService
{
    protected $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getFrontPageData()
    {
        $articles = $this->articleRepository->all();
        return compact('articles');
    }
}
