<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Lavanta Bahçesi',
                'image_name' => 'deger2.jpg',
                'description' => "Karaaslan Hobi Bahçeleri'mizin yanıbaşında ilk etapta 90 bin m2'lik alanda 100 bin lavanta fidesini toprakla buluşturduk.",
                'is_featured' => true,
            ],
            [
                'title' => 'Obruk Hanı Restorasyonu',
                'image_name' => 'deger1.png',
                'description' => 'Tarihin izlerini bugüne en iyi şekilde taşımak için hassasiyetle devam eden restorasyon.',
            ],
            [
                'title' => 'Gül Bahçesi',
                'image_name' => 'deger3.png',
                'description' => 'Her çeşit gülün renk cümbüşüyle sizi beklediği gül bahçemiz.',
            ],
            [
                'title' => 'Adalet Parkı',
                'image_name' => 'deger4.png',
                'description' => 'Şehrimizin nefes almasını sağlayan geniş yeşil alanlar ve parklar.',
            ],
        ];

        foreach ($projects as $p) {
            Project::updateOrCreate(
                ['slug' => Str::slug($p['title'])],
                [
                    'title' => $p['title'],
                    'image_name' => $p['image_name'],
                    'description' => $p['description'] ?? null,
                    'is_featured' => $p['is_featured'] ?? false,
                    'is_active' => true,
                ]
            );
        }
    }
}


