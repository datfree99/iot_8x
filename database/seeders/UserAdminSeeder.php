<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = config('core.admin');

        User::firstOrCreate([
            'email' => $userAdmin['email'],
        ], [
            'name' => $userAdmin['name'],
            'password' => Hash::make($userAdmin['password']),
        ]);
    }
}
