<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jose Armando',
            'email' => 'josecito0hernandez@gmail.com',
            'password'=>bcrypt('GB3102JS9801')
        ]);
    }
}
