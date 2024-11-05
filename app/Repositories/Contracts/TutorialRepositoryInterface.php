<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface TutorialRepositoryInterface
{
    public function all(): Collection;
}
