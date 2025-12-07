<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SliderItem;

class SliderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SliderItem::query()->truncate();

        SliderItem::create([
            'image_name' => 'slider2.png',
            'title' => 'Karatay Belediyesi Websitesi Yenilendi!',
            'is_active' => true,
        ]);

        SliderItem::create([
            'image_name' => 'slider1.png',
            'title' => 'Lavanta Bahçesi Açıldı!',
            'is_active' => true,
        ]);

        SliderItem::create([
            'image_name' => 'slider3.png',
            'title' => 'Sample inactive slide',
            'is_active' => false,
        ]);
    }
}
