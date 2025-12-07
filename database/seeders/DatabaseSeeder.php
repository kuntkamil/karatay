<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SliderItemSeeder;
use Database\Seeders\NeighborhoodSeeder;
use Database\Seeders\TopicSeeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\EventSeeder;
use Database\Seeders\AnnouncementSeeder;
use Database\Seeders\ProcurementSeeder;
use Database\Seeders\DepartmentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                // set a default password if missing
                'password' => bcrypt('password')
            ]
        );

        $this->call(SliderItemSeeder::class);
        $this->call(NeighborhoodSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(AnnouncementSeeder::class);
        $this->call(ProcurementSeeder::class);
        $this->call(DepartmentSeeder::class);
    }
}
