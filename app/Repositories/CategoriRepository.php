<?php

namespace App\Repositories;

use App\Models\Categori;
use App\Repositories\Contracts\CategoriRepositoryInterface;

class CategoriRepository implements CategoriRepositoryInterface
{
    public function all()
    {
        return Categori::all();
    }
}
