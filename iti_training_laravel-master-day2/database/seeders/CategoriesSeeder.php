<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => $faker->word,
            ]);
        }

    }
}
