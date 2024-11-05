<?php

namespace Database\Seeders;

use App\Models\Categori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Laravel', 'description' => 'Laravel',],
            ['name' => 'php', 'description' => 'php', ],
            ['name' => 'javascript', 'description' => 'javascript',  ],
            ['name' => 'html', 'description' => 'html',  ],
            ['name' => 'css', 'description' => 'css',  ],
            ['name' => 'bootstrap', 'description' => 'bootstrap', ],
        ];

        foreach ($categories as $category) {
            Categori::updateOrCreate(
                ['name' => $category['name']],  // Match based on the name
                [ // Attributes to update or create
                    'description' => $category['description'],
                    'slug' => Str::slug($category['name']) // Generate a slug
                ]
            );
        }

    }
}
