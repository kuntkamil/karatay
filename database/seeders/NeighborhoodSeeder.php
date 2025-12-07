<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Neighborhood;

class NeighborhoodSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            "Acıdort","Ağsaklı","Akabe","Akbaş","Akçeşme","Akifpaşa","Akörenkışla","Aziziye","Bakırtolu","Başak","Başgötüren","Beşağıl","Büyükburnak","Büyüksinan","Çatalhüyük","Çataltömek","Çelebi","Çengilti","Çimenlik","Divanlar","Doğuş","Elmacı","Emirgazi","Erenler","Erler","Esentepe","Fetih","Fevziçakmak","Gaziosmanpaşa","Göçü","Hacıhasan","Hacıibalı","Hacısadık","Hacıveyiszade","Hacıyusufmescit","Hamzaoğlu","Hasandede","Hayıroğlu","İpekler","İsmil","İstiklal","Kalenderhane","Karaaslandede","Karaaslanüzümcü","Karaciğan","Karadona","Karakaya","Karakulak","Katrancı","Kayacıkaraplar","Keçeciler","Kerimdede","Keykubat","Kızören","Köprübaşı","Köseali","Kumköprü","Mengene","Nakipoğlu","Obruk","Orhangazi","Ortakonak","Ovakavağı","Sakyatan","Saraçoğlu","Sarıyakup","Selimsultan","Sultan Mesud","Sürüç","Şatır","Şemsitebrizi","Tatlıcak","Ulubatlıhasan","Yağlıbayat","Yarma","Yavşankuyu","Yediler","Yenice","Yenikent","Zincirli"
        ];

        foreach ($names as $name) {
            Neighborhood::updateOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name]
            );
        }
    }
}


