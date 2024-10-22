<?php

namespace App\Repositories;

use App\Models\Portofolio;
use App\Repositories\Contracts\PortfolioRepositoryInterface;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    public function all()
    {
        return Portofolio::all();
    }

    public function firts()
    {
     return Portofolio::first()->get();
    }
}
