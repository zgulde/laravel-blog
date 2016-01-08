<?php

class UserTableSeeder extends Seeder 
{
    public function run()
    {
        $user = new User();
        $user->email = 'st@test.com';
        $user->password = Hash::make($_ENV['USER_PASSWORD']);
        $user->first_name = 'first';
        $user->last_name = 'last';
        $user->username = 'flast';
        $user->location = 'someplace, somewhere';
        $user->save();
    }
}
