<?php

use Illuminate\Database\Seeder;

class SignatorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('signator_types')->insert(['id' => 1, 'name' => 'ketua']);
        DB::table('signator_types')->insert(['id' => 2, 'name' => 'wakil_ketua']);
        DB::table('signator_types')->insert(['id' => 3, 'name' => 'komisaris']);
        DB::table('signator_types')->insert(['id' => 4, 'name' => 'asisten_komisaris']);
        DB::table('signator_types')->insert(['id' => 5, 'name' => 'kepala_seksi']);
        DB::table('signator_types')->insert(['id' => 6, 'name' => 'kepala_bagian']);
        DB::table('signator_types')->insert(['id' => 7, 'name' => 'kepala_sub_bagian']);
        DB::table('signator_types')->insert(['id' => 8, 'name' => 'staf']);
        DB::table('signator_types')->insert(['id' => 9, 'name' => 'sekretaris']);
    }
}
