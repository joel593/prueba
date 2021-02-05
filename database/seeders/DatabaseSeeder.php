<?php

namespace Database\Seeders;

use App\Models\Config;
use App\Models\Rol;
use App\Models\User;
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
        Rol::factory(10)->create();
        Config::factory(10)->create();
        User::factory(10)->create();
    }
}
