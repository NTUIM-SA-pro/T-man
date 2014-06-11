<?php
 
class UserSeeder extends DatabaseSeeder
{
    public function run()
    {
        $users = [
            [
                'account' => 'panther@gmail.com',
                'password' => '1234'
            ],
            [
                'name' => 'sex@gmail.com',
                'description' => '1234'
            ]
        ];
  
        foreach ($users as $user) {
            User::create($user);
        }
    }
}