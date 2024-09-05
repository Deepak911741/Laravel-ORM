<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\stuses; 
use Illuminate\Support\Facades\File;

class stuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = File::get(path:'database/json/stu.json');
        $stus = collect(json_decode($value));


        $stus->each(function($stus){
            stuses::create([
                'first_name' => $stus->first_name,
                'last_name' => $stus->last_name,
                'email' => $stus->email,
                'date_of_birth' => $stus->date_of_birth,
                'grade' => $stus->grade
            ]);
        });
    }
}
