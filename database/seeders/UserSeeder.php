<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'admin', 
            'last_name'  => 'admin', 
            'email' => 'admin@admin.com',
            'phone' => '321213432',
            'password' => Hash::make('password'),
            'usertype' => 1,
            
        ]); 
    }
}
