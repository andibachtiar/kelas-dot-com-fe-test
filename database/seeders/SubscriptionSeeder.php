<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("subscriptions")->insert([
            [
                "name" => "Starter",
                "price" => 187500,
                "discount" => 0.85,
                "benefits" => json_encode([
                    "LMS + kelas by Kelas.Center",
                    "Up to 5 users",
                    "No charge per user",
                    "Up to 20 pilihan kelas",
                    "Update pergantian kelas / 3 bulan",
                    "Sertifikat",
                    "Konsultasi Gratis",
                    "Dedicated assistant",
                    "Full support 7x24 jam"
                ])
            ],
            [
                "name" => "Basic",
                "price" => 187500,
                "discount" => 0.85,
                "benefits" => json_encode([
                    "LMS + kelas by Kelas.Center",
                    "6-49 users",
                    "No charge per user",
                    "Up to 50 pilihan kelas",
                    "Update pergantian kelas / 3 bulan",
                    "Sertifikat",
                    "Konsultasi Gratis",
                    "Dedicated assistant",
                    "Full support 7x24 jam"
                ])
            ],
            [
                "name" => "Pro",
                "price" => 3750000,
                "discount" => 0.77,
                "benefits" => json_encode([
                    "LMS + kelas by Kelas.Center",
                    "50-100 users",
                    "No charge per user",
                    "All Access Class",
                    "Update pergantian kelas / 3 bulan",
                    "Sertifikat",
                    "Konsultasi Gratis",
                    "Dedicated assistant",
                    "Full support 7x24 jam"
                ])
            ]
        ]);
    }
}
