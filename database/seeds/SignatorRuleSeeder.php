<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SignatorRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // rekomendasi
        DB::table('signator_rules')->insert(['id' => 1, 'formal_message_id' => 1, 'signator_type_id' => 1]);
        DB::table('signator_rules')->insert(['id' => 2, 'formal_message_id' => 1, 'signator_type_id' => 2]);

        // surat biasa
        DB::table('signator_rules')->insert(['id' => 3, 'formal_message_id' => 2, 'signator_type_id' => 4]);

        // undangan tipe 1
        DB::table('signator_rules')->insert(['id' => 4, 'formal_message_id' => 3, 'signator_type_id' => 1]);
        DB::table('signator_rules')->insert(['id' => 5, 'formal_message_id' => 3, 'signator_type_id' => 2]);

        // undangan tipe 2
        DB::table('signator_rules')->insert(['id' => 6, 'formal_message_id' => 4, 'signator_type_id' => 4]);
        DB::table('signator_rules')->insert(['id' => 7, 'formal_message_id' => 4, 'signator_type_id' => 6]);

        // surat tugas tipe 1
        DB::table('signator_rules')->insert(['id' => 8, 'formal_message_id' => 5, 'signator_type_id' => 1]);
        DB::table('signator_rules')->insert(['id' => 9, 'formal_message_id' => 5, 'signator_type_id' => 2]);

        // surat tugas tipe 2
        DB::table('signator_rules')->insert(['id' => 10, 'formal_message_id' => 6, 'signator_type_id' => 4]);

        // surat keputusan tipe 1

        // surat keputusan tipe 2

        // surat edaran tipe 1

        // surat edaran tipe 2

        // pengumuman tipe 1

        // pengumuman tipe 2

        // perjanjian kerjasama tipe 1

        // perjanjian kerjasama tipe 2

        // surat keterangan tipe 1

        // surat keterangan tipe 2

        // peraturan ketua

        // nota dinas
    }
}
