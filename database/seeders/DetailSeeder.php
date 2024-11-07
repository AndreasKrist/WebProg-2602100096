<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Detail;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    public static $manualData = [];

    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Menggabungkan data faker dengan data manual
        $detailData = array_merge([
            'category_id' => Category::inRandomOrder()->first()->id,
            'writer_id' => Writer::inRandomOrder()->first()->id,
            'tanggalPost' => $faker->dateTimeBetween('-1 week', '+1 week'),
            'deskripsi' => $faker->sentence,
            'konten' => $faker->paragraph,
        ], self::$manualData);

        Detail::create($detailData);
    }
}