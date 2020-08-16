<?php

use \App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User;
        $user->name = 'Roberto Pinheiro';
        $user->email = 'betopinheiro1005@yahoo.com.br';
        $user->password = bcrypt('123456');

        $user->save();


        User::create([
            'name' => 'Francisco Castro',
            'email' => 'franciscocastro@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
