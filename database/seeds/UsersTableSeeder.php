<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'John Doe',
            'email'    => 'johndoe@gmail.com',
            'password' => Hash::make('password'),
        ));
    }
}
