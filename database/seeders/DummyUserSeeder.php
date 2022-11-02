<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = 
        [
            // [
            //     'name'=> 'Admin',
            //     'email' => 'test@admin.com',
            //     'password' => bcrypt('abcd1234'),
            //     'user_role' => ''
            // ],
            [
                'name'=> 'User02',
                'email' => 'test02@user.com',
                'password' => bcrypt('abcd1234'),
                'user_role' => ''
                
            ]
        ];

        foreach($userData as $key => $value){
            User::create($value);
        }
        //
    }
}
