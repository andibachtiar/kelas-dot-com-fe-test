<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clients")->insert([
            [
                "name" => "Indonesia Entertainment Group",
                "image" => "ieg.png",
            ],
            [
                "name" => "Indonesia Entertainment Produksi",
                "image" => "iep.png",
            ],
            [
                "name" => "SCTV",
                "image" => "sctv.png",
            ],
            [
                "name" => "Emtek Group",
                "image" => "emtek.png",
            ],
            [
                "name" => "Sicepat Express",
                "image" => "sicepat.png",
            ],
            [
                "name" => "Id CloudHost",
                "image" => "id-cloud.png",
            ],
            [
                "name" => "PR. Data Bina Solusindo",
                "image" => "adirect.png",
            ],
            [
                "name" => "Volta",
                "image" => "volta.png",
            ],
        ]);
    }
}
