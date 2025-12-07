<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Topic;

class TopicSeeder extends Seeder
{
    public function run(): void
    {
        $names = ['Sağlık','Eğitim','Spor','Gençlik','Kültür','Sanat'];

        foreach ($names as $name) {
            Topic::updateOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name]
            );
        }
    }
}


