<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Super Admin",
            "phone" => "07084677075",
            "email" => "john.doe@gmail.com",
            "password" => Hash::make('secret1234'),
            "type" => "super",
        ]);
    }
}
