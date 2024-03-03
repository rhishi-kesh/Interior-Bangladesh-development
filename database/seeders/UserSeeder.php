<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = 'user';

        DB::table('users')->insert([
            'name'=> 'user',
            'email'=> 'user@gmail.com',
            'password'=> Hash::make($password),
            'position'=> 'user',
            'role' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
