<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0;$i<100;$i++){
        Service::create([
            "name"=>"name $i",
            "descrption"=>"description $i"


        ]);
       }
    }
}
