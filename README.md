# GO-KASN

Aplikasi internal pegawai KASN untuk melayani tugas - tugas.

---

## Dev notes

- untuk masuk ke direktori aplikasi: cd C:/xampp/htdocs/go-kasn
- untuk menjalankan aplikasi: php artisan serve --port 8000
- untuk eksekusi migrasi: php artisan migrate
- untuk membuat migrasi: php artisan make:migration modify_users_table_v1
- untuk membuat seed: php artisan make:seeder UserSeeder
- untuk menjalankan seed: php artisan db:seed / php artisan db:seed --class=UserSeeder

## Setup
- composer require jeroennoten/laravel-adminlte
- composer require laravel/ui
- composer require doctrine/dbal
- php artisan ui vue --auth
- php artisan adminlte:install
- npm install --global cross-env
- npm install --no-bin-links
- npm run dev

## Links
- https://github.com/jeroennoten/Laravel-AdminLTE/wiki/3.-Updating

---

## Requirement Notes
header_type = ['garuda', 'kasn']

signator_types = ['ketua', 'wakil_ketua', 'komisaris', 'asisten_komisaris', 'kepala_seksi', 'kepala_bagian', 'kepala_sub_bagian', 'staf', 'sekretaris']

formal_message_types = ['rekomendasi', 'surat_biasa', 'undangan_tipe_1', 'undangan_tipe_2', 'surat_tugas_tipe_1', 'surat_tugas_tipe_2', 'surat_keputusan_tipe_1', 'surat_keputusan_tipe_2', 'surat_edaran_tipe_1', 'surat_edaran_tipe_2', 'pengumuman_tipe_1', 'pengumuman_tipe_2', 'perjanjian_kerjasama_tipe_1', 'perjanjian_kerjasama_tipe_2', 'surat_keterangan_tipe_1', 'surat_keterangan_tipe_2', 'peraturan_ketua', 'nota_dinas']

signator_rules = {
    'rekomendasi': '',
    'surat_biasa': '',
    'undangan_tipe_1': '',
    'undangan_tipe_2': '',
    'surat_tugas_tipe_1': '',
    'surat_tugas_tipe_2': '',
    'surat_keputusan_tipe_1': '',
    'surat_keputusan_tipe_2': '',
    'surat_edaran_tipe_1': '',
    'surat_edaran_tipe_2': '',
    'pengumuman_tipe_1': '',
    'pengumuman_tipe_2': '',
    'perjanjian_kerjasama_tipe_1': '',
    'perjanjian_kerjasama_tipe_2': '',
    'surat_keterangan_tipe_1': '',
    'surat_keterangan_tipe_2': '',
    'peraturan_ketua': '',
    'nota_dinas': ''
}
