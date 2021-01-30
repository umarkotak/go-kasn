# GO-KASN

Aplikasi internal pegawai KASN untuk melayani tugas - tugas.

---

## Dev notes

- untuk masuk ke direktori aplikasi: cd C:/xampp/htdocs/go-kasn
- untuk menjalankan aplikasi: php artisan serve --port 8000
- untuk eksekusi migrasi: php artisan migrate
- untuk membuat migrasi: php artisan make:migration modify_users_table_v1

## Setup
- composer require jeroennoten/laravel-adminlte
- composer require laravel/ui
- composer require doctrine/dbal
- php artisan ui vue --auth
- php artisan adminlte:install
- npm install --global cross-env
- npm install --no-bin-links
- npm run dev

# Links
- https://github.com/jeroennoten/Laravel-AdminLTE/wiki/3.-Updating
