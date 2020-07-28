<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('thanh123');
        User::create(['name' => 'Admin','email' => 'admin@gmail.com', 'password' => $password]);
    }
}
