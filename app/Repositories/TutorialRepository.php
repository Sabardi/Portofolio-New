<?php

namespace App\Repositories;

use App\Models\Tutorial;
use App\Repositories\Contracts\TutorialRepositoryInterface;
use Illuminate\Support\Collection;

class TutorialRepository implements TutorialRepositoryInterface
{
    public function all(): Collection
    {
        return Tutorial::all();
    }
}
