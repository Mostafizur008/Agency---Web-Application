<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Home\About::create([

            'owner' => "The Journey of our company started from Elevator sector, Generator Sector. ",
            'mission' => "Our Mission is to provide quality & innovative Product of vertical transportation of people",
            'vission' => "We will be one of the most trusted, admired and successful Elevator & Engineering company in Bangladesh",
            'since' => "Award Winning Company - Since 1980 -",
        ]);
    }
}
