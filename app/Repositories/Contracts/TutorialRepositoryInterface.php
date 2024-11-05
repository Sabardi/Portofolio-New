<?php

namespace App\Repositories\Contracts;

use App\Models\Categori;
use App\Models\Tutorial;
use Illuminate\Support\Collection;

interface TutorialRepositoryInterface
{
    public function all(): Collection;

    // Method to fetch tutorials by category
    public function showCategory(Categori $category): Collection;

    // Method to find a tutorial by its slug
    public function findBySlug($slug): ?Tutorial;
}
