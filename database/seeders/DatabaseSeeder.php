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
        // \App\Models\User::factory(30)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'class' => 'guru',
            'id' => 111311,

            'admin' => true,
            'email' => 'afler@example.com',
        ]);

        // \App\Models\User::factory()->create([
            
            
        //     'id' => 11111,
        //     'name' => 'Test Commit',
        //     'commit' => true,
        //     'class' => 'guru',
        //     'email' => 'fler@example.com',
        // ]);

        
            $this->call([
                CandidateSeeder::class,
            ]);
       
    }
}
