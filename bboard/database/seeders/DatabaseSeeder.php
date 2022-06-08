<?php

namespace Database\Seeders;

use App\Models\Bb;
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
        \App\Models\User::factory(10)->create();

        Bb::factory(1)->create([
            'title' => 'Шкаф',
            'content' => 'Деревянный двустворчатый',
            'price' => 6000,
            'user_id' => 1,
        ]);

        Bb::factory(1)->create([
            'title' => 'Грузовик',
            'content' => 'Грузоподъемность - 10 т.',
            'price' => 750000,
            'user_id' => 2,
        ]);

        Bb::factory(1)->create([
            'title' => 'Стул',
            'content' => 'Деревянный',
            'price' => 18000,
            'user_id' => 2,
        ]);

        Bb::factory(1)->create([
            'title' => 'Кровать',
            'content' => 'Двуспальная',
            'price' => 4000,
            'user_id' => 1,
        ]);
    }
}