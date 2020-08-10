<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            ['name' => 'anhmv2', 'password' => bcrypt('anhmv'), 'email' => Str::random(3) . '@gmail.com'],
            ['name' => Str::random(3), 'password' => bcrypt('anhmv'), 'email' => Str::random(3) . '@gmail.com'],
            ['name' => Str::random(3), 'password' => bcrypt('anhmv'), 'email' => Str::random(3) . '@gmail.com'],
            ['name' => Str::random(3), 'password' => bcrypt('anhmv'), 'email' => Str::random(3) . '@gmail.com'],
            ['name' => Str::random(3), 'password' => bcrypt('anhmv'), 'email' => Str::random(3) . '@gmail.com'],
            ['name' => Str::random(3), 'password' => bcrypt('anhmv'), 'email' => Str::random(3) . '@gmail.com']
        ]);
    }
}
