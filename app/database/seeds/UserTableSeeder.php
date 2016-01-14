<?php

class UserTableSeeder extends Seeder 
{
    public function run()
    {
        $user = new User();
        $user->email = 'a@a.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->first_name = 'first';
        $user->last_name = 'last';
        $user->username = 'asdf';
        $user->location = 'someplace, somewhere';
        $user->save();
    }
}
