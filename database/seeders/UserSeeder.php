<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\orm; 
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = File::get(path:'database/json/orm.json');
        $orm = collect(json_decode($value));


        $orm->each(function($orm){
            orm::create([
                'name' => $orm->name,
                'email' => $orm->email,
                'age' => $orm->age,
                'phone' => $orm->phone,
                'city' => $orm->city
            ]);
        });
    }
}
