<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'go.kasn.dev',
            'email' => 'go.kasn.dev@gmail.com',
            'password' => Hash::make('g0.k4sn.d3v'),
            'role' => 'superadmin',
            'position' => 'superadmin',
            'nip' => '0'
        ]);
        DB::table('users')->insert([
            'name' => 'go.kasn.dev.user',
            'email' => 'go.kasn.dev.user@gmail.com',
            'password' => Hash::make('g0.k4sn.d3v'),
            'role' => 'normaluser',
            'position' => 'sekretaris',
            'nip' => '000-1'
        ]);
        DB::table('users')->insert([
            'name' => 'go.kasn.dev.user.1',
            'email' => 'go.kasn.dev.user.1@gmail.com',
            'password' => Hash::make('g0.k4sn.d3v'),
            'role' => 'normaluser',
            'position' => 'ketua',
            'nip' => '000-2'
        ]);
        DB::table('users')->insert([
            'name' => 'go.kasn.dev.user.2',
            'email' => 'go.kasn.dev.user.2@gmail.com',
            'password' => Hash::make('g0.k4sn.d3v'),
            'role' => 'normaluser',
            'position' => 'wakil_ketua',
            'nip' => '000-3'
        ]);
        DB::table('users')->insert([
            'name' => 'go.kasn.dev.user.3',
            'email' => 'go.kasn.dev.user.3@gmail.com',
            'password' => Hash::make('g0.k4sn.d3v'),
            'role' => 'normaluser',
            'position' => 'staf',
            'nip' => '000-4'
        ]);
    }
}
