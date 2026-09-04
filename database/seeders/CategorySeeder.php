<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['sembako','minuman', 'makanan ringan', 'kebutuhan rumah tangga' ];
        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
