<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Arr;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Student::factory()->createMany([
            [
                'name' => 'Kaela',
                'email' => 'kaela@gmail.com',
            ],
            [
                'name' => 'Yura',
                'email' => 'yura@gmail.com',
            ],
            [
                'name' => 'Saber',
                'email' => 'saber@gmail.com',
            ],
        ]);
    }
}