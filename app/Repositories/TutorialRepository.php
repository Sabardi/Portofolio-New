<?php

namespace App\Repositories;

use App\Models\Tutorial;
use App\Models\Categori;
use App\Repositories\Contracts\TutorialRepositoryInterface;
use Illuminate\Support\Collection;

class TutorialRepository implements TutorialRepositoryInterface
{
    public function all(): Collection
    {
        return Tutorial::all();
    }

    public function showCategory(Categori $category): Collection
    {
        // Assuming there is a relationship between Tutorial and Categori, like `category_id`
        return Tutorial::where('category_id', $category->id)->get();
    }

    public function findBySlug($slug): ?Tutorial
    {
        // Fetch a single tutorial by slug
        return Tutorial::where('slug', $slug)->first();
    }
}
