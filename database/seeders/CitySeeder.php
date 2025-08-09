<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            // Colombo District (ID: 1)
            ['name_en' => 'Colombo', 'name_si' => 'කොළඹ', 'name_ta' => 'கொழும்பு', 'latitude' => 6.9271, 'longitude' => 79.8612, 'district_id' => 1],
            ['name_en' => 'Dehiwala-Mount Lavinia', 'name_si' => 'දෙහිවල-ගල්කිස්ස', 'name_ta' => 'தெஹிவளா-கல்கிஸ்ஸ', 'latitude' => 6.8413, 'longitude' => 79.8607, 'district_id' => 1],
            ['name_en' => 'Moratuwa', 'name_si' => 'මොරටුව', 'name_ta' => 'மொறட்டுவை', 'latitude' => 6.7730, 'longitude' => 79.8816, 'district_id' => 1],
            ['name_en' => 'Sri Jayawardenepura Kotte', 'name_si' => 'ශ්‍රී ජයවර්ධනපුර කෝට්ටේ', 'name_ta' => 'ஸ்ரீ ஜயவர்த்தனபுர கோட்டே', 'latitude' => 6.8905, 'longitude' => 79.9487, 'district_id' => 1],
            ['name_en' => 'Negombo', 'name_si' => 'මීගමුව', 'name_ta' => 'நீர்கொழும்பு', 'latitude' => 7.2084, 'longitude' => 79.8358, 'district_id' => 1],
            ['name_en' => 'Kelaniya', 'name_si' => 'කැලණිය', 'name_ta' => 'களனி', 'latitude' => 6.9553, 'longitude' => 79.9220, 'district_id' => 1],
            ['name_en' => 'Maharagama', 'name_si' => 'මහරගම', 'name_ta' => 'மஹரகம', 'latitude' => 6.8484, 'longitude' => 79.9267, 'district_id' => 1],
            ['name_en' => 'Kaduwela', 'name_si' => 'කඩුවෙල', 'name_ta' => 'கடுவெல', 'latitude' => 6.9330, 'longitude' => 79.9830, 'district_id' => 1],
            ['name_en' => 'Homagama', 'name_si' => 'හෝමාගම', 'name_ta' => 'ஹோமாகம', 'latitude' => 6.8440, 'longitude' => 80.0030, 'district_id' => 1],
            ['name_en' => 'Kolonnawa', 'name_si' => 'කොලොන්නාව', 'name_ta' => 'கொலொன்னாவ', 'latitude' => 6.9330, 'longitude' => 79.8850, 'district_id' => 1],

            // Gampaha District (ID: 2)
            ['name_en' => 'Gampaha', 'name_si' => 'ගම්පහ', 'name_ta' => 'கம்பஹா', 'latitude' => 7.0912, 'longitude' => 79.9959, 'district_id' => 2],
            ['name_en' => 'Kalutara', 'name_si' => 'කළුතර', 'name_ta' => 'களுத்துறை', 'latitude' => 6.5854, 'longitude' => 79.9607, 'district_id' => 2],
            ['name_en' => 'Katunayake', 'name_si' => 'කටුනායක', 'name_ta' => 'கட்டுநாயக்கே', 'latitude' => 7.1697, 'longitude' => 79.8840, 'district_id' => 2],
            ['name_en' => 'Wattala', 'name_si' => 'වත්තල', 'name_ta' => 'வத்தளை', 'latitude' => 6.9892, 'longitude' => 79.8914, 'district_id' => 2],
            ['name_en' => 'Minuwangoda', 'name_si' => 'මිණුවන්ගොඩ', 'name_ta' => 'மினுவன்கொட', 'latitude' => 7.1667, 'longitude' => 79.9500, 'district_id' => 2],
            ['name_en' => 'Ja-Ela', 'name_si' => 'ජා-ඇල', 'name_ta' => 'ஜா-எல', 'latitude' => 7.0833, 'longitude' => 79.8833, 'district_id' => 2],
            ['name_en' => 'Kesbewa', 'name_si' => 'කෙස්බෑව', 'name_ta' => 'கெஸ்பெவ', 'latitude' => 6.8167, 'longitude' => 79.9333, 'district_id' => 2],
            ['name_en' => 'Kadawatha', 'name_si' => 'කඩවත', 'name_ta' => 'கடவத', 'latitude' => 7.0167, 'longitude' => 79.9500, 'district_id' => 2],
            ['name_en' => 'Ragama', 'name_si' => 'රාගම', 'name_ta' => 'ராகம', 'latitude' => 7.0275, 'longitude' => 79.9181, 'district_id' => 2],
            ['name_en' => 'Attanagalla', 'name_si' => 'අත්තනගල්ල', 'name_ta' => 'அத்தனகல்ல', 'latitude' => 7.1000, 'longitude' => 80.1500, 'district_id' => 2],

            // Kalutara District (ID: 3)
            ['name_en' => 'Panadura', 'name_si' => 'පානදුර', 'name_ta' => 'பாணந்துறை', 'latitude' => 6.7134, 'longitude' => 79.9037, 'district_id' => 3],
            ['name_en' => 'Horana', 'name_si' => 'හොරණ', 'name_ta' => 'ஹொரண', 'latitude' => 6.7167, 'longitude' => 80.0667, 'district_id' => 3],
            ['name_en' => 'Beruwala', 'name_si' => 'බේරුවල', 'name_ta' => 'பேருவளை', 'latitude' => 6.4792, 'longitude' => 79.9825, 'district_id' => 3],
            ['name_en' => 'Matugama', 'name_si' => 'මතුගම', 'name_ta' => 'மதுகம', 'latitude' => 6.5333, 'longitude' => 80.1667, 'district_id' => 3],
            ['name_en' => 'Bandaragama', 'name_si' => 'බණ්ඩාරගම', 'name_ta' => 'பண்டாரகம', 'latitude' => 6.7167, 'longitude' => 79.9833, 'district_id' => 3],
            ['name_en' => 'Agalawatta', 'name_si' => 'අගලවත්ත', 'name_ta' => 'அகலவத்த', 'latitude' => 6.6333, 'longitude' => 80.0500, 'district_id' => 3],
            ['name_en' => 'Dodangoda', 'name_si' => 'දොඩන්ගොඩ', 'name_ta' => 'தொடன்கொட', 'latitude' => 6.6833, 'longitude' => 79.9833, 'district_id' => 3],
            ['name_en' => 'Ingiriya', 'name_si' => 'ඉංගිරිය', 'name_ta' => 'இங்கிரிய', 'latitude' => 6.7833, 'longitude' => 80.1000, 'district_id' => 3],
            ['name_en' => 'Walallawita', 'name_si' => 'වලල්ලාවිට', 'name_ta' => 'வலல்லாவிட', 'latitude' => 6.7500, 'longitude' => 80.0833, 'district_id' => 3],
            ['name_en' => 'Bulathsinhala', 'name_si' => 'බුලත්සිංහල', 'name_ta' => 'புலத்சிங்கள', 'latitude' => 6.7167, 'longitude' => 80.1833, 'district_id' => 3],

            // Kandy District (ID: 4)
            ['name_en' => 'Kandy', 'name_si' => 'කෑන්ඩි', 'name_ta' => 'கண்டி', 'latitude' => 7.2906, 'longitude' => 80.6337, 'district_id' => 4],
            ['name_en' => 'Gampola', 'name_si' => 'ගම්පොල', 'name_ta' => 'கம்பொள', 'latitude' => 7.1667, 'longitude' => 80.5667, 'district_id' => 4],
            ['name_en' => 'Nawalapitiya', 'name_si' => 'නවලපිටිය', 'name_ta' => 'நவலபிட்டிய', 'latitude' => 7.0500, 'longitude' => 80.5333, 'district_id' => 4],
            ['name_en' => 'Peradeniya', 'name_si' => 'පේරාදෙණිය', 'name_ta' => 'பேராதெனிய', 'latitude' => 7.2667, 'longitude' => 80.5833, 'district_id' => 4],
            ['name_en' => 'Wattegama', 'name_si' => 'වත්තේගම', 'name_ta' => 'வத்தேகம', 'latitude' => 7.3000, 'longitude' => 80.7500, 'district_id' => 4],
            ['name_en' => 'Kadugannawa', 'name_si' => 'කඩුගන්නාව', 'name_ta' => 'கடுகன்னாவ', 'latitude' => 7.2500, 'longitude' => 80.5167, 'district_id' => 4],
            ['name_en' => 'Hatton', 'name_si' => 'හැටන්', 'name_ta' => 'ஹட்டன்', 'latitude' => 6.8833, 'longitude' => 80.6000, 'district_id' => 4],
            ['name_en' => 'Akurana', 'name_si' => 'අකුරණ', 'name_ta' => 'அகுரண', 'latitude' => 7.3667, 'longitude' => 80.5500, 'district_id' => 4],
            ['name_en' => 'Doluwa', 'name_si' => 'දොළුව', 'name_ta' => 'தொளுவ', 'latitude' => 7.2000, 'longitude' => 80.6167, 'district_id' => 4],
            ['name_en' => 'Pathadumbara', 'name_si' => 'පතදුම්බර', 'name_ta' => 'பதந்தும்பர', 'latitude' => 7.3333, 'longitude' => 80.6833, 'district_id' => 4],

            // Matale District (ID: 5)
            ['name_en' => 'Matale', 'name_si' => 'මාතලේ', 'name_ta' => 'மாத்தளை', 'latitude' => 7.4675, 'longitude' => 80.6234, 'district_id' => 5],
            ['name_en' => 'Dambulla', 'name_si' => 'දඹුල්ල', 'name_ta' => 'தம்புள்ள', 'latitude' => 7.8606, 'longitude' => 80.6518, 'district_id' => 5],
            ['name_en' => 'Sigiriya', 'name_si' => 'සීගිරිය', 'name_ta' => 'சீகிரிய', 'latitude' => 7.9569, 'longitude' => 80.7597, 'district_id' => 5],
            ['name_en' => 'Galewela', 'name_si' => 'ගලේවෙල', 'name_ta' => 'களேவெல', 'latitude' => 7.7500, 'longitude' => 80.5500, 'district_id' => 5],
            ['name_en' => 'Ukuwela', 'name_si' => 'උකුවෙල', 'name_ta' => 'உकுவெல', 'latitude' => 7.5500, 'longitude' => 80.5833, 'district_id' => 5],
            ['name_en' => 'Rattota', 'name_si' => 'රත්තොට', 'name_ta' => 'ரத்தொட', 'latitude' => 7.5167, 'longitude' => 80.7500, 'district_id' => 5],
            ['name_en' => 'Pallepola', 'name_si' => 'පල්ලේපොල', 'name_ta' => 'பல்லேபொள', 'latitude' => 7.3500, 'longitude' => 80.6833, 'district_id' => 5],
            ['name_en' => 'Yatawatta', 'name_si' => 'යටවත්ත', 'name_ta' => 'யடவत்த', 'latitude' => 7.4333, 'longitude' => 80.7500, 'district_id' => 5],
            ['name_en' => 'Wilgamuwa', 'name_si' => 'විල්ගමුව', 'name_ta' => 'வில்கமுव', 'latitude' => 7.6167, 'longitude' => 80.6500, 'district_id' => 5],
            ['name_en' => 'Naula', 'name_si' => 'නාඋල', 'name_ta' => 'நாउल', 'latitude' => 7.6500, 'longitude' => 80.7833, 'district_id' => 5],

            // Nuwara Eliya District (ID: 6)
            ['name_en' => 'Nuwara Eliya', 'name_si' => 'නුවරඑළිය', 'name_ta' => 'நுவரேலியா', 'latitude' => 6.9497, 'longitude' => 80.7891, 'district_id' => 6],
            ['name_en' => 'Hatton', 'name_si' => 'හැටන්', 'name_ta' => 'ஹட்டன்', 'latitude' => 6.8900, 'longitude' => 80.5959, 'district_id' => 6],
            ['name_en' => 'Bandarawela', 'name_si' => 'බණ්ඩාරවෙල', 'name_ta' => 'பண்டாரவெல', 'latitude' => 6.8400, 'longitude' => 80.9850, 'district_id' => 6],
            ['name_en' => 'Talawakelle', 'name_si' => 'තලවාකැලේ', 'name_ta' => 'தலவாக்கெலே', 'latitude' => 6.9333, 'longitude' => 80.6500, 'district_id' => 6],
            ['name_en' => 'Lindula', 'name_si' => 'ලින්දුල', 'name_ta' => 'லின்துல', 'latitude' => 6.9000, 'longitude' => 80.7667, 'district_id' => 6],
            ['name_en' => 'Ginigathena', 'name_si' => 'ගිනිගතහේන', 'name_ta' => 'கினிகதஹேன', 'latitude' => 7.0333, 'longitude' => 80.5167, 'district_id' => 6],
            ['name_en' => 'Kotagala', 'name_si' => 'කොටගල', 'name_ta' => 'கொடகள', 'latitude' => 6.9833, 'longitude' => 80.6167, 'district_id' => 6],
            ['name_en' => 'Ambewela', 'name_si' => 'අම්බේවෙල', 'name_ta' => 'அம்பேவெல', 'latitude' => 7.0000, 'longitude' => 80.8000, 'district_id' => 6],
            ['name_en' => 'Ramboda', 'name_si' => 'රම්බොඩ', 'name_ta' => 'ரம்பொட', 'latitude' => 7.0167, 'longitude' => 80.6833, 'district_id' => 6],
            ['name_en' => 'Haputale', 'name_si' => 'හපුතලේ', 'name_ta' => 'ஹபுதலே', 'latitude' => 6.7667, 'longitude' => 80.9500, 'district_id' => 6],

            // Add more cities for other districts...
            // Galle District (ID: 7)
            ['name_en' => 'Galle', 'name_si' => 'ගාල්ල', 'name_ta' => 'காலி', 'latitude' => 6.0329, 'longitude' => 80.2168, 'district_id' => 7],
            ['name_en' => 'Hikkaduwa', 'name_si' => 'හික්කඩුව', 'name_ta' => 'ஹிக்கடுவ', 'latitude' => 6.1389, 'longitude' => 80.1007, 'district_id' => 7],
            ['name_en' => 'Ambalangoda', 'name_si' => 'අම්බලන්ගොඩ', 'name_ta' => 'அம்பலன்கொட', 'latitude' => 6.2356, 'longitude' => 80.0536, 'district_id' => 7],
            ['name_en' => 'Elpitiya', 'name_si' => 'එල්පිටිය', 'name_ta' => 'எல்பிட்டிய', 'latitude' => 6.2917, 'longitude' => 80.1667, 'district_id' => 7],
            ['name_en' => 'Bentota', 'name_si' => 'බෙන්තොට', 'name_ta' => 'பென்தொட', 'latitude' => 6.4258, 'longitude' => 79.9958, 'district_id' => 7],
            ['name_en' => 'Baddegama', 'name_si' => 'බද්දේගම', 'name_ta' => 'பத்தேகம', 'latitude' => 6.1833, 'longitude' => 80.1833, 'district_id' => 7],
            ['name_en' => 'Udugama', 'name_si' => 'උදුගම', 'name_ta' => 'உதுகம', 'latitude' => 6.2167, 'longitude' => 80.2000, 'district_id' => 7],
            ['name_en' => 'Imaduwa', 'name_si' => 'ඉමදුව', 'name_ta' => 'இமதுவ', 'latitude' => 6.1167, 'longitude' => 80.1833, 'district_id' => 7],
            ['name_en' => 'Yakkalamulla', 'name_si' => 'යක්කලමුල්ල', 'name_ta' => 'யக்கலமுল்ல', 'latitude' => 6.0833, 'longitude' => 80.1667, 'district_id' => 7],
            ['name_en' => 'Habaraduwa', 'name_si' => 'හබරදුව', 'name_ta' => 'ஹபரதுவ', 'latitude' => 5.9833, 'longitude' => 80.2167, 'district_id' => 7],

            // Add a few more samples for demonstration
            // Jaffna District (ID: 10)
            ['name_en' => 'Jaffna', 'name_si' => 'යාපනය', 'name_ta' => 'யாழ்ப்பாணம்', 'latitude' => 9.6615, 'longitude' => 80.0255, 'district_id' => 10],
            ['name_en' => 'Chavakachcheri', 'name_si' => 'චාවකච්චේරි', 'name_ta' => 'சாவகச்சேரி', 'latitude' => 9.6167, 'longitude' => 80.1667, 'district_id' => 10],

            // Trincomalee District (ID: 15)
            ['name_en' => 'Trincomalee', 'name_si' => 'ත්‍රිකුණාමලය', 'name_ta' => 'திருகோணமலை', 'latitude' => 8.5874, 'longitude' => 81.2152, 'district_id' => 15],

            // Anuradhapura District (ID: 20)
            ['name_en' => 'Anuradhapura', 'name_si' => 'අනුරාධපුරය', 'name_ta' => 'அனுராதபுரம்', 'latitude' => 8.3114, 'longitude' => 80.4037, 'district_id' => 20],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
