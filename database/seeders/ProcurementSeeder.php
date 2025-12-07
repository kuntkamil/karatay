<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Procurement;

class ProcurementSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['file_no' => '202509255', 'title' => 'LAVANTA SUYU ALIMI', 'description' => 'LAVANTA SUYU ALIMI', 'deadline_at' => '2025-10-08 12:15:00', 'spec_url' => 'https://dogrudan-temin.karatay.bel.tr/teklifsartname?id=1705', 'bid_url' => 'https://dogrudan-temin.karatay.bel.tr/'],
            ['file_no' => '202510017', 'title' => 'ÇİM BİÇME TRAKTÖRÜ YEDEK PARÇA ALIMI', 'description' => 'ÇİM BİÇME TRAKTÖRÜ YEDEK PARÇA ALIMI', 'deadline_at' => '2025-10-07 15:30:00', 'spec_url' => 'https://dogrudan-temin.karatay.bel.tr/teklifsartname?id=1704', 'bid_url' => 'https://dogrudan-temin.karatay.bel.tr/'],
            ['file_no' => '202510068', 'title' => 'DEZENFENTAN(KOLRDİOKSİT) ALIMI', 'description' => 'ŞARTNAMEYE UYGUN', 'deadline_at' => '2025-10-10 10:45:00', 'spec_url' => 'https://dogrudan-temin.karatay.bel.tr/teklifsartname?id=1703', 'bid_url' => 'https://dogrudan-temin.karatay.bel.tr/'],
            ['file_no' => '202510066', 'title' => 'PLATFORMLU (KOVALI) VİNÇ KİRALAMA HİZMETİ ALIMI', 'description' => 'ŞARTNAMEYE UYGUN', 'deadline_at' => '2025-10-08 10:45:00', 'spec_url' => 'https://dogrudan-temin.karatay.bel.tr/teklifsartname?id=1702', 'bid_url' => 'https://dogrudan-temin.karatay.bel.tr/'],
        ];
        foreach ($items as $p) {
            Procurement::updateOrCreate(
                ['file_no' => $p['file_no']],
                $p + ['is_active' => true]
            );
        }
    }
}


