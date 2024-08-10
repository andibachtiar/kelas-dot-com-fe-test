<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contents")->insert([
            [
                "name" => "LMS",
                "title" => "Title Learning Management System (LMS)",
                "image" => "",
                "description" => "
                Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!",
                "features" => json_encode([
                    [
                        "title" => "Issued Certificate",
                        "description" => "Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan."
                    ],
                    [
                        "title" => "On Boarding",
                        "description" => "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung"
                    ],
                    [
                        "title" => "Training on-demand",
                        "description" => "Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda."
                    ]
                ])
            ],
            [
                "name" => "Features",
                "title" => "Title Feature",
                "image" => "",
                "description" => "
                Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!",
                "features" => json_encode([
                    [
                        "title" => "Features A",
                        "description" => "Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan."
                    ],
                    [
                        "title" => "Features B",
                        "description" => "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung"
                    ],
                    [
                        "title" => "Features C",
                        "description" => "Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda."
                    ]
                ])
            ],
            [
                "name" => "Video Learning + Live Webinar",
                "title" => "Title Video Learning + Live Webinar",
                "image" => "",
                "description" => "
                Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!",
                "features" => json_encode([
                    [
                        "title" => "Video Learning A",
                        "description" => "Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan."
                    ],
                    [
                        "title" => "Video Learning B",
                        "description" => "Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung"
                    ],
                ])
            ],
            [
                "name" => "Inquiry Learning",
                "title" => "Title Inquiry Learning",
                "image" => "",
                "description" => "
                Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!",
                "features" => json_encode([
                    [
                        "title" => "Inquiry Learning A",
                        "description" => "Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan."
                    ],
                ])
            ],
        ]);
    }
}

