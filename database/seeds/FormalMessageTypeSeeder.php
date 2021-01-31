<?php

use Illuminate\Database\Seeder;

class FormalMessageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('formal_message_types')->insert(['id' => 1, 'name' => 'rekomendasi', 'header_type' => 'garuda']);
        DB::table('formal_message_types')->insert(['id' => 2, 'name' => 'surat_biasa', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 3, 'name' => 'undangan_tipe_1', 'header_type' => 'garuda']);
        DB::table('formal_message_types')->insert(['id' => 4, 'name' => 'undangan_tipe_2', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 5, 'name' => 'surat_tugas_tipe_1', 'header_type' => 'garuda']);
        DB::table('formal_message_types')->insert(['id' => 6, 'name' => 'surat_tugas_tipe_2', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 7, 'name' => 'surat_keputusan_tipe_1', 'header_type' => 'garuda']);
        DB::table('formal_message_types')->insert(['id' => 8, 'name' => 'surat_keputusan_tipe_2', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 9, 'name' => 'surat_edaran_tipe_1', 'header_type' => 'garuda']);
        DB::table('formal_message_types')->insert(['id' => 10, 'name' => 'surat_edaran_tipe_2', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 11, 'name' => 'pengumuman_tipe_1', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 12, 'name' => 'pengumuman_tipe_2', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 13, 'name' => 'perjanjian_kerjasama_tipe_1', 'header_type' => 'garuda']);
        DB::table('formal_message_types')->insert(['id' => 14, 'name' => 'perjanjian_kerjasama_tipe_2', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 15, 'name' => 'surat_keterangan_tipe_1', 'header_type' => 'garuda']);
        DB::table('formal_message_types')->insert(['id' => 16, 'name' => 'surat_keterangan_tipe_2', 'header_type' => 'kasn']);
        DB::table('formal_message_types')->insert(['id' => 17, 'name' => 'peraturan_ketua', 'header_type' => 'garuda']);
        DB::table('formal_message_types')->insert(['id' => 18, 'name' => 'nota_dinas', 'header_type' => 'none']);
    }
}
