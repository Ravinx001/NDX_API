<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    public function run(): void
    {
        $provinces = [
            ['name_en' => 'Western Province', 'name_si' => 'බස්නාහිර පළාත', 'name_ta' => 'மேல் மாகாணம்', 'code' => 'WP'],
            ['name_en' => 'Central Province', 'name_si' => 'මධ්‍යම පළාත', 'name_ta' => 'மத்திய மாகாணம்', 'code' => 'CP'],
            ['name_en' => 'Southern Province', 'name_si' => 'දකුණු පළාත', 'name_ta' => 'தென் மாகாணம்', 'code' => 'SP'],
            ['name_en' => 'Northern Province', 'name_si' => 'උතුරු පළාත', 'name_ta' => 'வட மாகாணம்', 'code' => 'NP'],
            ['name_en' => 'Eastern Province', 'name_si' => 'නැගෙනහිර පළාත', 'name_ta' => 'கிழக்கு மாகாணம்', 'code' => 'EP'],
            ['name_en' => 'North Western Province', 'name_si' => 'වයඹ පළාත', 'name_ta' => 'வட மேல் மாகாணம்', 'code' => 'NWP'],
            ['name_en' => 'North Central Province', 'name_si' => 'උතුරු මැද පළාත', 'name_ta' => 'வட மத்திய மாகாணம்', 'code' => 'NCP'],
            ['name_en' => 'Uva Province', 'name_si' => 'ඌව පළාත', 'name_ta' => 'ஊவா மாகாணம்', 'code' => 'UP'],
            ['name_en' => 'Sabaragamuwa Province', 'name_si' => 'සබරගමුව පළාත', 'name_ta' => 'சபரகமுவ மாகாணம்', 'code' => 'SGP'],
        ];

        foreach ($provinces as $province) {
            Province::create($province);
        }
    }
}
