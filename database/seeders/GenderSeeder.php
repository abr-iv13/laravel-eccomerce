<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\References\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::firstOrCreate([
            'name' => 'Мужской',
        ]);

        Gender::firstOrCreate([
            'name' => 'Женский',
        ]);
    }
}
