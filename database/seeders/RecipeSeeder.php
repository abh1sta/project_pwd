<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Recipe::create([
            'name' => 'Resep Contoh',
            'ingredients' => 'Bahan-bahan contoh',
            'instructions' => 'Petunjuk memasak contoh',
        ]);
    }
    
}