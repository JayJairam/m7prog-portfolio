<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('projects')->insert([
            'title'       => $faker->colorName(),
            'intro'       => $faker->text(50),
            'description' => $faker->text(),
            'active'        => true,
        ]);

        DB::table('projects')->insert([
            'title'         => 'Mijn project titel',
            'intro'         => 'Anim non lorem sit est.',
            'description'   => 'Enim labore eu, sed. Sed esse incididunt aute velit. Incididunt, aute velit duis amet sint. Duis amet sint pariatur esse anim officia mollit. Sint pariatur esse anim. Esse anim officia mollit laboris aliqua, et esse.',
            'active'        => true,
        ]);

    }

}


