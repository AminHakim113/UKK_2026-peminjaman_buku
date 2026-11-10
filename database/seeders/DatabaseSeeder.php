<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => 'admin123', 'role' => 'admin']);
        User::create(['name' => 'taro', 'email' => 'taro@gmail.com', 'password' => 'taro123', 'role' => 'siswa', 'kelas' => 'XII RPL 2']);

        Book::create(['title' => 'Kapan tidak ada blonde di nordchlife', 'author' => 'Taro and The gang', 'publisher' => 'anjaypt', 'year' => 2026, 'stock' => 1]);
        Book::create(['title' => 'BumiRestoe', 'author' => 'SayaKekna', 'publisher' => 'Sayamosaja', 'year' => 1914, 'stock' => 4]);
    }
}