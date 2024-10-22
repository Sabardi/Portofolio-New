<?php

namespace App\Services;

use App\Repositories\Contracts\PortfolioRepositoryInterface;

class FrontService
{
    protected $portfolioRepository;

    public function __construct(PortfolioRepositoryInterface $portfolioRepository)
    {
        $this->portfolioRepository = $portfolioRepository;
    }

    public function getFrontPageData()
    {
        $portofolios = $this->portfolioRepository->all();
        $portofoliosFirst = $this->portfolioRepository->firts();

        return compact('portofolios', 'portofoliosFirst');
    }
}
