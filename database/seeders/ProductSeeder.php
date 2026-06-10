<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'photo' => null,
            'name' => 'Pola Jahit Bagian A',
            'price' => 30000,
            'description' => 'Buku tutorial digital berisi pola dan panduan lengkap untuk membuat pola jahit bagian A.'
        ]);
    }
}