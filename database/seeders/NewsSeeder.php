<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'KARATAY BELEDİYE BAŞKANI HASAN KILCA’DAN AHİLİK HAFTASI MESAJI',
                'image_name' => 'karatay-belediye-baskani-hasan-kilcadan-ahilik-haftasi-mesaji.jpg-1500.jpg',
            ],
            [
                'title' => 'GELENEKSEL TÜRK SANATLARI ÖĞRENCİ SERGİSİ KARATAY’DA AÇILDI',
                'image_name' => 'geleneksel-turk-sanatlari-ogrenci-sergisi-karatayda-acildi.jpg-1500.jpg',
            ],
            [
                'title' => 'KARATAY BELEDİYESPOR MASA TENİSİNDE YİNE ZİRVEDE',
                'image_name' => 'karatay-belediyespor-masa-tenisinde-yine-zirvede.jpg-1500.jpg',
            ],
            [
                'title' => 'AHİLİK HAFTASI KAPSAMINDA GÖNÜL KÖPRÜSÜ KURULDU',
                'image_name' => 'ahilik-haftasi-kapsaminda-gonul-koprusu-kuruldu.jpg-1500.jpg',
            ],
        ];

        foreach ($items as $index => $data) {
            $slug = Str::slug($data['title']);
            News::updateOrCreate(
                ['slug' => $slug],
                [
                    'title' => $data['title'],
                    'image_name' => $data['image_name'],
                    'excerpt' => null,
                    'content' => null,
                    'is_active' => true,
                    'published_at' => now()->subDays(5 - $index),
                ]
            );
        }

        // Side items used in the component
        $sideItems = [
            [
                'title' => 'KIŞ SPOR OKULLARI’NDA 1. DÖNEM KAYITLARI BAŞLIYOR',
                'image_name' => 'kis-spor-okullarinda-1-donem-kayitlari-basliyor.jpg-1500.jpg',
            ],
            [
                'title' => 'KARAKAYIŞ CADDESİ MODERN BİR GÖRÜNÜME KAVUŞTU',
                'image_name' => 'karakayis-caddesi-modern-bir-gorunume-kavustu.jpg-1500.jpg',
            ],
        ];

        foreach ($sideItems as $index => $data) {
            $slug = Str::slug($data['title']);
            News::updateOrCreate(
                ['slug' => $slug],
                [
                    'title' => $data['title'],
                    'image_name' => $data['image_name'],
                    'excerpt' => null,
                    'content' => null,
                    'is_active' => true,
                    'published_at' => now()->subDays($index + 1),
                ]
            );
        }
    }
}


