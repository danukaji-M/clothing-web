<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class color extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['color_name' => 'Red', 'color_description' => 'Red color'],
            ['color_name' => 'Blue', 'color_description' => 'Blue color'],
            ['color_name' => 'Green', 'color_description' => 'Green color'],
            ['color_name' => 'Yellow', 'color_description' => 'Yellow color'],
            ['color_name' => 'Black', 'color_description' => 'Black color'],
            ['color_name' => 'White', 'color_description' => 'White color'],
            ['color_name' => 'Purple', 'color_description' => 'Purple color'],
            ['color_name' => 'Pink', 'color_description' => 'Pink color']
        ];
        DB::table('colors')->insert($colors);
    }
}