<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Usuário Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'adm@gmail.com',
            'password' => Hash::make('123456'), // Lembre-se de usar Hash::make para senhas
        ]);

        // Usuário Normal
        User::create([
            'name' => 'Normal User',
            'email' => 'teste@gmail.com',
            'password' => Hash::make('teste24'),
        ]);
    }
}
