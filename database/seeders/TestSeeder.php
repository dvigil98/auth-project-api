<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role();
        $role->name = 'Administrador';
        $role->save();

        $user = new User();
        $user->role_id = $role->id;
        $user->name = 'David Vigil';
        $user->email = 'dvigil@email.com';
        $user->password = Hash::make('Admin$1234');
        $user->active = 1;
        $user->save();
    }
}
