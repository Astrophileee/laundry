<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin Laundry',
            'email' => 'iqbal@gmail.com',
            'password' => bcrypt('iqbal123'),
            'role' => 'admin',
        ]);
    }
}
