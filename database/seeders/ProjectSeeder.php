<?php

namespace Database\Seeders;

use App\Models\Projects;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 7; $i++) {
            Projects::create([
ÉÉ
            ]);
        }
    }
}
