<?php

use App\Models\Todo;
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
        // $this->call(UsersTableSeeder::class);

        DB::table('todos')->insert([
            'name' => rand(),
            'email' => rand(),
            'phone' => rand(),
            'todo' => rand(),
        ]);
    }
}
