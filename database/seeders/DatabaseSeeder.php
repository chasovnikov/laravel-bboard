<?php

namespace Database\Seeders;

use App\Models\Bb;
use App\Models\Rubric;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        Rubric::factory(24)->create();
        Bb::factory(300)->create();

        // Bb::factory(1)->create([
        //     'title' => 'Грузовик',
        //     'content' => 'Грузоподъемность - 10 т.',
        //     'price' => 750000,
        //     'user_id' => 2,
        // ]);

        // Bb::factory(1)->create([
        //     'title' => 'Стул',
        //     'content' => 'Деревянный',
        //     'price' => 18000,
        //     'user_id' => 2,
        // ]);

        // Bb::factory(1)->create([
        //     'title' => 'Кровать',
        //     'content' => 'Двуспальная',
        //     'price' => 4000,
        //     'user_id' => 1,
        // ]);


        // Rubric::factory(1)->create([
        //     'name' => 'Техника',
        //     'parent_id' => null,
        // ]);

        // Rubric::factory(1)->create([
        //     'name' => 'Сельхозтехника',
        //     'parent_id' => 2,
        // ]);

        // Rubric::factory(1)->create([
        //     'name' => 'Строительная техника',
        //     'parent_id' => 2,
        // ]);
    }
}