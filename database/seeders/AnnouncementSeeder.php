<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'MEMUR ALIM İLANI', 'date' => '2025-10-24', 'url' => '#'],
            ['title' => 'PLANLI SU KESİNTİSİ', 'date' => '2025-11-07', 'url' => '#'],
            ['title' => 'YOL KAPANMA DUYURUSU', 'date' => '2025-12-15', 'url' => '#'],
        ];
        foreach ($items as $i) {
            Announcement::updateOrCreate(
                ['title' => $i['title'], 'date' => $i['date']],
                $i + ['is_active' => true]
            );
        }
    }
}


