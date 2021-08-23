<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\References\Season;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::firstOrCreate([
            "name" => "Зима",
        ]);

        Season::firstOrCreate([
            "name" => "Лето",
        ]);

        Season::firstOrCreate([
            "name" => "Демисезон",
        ]);
    }
}
