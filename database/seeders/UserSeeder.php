<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database\json\users.json');
        $users = json_decode($json);

        foreach ($users as $user) {
            User::create([
                'name' => $user->name,
                'email' => $user->email,
            ]);
        }
    }
}
