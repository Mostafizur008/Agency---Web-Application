<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting\Setting::create([

            'title' => "FUJI ELEVATOR BD",
            'description' => "100% Genuine Product",
            'address' => "House #2C, Road #19, Nikunja #2, Khilkhet, Dhaka-1229, Bangladesh.",
            'contract' => "+88 01748 285685",
            'email' => "info@fujielevatorbd.com",
        ]);
    }
}
