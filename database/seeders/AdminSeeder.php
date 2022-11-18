<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id	name	email	password
        $admin = [
            [
                'id' => '1',
                'name' => 'Admin',
                'email' => 'admin01@gmail.com',
                'password' => 'admin123'
            ]
        ];

        foreach($admin as $adm){
            \App\Models\Admin::firstOrCreate($adm);
        }
    }
}
