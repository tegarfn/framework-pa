<?php

namespace Database\Seeders;

use App\Models\ModelSepatu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SepatuSeeder extends Seeder
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
                "model" => "Sneakers"
            ],
            [
                "model" => "Boots"
            ],
            [
                "model" => "Slip On"
            ]
            ];
    
            foreach ($model as $m) {
                ModelSepatu::create([
                    'model' => $m["model"]
                ]);
            }
    }
}
