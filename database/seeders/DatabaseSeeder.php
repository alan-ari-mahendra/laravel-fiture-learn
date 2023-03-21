<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Zeta',
        //     'email' => 'zeta@gmail.com',
        // ]);

        // \App\Models\Student::factory()->create([
        //     'name' => 'Kaela',
        //     'email' => 'kaela@gmail.com',
        // ]);
        DB::table('videos')->insert([
            [
                'title' => 'Cara membuat Senjata Manual Tanpa Alat',
                'url' => 'john.doe@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // dan seterusnya
        ]);
    }
}
