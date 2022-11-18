<?php

namespace Database\Seeders;

use App\Models\ModelCelana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CelanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = [
            [
                "model" => "Jeans"
            ],
            [
                "model" => "Jogger"
            ],
            [
                "model" => "Chinos"
            ],
            [
                "model" => "Cargo"
            ],
            ];
    
            foreach ($model as $m) {
                ModelCelana::create([
                    'model' => $m["model"]
                ]);
            }
    }
}
