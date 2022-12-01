<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Hero;
use App\Models\About;
use App\Models\Price;
use App\Models\Footer;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Hero::factory(1)->create();
        About::factory(1)->create();
        Service::factory(6)->create();
        Footer::factory(1)->create();
        Price::factory(3)->create();
         
    }
}
