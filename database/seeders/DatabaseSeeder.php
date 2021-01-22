<?php

namespace Database\Seeders;

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
        //Usuario admin

        \App\Models\User::factory()->create([
            'name' => "Gerson Altamirano",
            'email' => "gersonaltamirano@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$TYOlb3k5Vgg41etc8ZF6SeDyJUyuyTuaJGjl4xIbhLvs2442KXRI2', // Admin123
        ]);

        \App\Models\Team::factory()->create([
            'name' => 'Gerson Team',
            'user_id' => 1,
            'personal_team' => true,
        ]);
        
        


        \App\Models\User::factory(100)->create();
        // \App\Models\Team::factory(101)->create();
        \App\Models\Menu::factory(3)->create();

        $this->call(CategoryfaiconsTableSeeder::class);
        $this->call(FaiconsTableSeeder::class);
    }
}
