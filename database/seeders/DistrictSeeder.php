<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        $districts = [
            // Western Province (ID: 1)
            ['name_en' => 'Colombo', 'name_si' => 'කොළඹ', 'name_ta' => 'கொழும்பு', 'code' => 'COL', 'province_id' => 1],
            ['name_en' => 'Gampaha', 'name_si' => 'ගම්පහ', 'name_ta' => 'கம்பஹா', 'code' => 'GAM', 'province_id' => 1],
            ['name_en' => 'Kalutara', 'name_si' => 'කළුතර', 'name_ta' => 'களுத்துறை', 'code' => 'KAL', 'province_id' => 1],

            // Central Province (ID: 2)
            ['name_en' => 'Kandy', 'name_si' => 'කැන්ඩි', 'name_ta' => 'கண்டி', 'code' => 'KAN', 'province_id' => 2],
            ['name_en' => 'Matale', 'name_si' => 'මාතලේ', 'name_ta' => 'மாத்தளை', 'code' => 'MAT', 'province_id' => 2],
            ['name_en' => 'Nuwara Eliya', 'name_si' => 'නුවරඑළිය', 'name_ta' => 'நுவரேலியா', 'code' => 'NUW', 'province_id' => 2],

            // Southern Province (ID: 3)
            ['name_en' => 'Galle', 'name_si' => 'ගාල්ල', 'name_ta' => 'காலி', 'code' => 'GAL', 'province_id' => 3],
            ['name_en' => 'Matara', 'name_si' => 'මාතර', 'name_ta' => 'மாத்தறை', 'code' => 'MAR', 'province_id' => 3],
            ['name_en' => 'Hambantota', 'name_si' => 'හම්බන්තොට', 'name_ta' => 'அம்பாந்தோட்டை', 'code' => 'HAM', 'province_id' => 3],

            // Northern Province (ID: 4)
            ['name_en' => 'Jaffna', 'name_si' => 'යාපනය', 'name_ta' => 'யாழ்ப்பாணம்', 'code' => 'JAF', 'province_id' => 4],
            ['name_en' => 'Kilinochchi', 'name_si' => 'කිලිනොච්චි', 'name_ta' => 'கிளிநொச்சி', 'code' => 'KIL', 'province_id' => 4],
            ['name_en' => 'Mannar', 'name_si' => 'මන්නාරම', 'name_ta' => 'மன்னார்', 'code' => 'MAN', 'province_id' => 4],
            ['name_en' => 'Mullaitivu', 'name_si' => 'මුලතිව්', 'name_ta' => 'முல்லைத்தீவு', 'code' => 'MUL', 'province_id' => 4],
            ['name_en' => 'Vavuniya', 'name_si' => 'වවුනියාව', 'name_ta' => 'வவுனியா', 'code' => 'VAV', 'province_id' => 4],

            // Eastern Province (ID: 5)
            ['name_en' => 'Trincomalee', 'name_si' => 'ත්‍රිකුණාමලය', 'name_ta' => 'திருகோணமலை', 'code' => 'TRI', 'province_id' => 5],
            ['name_en' => 'Batticaloa', 'name_si' => 'මඩකලපුව', 'name_ta' => 'மட்டக்களப்பு', 'code' => 'BAT', 'province_id' => 5],
            ['name_en' => 'Ampara', 'name_si' => 'අම්පාර', 'name_ta' => 'அம்பாறை', 'code' => 'AMP', 'province_id' => 5],

            // North Western Province (ID: 6)
            ['name_en' => 'Kurunegala', 'name_si' => 'කුරුණෑගල', 'name_ta' => 'குருநாகல்', 'code' => 'KUR', 'province_id' => 6],
            ['name_en' => 'Puttalam', 'name_si' => 'පුත්තලම', 'name_ta' => 'புத்தளம்', 'code' => 'PUT', 'province_id' => 6],

            // North Central Province (ID: 7)
            ['name_en' => 'Anuradhapura', 'name_si' => 'අනුරාධපුරය', 'name_ta' => 'அனுராதபுரம்', 'code' => 'ANU', 'province_id' => 7],
            ['name_en' => 'Polonnaruwa', 'name_si' => 'පොළොන්නරුව', 'name_ta' => 'பொலன்னறுவை', 'code' => 'POL', 'province_id' => 7],

            // Uva Province (ID: 8)
            ['name_en' => 'Badulla', 'name_si' => 'බදුල්ල', 'name_ta' => 'பதுளை', 'code' => 'BAD', 'province_id' => 8],
            ['name_en' => 'Monaragala', 'name_si' => 'මොණරාගල', 'name_ta' => 'மொணராகலை', 'code' => 'MON', 'province_id' => 8],

            // Sabaragamuwa Province (ID: 9)
            ['name_en' => 'Ratnapura', 'name_si' => 'රත්නපුර', 'name_ta' => 'இரத்தினபுரி', 'code' => 'RAT', 'province_id' => 9],
            ['name_en' => 'Kegalle', 'name_si' => 'කෑගල්ල', 'name_ta' => 'கேகாலை', 'code' => 'KEG', 'province_id' => 9],
        ];

        foreach ($districts as $district) {
            District::create($district);
        }
    }
}

