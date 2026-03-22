<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Person;
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
        // $this->call(AuthorsTableSeeder::class);
        Person::factory(10)->create();
    }
}
