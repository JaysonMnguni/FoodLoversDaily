<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Admin User:
        User::create([
            "first_name" => "super",
            "last_name" => "admin",
            "email" => "super.admin@foodloversdaily.com",
            "email_verified_at" => now(),
            "password" => bcrypt("password123"),
            "is_admin" => 1
        ]);

    }
}
