<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        \App\Models\User::insert([[
            'uuid'=>'d3d3t4g5f7e8',
            'name'=>"Super Administrator",
            'email'=>'super@admin.com',
            'password'=>'$2y$12$JyKMoneGjyYOvmaXItizL..48pwJdXkrCwyzdaS7LvicXPOtBHL4C',
            'user_type'=>'super_admin'
        ],[
            'uuid'=>'d1rfg4g5f7e8',
            'name'=>"Administrator",
            'email'=>'admin@demo.com',
            'password'=>'$2y$12$JyKMoneGjyYOvmaXItizL..48pwJdXkrCwyzdaS7LvicXPOtBHL4C',
            'user_type'=>'admin'
        ],[
            'uuid'=>'d1rfg4g5f7e8',
            'name'=>"Test User",
            'email'=>'user@demo.com',
            'password'=>'$2y$12$JyKMoneGjyYOvmaXItizL..48pwJdXkrCwyzdaS7LvicXPOtBHL4C',
            'user_type'=>'user'
        ]]);
    }
}
