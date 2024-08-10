<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("courses")->insert([
            [
                "title" => "Public Speaking : Merdeka Dalam Bicara",
                "creator_name" => "Pandji Pragiwaksono",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-1.png",
                "category_id" => 1,
            ],
            [
                "title" => "Public Speaking : Merdeka Dalam Bicara 2",
                "creator_name" => "Pandji Pragiwaksono",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-1.png",
                "category_id" => 1,
            ],
            [
                "title" => "Public Speaking : Merdeka Dalam Bicara 3",
                "creator_name" => "Pandji Pragiwaksono",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-1.png",
                "category_id" => 1,
            ],
            [
                "title" => "Public Speaking : Merdeka Dalam Bicara 4",
                "creator_name" => "Pandji Pragiwaksono",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-1.png",
                "category_id" => 1,
            ],
            [
                "title" => "Public Speaking : Merdeka Dalam Bicara 5",
                "creator_name" => "Pandji Pragiwaksono",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-1.png",
                "category_id" => 1,
            ],
            [
                "title" => "Public Speaking : Merdeka Dalam Bicara 6",
                "creator_name" => "Pandji Pragiwaksono",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-1.png",
                "category_id" => 1,
            ],

            [
                "title" => "Bertemu Mentor Barumu 1",
                "creator_name" => "Merry Riana",
                "creator_type" => "Strategi Komunikasi Bisnis",
                "thumbnail" => "thumb-2.png",
                "category_id" => 2,
            ],
            [
                "title" => "Bertemu Mentor Barumu 2",
                "creator_name" => "Merry Riana",
                "creator_type" => "Strategi Komunikasi Bisnis",
                "thumbnail" => "thumb-2.png",
                "category_id" => 2,
            ],
            [
                "title" => "Bertemu Mentor Barumu 3",
                "creator_name" => "Merry Riana",
                "creator_type" => "Strategi Komunikasi Bisnis",
                "thumbnail" => "thumb-2.png",
                "category_id" => 2,
            ],
            [
                "title" => "Bertemu Mentor Barumu 4",
                "creator_name" => "Merry Riana",
                "creator_type" => "Strategi Komunikasi Bisnis",
                "thumbnail" => "thumb-2.png",
                "category_id" => 2,
            ],


            [
                "title" => "Mengelola Keuangan untuk Investasi Saham 1",
                "creator_name" => "Bernadus Wijaya",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-3.png",
                "category_id" => 3,
            ],
            [
                "title" => "Mengelola Keuangan untuk Investasi Saham 2",
                "creator_name" => "Bernadus Wijaya",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-3.png",
                "category_id" => 3,
            ],
            [
                "title" => "Mengelola Keuangan untuk Investasi Saham 3",
                "creator_name" => "Bernadus Wijaya",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-3.png",
                "category_id" => 3,
            ],
            [
                "title" => "Mengelola Keuangan untuk Investasi Saham 4",
                "creator_name" => "Bernadus Wijaya",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-3.png",
                "category_id" => 3,
            ],
            [
                "title" => "Mengelola Keuangan untuk Investasi Saham 5",
                "creator_name" => "Bernadus Wijaya",
                "creator_type" => "Presenter Televisi & Komika",
                "thumbnail" => "thumb-3.png",
                "category_id" => 3,
            ],
        ]);
    }
}
