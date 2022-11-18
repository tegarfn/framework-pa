<?php

namespace Database\Seeders;

use App\Models\ModelBaju;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BajuSeeder extends Seeder
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
            "model" => "Polo"
        ],
        [
            "model" => "T-Shirt"
        ],
        [
            "model" => "Sweeter"
        ],
        [
            "model" => "Kaos Oblong"
        ],
        ];

        foreach ($model as $m) {
            ModelBaju::create([
                'model' => $m["model"]
            ]);
        }
    }
}

