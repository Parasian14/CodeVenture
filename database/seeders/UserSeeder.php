<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'nama_depan' => 'admin',
                'nama_belakang' => '1',
                'telepon' => '00000000000',
                'email' => 'admin1@gmail.com',
                'admin' => 1,
            ]);
    }
}