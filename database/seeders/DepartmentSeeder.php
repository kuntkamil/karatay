<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Department;
use App\Models\Project;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Bilgi İşlem Müdürlüğü',
                'slug' => 'bilgi_islem_mudurlugu',
                'intro_text' => 'Belediyemizin dijital dönüşüm süreçlerini yürüten ve bilgi teknolojileri altyapısını yöneten birimdir.',
                'director_message' => 'Karatay’ı akıllı şehir vizyonuyla geleceğe taşıyoruz.',
                'director_name' => 'MUHAMMED EMİN ER',
                'director_email' => 'muhammed@karatay.bel.tr',
                'director_phone_extension' => '1340',
                'director_image' => 'directors/muhammed_emin_er.jpg',
            ],
            [
                'name' => 'Basın ve Yayın Müdürlüğü',
                'slug' => 'basin_yayin_mudurlugu',
                'intro_text' => 'Belediyemizin tüm iletişim ve medya faaliyetlerini planlayan, yürüten birimdir.',
                'director_message' => 'Şeffaf ve hızlı iletişim için çalışıyoruz.',
                'director_name' => 'MUHAMMET KEMALETTİN NOKTA',
                'director_email' => 'mkn@karatay.bel.tr',
                'director_phone_extension' => '1170',
                'director_image' => 'directors/m_kemalettin_nokta.jpg',
            ],
        ];

        foreach ($departments as $d) {
            $department = Department::updateOrCreate(
                ['slug' => $d['slug']],
                array_merge($d, ['is_active' => true])
            );

            // Optionally attach some existing projects randomly (if exist)
            $someProjects = Project::inRandomOrder()->take(3)->get();
            foreach ($someProjects as $proj) {
                if (!$proj->department_id) {
                    $proj->department_id = $department->id;
                    $proj->save();
                }
            }
        }
    }
}



