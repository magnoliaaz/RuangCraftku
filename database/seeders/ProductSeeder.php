<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'photo' => 'produk.jpg',
                'name' => 'Pola Jahit Bagian A',
                'price' => 30000,
                'description' => 'Buku tutorial digital berisi pola dan panduan lengkap untuk membuat pola jahit bagian A.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo' => 'produk.jpg',
                'name' => 'Kain Katun Premium',
                'price' => 45000,
                'description' => 'Kain katun premium berkualitas tinggi dan nyaman digunakan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo' => 'produk.jpg',
                'name' => 'Benang Jahit Set',
                'price' => 25000,
                'description' => 'Set benang jahit dengan berbagai pilihan warna.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo' => 'produk.jpg',
                'name' => 'Pola Dress Anak',
                'price' => 35000,
                'description' => 'Pola digital untuk membuat dress anak dengan berbagai ukuran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo' => 'produk.jpg',
                'name' => 'Kain Linen Soft',
                'price' => 55000,
                'description' => 'Kain linen lembut cocok untuk berbagai kebutuhan jahit.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo' => 'produk.jpg',
                'name' => 'Paket Alat Menjahit',
                'price' => 75000,
                'description' => 'Paket lengkap alat menjahit untuk pemula maupun profesional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}