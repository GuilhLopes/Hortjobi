<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Criando um usuário admin
        User::create([
            'name' => 'Admin User',
            'email' => 'adm@gmail.com',
            'password' => Hash::make('123456'),
            'is_admin' => true,  // Definindo o usuário como admin
        ]);

        // Criando um usuário normal
        User::create([
            'name' => 'Normal User',
            'email' => 'teste@gmail.com',
            'password' => Hash::make('teste24'),
            'is_admin' => false,  // Definindo o usuário como normal
        ]);
    }
}
