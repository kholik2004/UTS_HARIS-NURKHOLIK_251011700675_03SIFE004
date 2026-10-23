<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = [
            ['Web Developer', 'PT Maju Digital', 'job-web-developer.png', 'Jakarta', 'Rp6.000.000–Rp9.000.000', 'Full-time', 'HTML, CSS, JavaScript, dan dasar Laravel', '2026-10-20', 'Mengembangkan dan merawat website perusahaan serta bekerja sama dengan tim desain dan produk.'],
            ['Data Analyst', 'Nusantara Tech', 'job-data-analyst.png', 'Tangerang', 'Rp7.000.000–Rp10.000.000', 'Full-time', 'SQL, Excel, dan kemampuan analisis data', '2026-10-19', 'Mengolah data bisnis menjadi laporan dan insight untuk membantu pengambilan keputusan.'],
            ['UI/UX Designer', 'Kreatif Studio', 'job-uiux-designer.png', 'Bandung', 'Rp5.500.000–Rp8.000.000', 'Full-time', 'Figma, wireframe, prototyping, dan portofolio desain', '2026-10-18', 'Merancang alur dan tampilan aplikasi yang mudah digunakan berdasarkan kebutuhan pengguna.'],
            ['Digital Marketing Intern', 'Tumbuh Bersama', 'job-digital-marketer.png', 'Depok', 'Rp2.000.000–Rp3.000.000', 'Magang', 'Aktif di media sosial, komunikatif, dan mau belajar', '2026-10-17', 'Membantu membuat konten, menjadwalkan unggahan, dan memantau performa kampanye digital.'],
            ['Backend Developer', 'Awan Teknologi', 'job-backend-developer.png', 'Jakarta', 'Rp8.000.000–Rp12.000.000', 'Full-time', 'PHP, Laravel, REST API, dan MySQL', '2026-10-16', 'Membangun API dan layanan backend yang aman, stabil, dan mudah dikembangkan.'],
            ['Customer Support', 'Belanja Mudah', 'job-customer-support.png', 'Remote', 'Rp4.000.000–Rp6.000.000', 'Kontrak', 'Komunikasi yang baik dan mampu menggunakan komputer', '2026-10-15', 'Membantu pelanggan menyelesaikan pertanyaan dan kendala melalui chat dan email.'],
            ['Frontend Developer', 'Ruang Digital', 'job-web-developer.png', 'Jakarta', 'Rp6.000.000–Rp9.000.000', 'Full-time', 'HTML, CSS, JavaScript, dan React', '2026-10-14', 'Membangun tampilan website yang responsif dan mudah digunakan.'],
            ['Social Media Specialist', 'Kreasi Nusantara', 'job-digital-marketer.png', 'Tangerang', 'Rp4.500.000–Rp6.500.000', 'Full-time', 'Pengelolaan media sosial, copywriting, dan Canva', '2026-10-13', 'Merencanakan konten dan mengelola akun media sosial perusahaan.'],
            ['Admin Operasional', 'Logistik Cepat', 'job-customer-support.png', 'Bekasi', 'Rp4.000.000–Rp5.500.000', 'Full-time', 'Microsoft Office, teliti, dan mampu mengelola dokumen', '2026-10-12', 'Mendukung kegiatan administrasi dan operasional harian perusahaan.'],
            ['Mobile Developer', 'Aplikasi Kita', 'job-backend-developer.png', 'Bandung', 'Rp7.000.000–Rp11.000.000', 'Full-time', 'Flutter atau Kotlin dan REST API', '2026-10-11', 'Mengembangkan dan memelihara aplikasi mobile untuk Android dan iOS.'],
            ['Finance Staff', 'Sinar Niaga', 'job-data-analyst.png', 'Depok', 'Rp5.000.000–Rp7.000.000', 'Kontrak', 'Akuntansi dasar, Excel, dan rekonsiliasi keuangan', '2026-10-10', 'Mencatat transaksi dan membantu penyusunan laporan keuangan.'],
            ['QA Tester', 'Awan Teknologi', 'job-backend-developer.png', 'Remote', 'Rp5.500.000–Rp8.000.000', 'Full-time', 'Pengujian aplikasi, dokumentasi bug, dan ketelitian', '2026-10-09', 'Menguji fitur aplikasi dan melaporkan masalah sebelum produk dirilis.'],
            ['Content Writer', 'Tumbuh Bersama', 'job-digital-marketer.png', 'Yogyakarta', 'Rp4.000.000–Rp6.000.000', 'Paruh waktu', 'Menulis artikel, riset kata kunci, dan tata bahasa Indonesia', '2026-10-08', 'Menulis konten informatif untuk website dan kanal digital perusahaan.'],
            ['Helpdesk IT', 'Prima Solusi', 'job-customer-support.png', 'Jakarta', 'Rp4.500.000–Rp6.500.000', 'Full-time', 'Dasar jaringan komputer, Windows, dan komunikasi yang baik', '2026-10-07', 'Membantu pengguna menangani kendala perangkat dan aplikasi.'],
            ['Data Entry', 'Mitra Bisnis Indonesia', 'job-data-analyst.png', 'Bogor', 'Rp3.800.000–Rp5.000.000', 'Kontrak', 'Teliti, cepat mengetik, dan menguasai Microsoft Excel', '2026-10-06', 'Memasukkan dan memeriksa data perusahaan agar tersimpan dengan akurat.'],
        ];

        foreach ($jobs as [$title, $company, $image, $location, $salary, $type, $requirements, $postedDate, $description]) {
            Job::updateOrCreate(
                ['title' => $title, 'company' => $company],
                compact('image', 'location', 'salary', 'type', 'requirements', 'description') + [
                    'posted_date' => $postedDate,
                ],
            );
        }
    }
}
