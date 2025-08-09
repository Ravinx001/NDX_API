<?php

namespace Database\Seeders;

use App\Models\GramaNiladhariDivision;
use Illuminate\Database\Seeder;

class GramaNiladhariDivisionSeeder extends Seeder
{
    public function run(): void
    {
        $gramaNiladhariDivisions = [
            // Colombo District (ID: 1)
            ['name_en' => 'Colombo Fort', 'name_si' => 'කොළඹ කොටුව', 'name_ta' => 'கொழும்பு கோட்டை', 'code' => 'GN001', 'district_id' => 1],
            ['name_en' => 'Slave Island', 'name_si' => 'දාස් දූපත', 'name_ta' => 'அடிமை தீவு', 'code' => 'GN002', 'district_id' => 1],
            ['name_en' => 'Kollupitiya', 'name_si' => 'කොල්ලුපිටිය', 'name_ta' => 'கொல்லுபிட்டிய', 'code' => 'GN003', 'district_id' => 1],
            ['name_en' => 'Bambalapitiya', 'name_si' => 'බම්බලපිටිය', 'name_ta' => 'பம்பலாபிட்டிய', 'code' => 'GN004', 'district_id' => 1],
            ['name_en' => 'Narahenpita', 'name_si' => 'නරහේන්පිට', 'name_ta' => 'நரஹேன்பிட்ட', 'code' => 'GN005', 'district_id' => 1],
            ['name_en' => 'Wellawatta', 'name_si' => 'වැල්ලවත්ත', 'name_ta' => 'வெல்லவத்த', 'code' => 'GN006', 'district_id' => 1],
            ['name_en' => 'Cinnamon Gardens', 'name_si' => 'කුරුඳු උයන', 'name_ta' => 'இலவங்க தோட்டம்', 'code' => 'GN007', 'district_id' => 1],
            ['name_en' => 'Borella', 'name_si' => 'බොරැල්ල', 'name_ta' => 'போரெல்ல', 'code' => 'GN008', 'district_id' => 1],
            ['name_en' => 'Dematagoda', 'name_si' => 'දෙමටගොඩ', 'name_ta' => 'தெமடகொட', 'code' => 'GN009', 'district_id' => 1],
            ['name_en' => 'Maradana', 'name_si' => 'මරදාන', 'name_ta' => 'மரதான', 'code' => 'GN010', 'district_id' => 1],

            // Gampaha District (ID: 2)
            ['name_en' => 'Gampaha Central', 'name_si' => 'ගම්පහ මධ්‍යම', 'name_ta' => 'கம்பஹா மத்திய', 'code' => 'GN011', 'district_id' => 2],
            ['name_en' => 'Yakkala East', 'name_si' => 'යක්කල නැගෙනහිර', 'name_ta' => 'யக்கல கிழக்கு', 'code' => 'GN012', 'district_id' => 2],
            ['name_en' => 'Yakkala West', 'name_si' => 'යක්කල බටහිර', 'name_ta' => 'யக்கல மேற்கு', 'code' => 'GN013', 'district_id' => 2],
            ['name_en' => 'Miriswatta', 'name_si' => 'මිරිස්වත්ත', 'name_ta' => 'மிரிஸ்வத்த', 'code' => 'GN014', 'district_id' => 2],
            ['name_en' => 'Ganemulla', 'name_si' => 'ගනේමුල්ල', 'name_ta' => 'கனேமுல்ல', 'code' => 'GN015', 'district_id' => 2],
            ['name_en' => 'Kadawatha', 'name_si' => 'කඩවත', 'name_ta' => 'கடவத', 'code' => 'GN016', 'district_id' => 2],
            ['name_en' => 'Kiribathgoda North', 'name_si' => 'කිරිබත්ගොඩ උතුර', 'name_ta' => 'கிரிபத்கொட வட', 'code' => 'GN017', 'district_id' => 2],
            ['name_en' => 'Kiribathgoda South', 'name_si' => 'කිරිබත්ගොඩ දකුණ', 'name_ta' => 'கிரிபத்கொட தென்', 'code' => 'GN018', 'district_id' => 2],
            ['name_en' => 'Wattala East', 'name_si' => 'වත්තල නැගෙනහිර', 'name_ta' => 'வத்தள கிழக்கு', 'code' => 'GN019', 'district_id' => 2],
            ['name_en' => 'Wattala West', 'name_si' => 'වත්තල බටහිර', 'name_ta' => 'வத்தள மேற்கு', 'code' => 'GN020', 'district_id' => 2],

            // Kalutara District (ID: 3)
            ['name_en' => 'Kalutara North', 'name_si' => 'කළුතර උතුර', 'name_ta' => 'களுத்துறை வட', 'code' => 'GN021', 'district_id' => 3],
            ['name_en' => 'Kalutara South', 'name_si' => 'කළුතර දකුණ', 'name_ta' => 'களுத்துறை தென்', 'code' => 'GN022', 'district_id' => 3],
            ['name_en' => 'Panadura East', 'name_si' => 'පානදුර නැගෙනහිර', 'name_ta' => 'பாணந்துறை கிழக்கு', 'code' => 'GN023', 'district_id' => 3],
            ['name_en' => 'Panadura West', 'name_si' => 'පානදුර බටහිර', 'name_ta' => 'பாணந்துறை மேற்கு', 'code' => 'GN024', 'district_id' => 3],
            ['name_en' => 'Horana Central', 'name_si' => 'හොරණ මධ්‍යම', 'name_ta' => 'ஹொரண மத்திய', 'code' => 'GN025', 'district_id' => 3],
            ['name_en' => 'Beruwala', 'name_si' => 'බේරුවල', 'name_ta' => 'பேருவளை', 'code' => 'GN026', 'district_id' => 3],
            ['name_en' => 'Matugama', 'name_si' => 'මතුගම', 'name_ta' => 'மதுகம', 'code' => 'GN027', 'district_id' => 3],
            ['name_en' => 'Bandaragama', 'name_si' => 'බණ්ඩාරගම', 'name_ta' => 'பண்டாரகம', 'code' => 'GN028', 'district_id' => 3],
            ['name_en' => 'Agalawatta', 'name_si' => 'අගලවත්ත', 'name_ta' => 'அகலவத்த', 'code' => 'GN029', 'district_id' => 3],
            ['name_en' => 'Dodangoda', 'name_si' => 'දොඩන්ගොඩ', 'name_ta' => 'தொடன்கொட', 'code' => 'GN030', 'district_id' => 3],

            // Kandy District (ID: 4)
            ['name_en' => 'Kandy Central', 'name_si' => 'කැන්ඩි මධ්‍යම', 'name_ta' => 'கண்டி மத்திய', 'code' => 'GN031', 'district_id' => 4],
            ['name_en' => 'Peradeniya', 'name_si' => 'පේරාදෙණිය', 'name_ta' => 'பேராதெனிய', 'code' => 'GN032', 'district_id' => 4],
            ['name_en' => 'Gampola East', 'name_si' => 'ගම්පොල නැගෙනහිර', 'name_ta' => 'கம்பொள கிழக்கு', 'code' => 'GN033', 'district_id' => 4],
            ['name_en' => 'Gampola West', 'name_si' => 'ගම්පොල බටහිර', 'name_ta' => 'கம்பொள மேற்கு', 'code' => 'GN034', 'district_id' => 4],
            ['name_en' => 'Nawalapitiya', 'name_si' => 'නවලපිටිය', 'name_ta' => 'நவலபிட்டிய', 'code' => 'GN035', 'district_id' => 4],
            ['name_en' => 'Wattegama', 'name_si' => 'වත්තේගම', 'name_ta' => 'வத்தேகம', 'code' => 'GN036', 'district_id' => 4],
            ['name_en' => 'Kadugannawa', 'name_si' => 'කඩුගන්නාව', 'name_ta' => 'கடுகன்னாவ', 'code' => 'GN037', 'district_id' => 4],
            ['name_en' => 'Hatton', 'name_si' => 'හැටන්', 'name_ta' => 'ஹட்டன்', 'code' => 'GN038', 'district_id' => 4],
            ['name_en' => 'Akurana', 'name_si' => 'අකුරණ', 'name_ta' => 'அகுரண', 'code' => 'GN039', 'district_id' => 4],
            ['name_en' => 'Doluwa', 'name_si' => 'දොළුව', 'name_ta' => 'தொளுவ', 'code' => 'GN040', 'district_id' => 4],

            // Matale District (ID: 5)
            ['name_en' => 'Matale Central', 'name_si' => 'මාතලේ මධ්‍යම', 'name_ta' => 'மாத்தளை மத்திய', 'code' => 'GN041', 'district_id' => 5],
            ['name_en' => 'Dambulla East', 'name_si' => 'දඹුල්ල නැගෙනහිර', 'name_ta' => 'தம்புள்ள கிழக்கு', 'code' => 'GN042', 'district_id' => 5],
            ['name_en' => 'Dambulla West', 'name_si' => 'දඹුල්ල බටහිර', 'name_ta' => 'தம்புள்ள மேற்கு', 'code' => 'GN043', 'district_id' => 5],
            ['name_en' => 'Sigiriya', 'name_si' => 'සීගිරිය', 'name_ta' => 'சீகிரிய', 'code' => 'GN044', 'district_id' => 5],
            ['name_en' => 'Galewela', 'name_si' => 'ගලේවෙල', 'name_ta' => 'களேவெல', 'code' => 'GN045', 'district_id' => 5],
            ['name_en' => 'Ukuwela', 'name_si' => 'උකුවෙල', 'name_ta' => 'உकुवெல', 'code' => 'GN046', 'district_id' => 5],
            ['name_en' => 'Rattota', 'name_si' => 'රත්තොට', 'name_ta' => 'ரத்தொட', 'code' => 'GN047', 'district_id' => 5],
            ['name_en' => 'Pallepola', 'name_si' => 'පල්ලේපොල', 'name_ta' => 'பல்லேபொள', 'code' => 'GN048', 'district_id' => 5],
            ['name_en' => 'Yatawatta', 'name_si' => 'යටවත්ත', 'name_ta' => 'யடவத்த', 'code' => 'GN049', 'district_id' => 5],
            ['name_en' => 'Wilgamuwa', 'name_si' => 'විල්ගමුව', 'name_ta' => 'வில்கமுவ', 'code' => 'GN050', 'district_id' => 5],

            // Nuwara Eliya District (ID: 6)
            ['name_en' => 'Nuwara Eliya Central', 'name_si' => 'නුවරඑළිය මධ්‍යම', 'name_ta' => 'நுவரேலியா மத்திய', 'code' => 'GN051', 'district_id' => 6],
            ['name_en' => 'Hatton Estate', 'name_si' => 'හැටන් වතු', 'name_ta' => 'ஹட்டன் தெஸ்டேட்', 'code' => 'GN052', 'district_id' => 6],
            ['name_en' => 'Bandarawela', 'name_si' => 'බණ්ඩාරවෙල', 'name_ta' => 'பண்டாரவெல', 'code' => 'GN053', 'district_id' => 6],
            ['name_en' => 'Talawakelle', 'name_si' => 'තලවාකැලේ', 'name_ta' => 'தலவாக்கெலே', 'code' => 'GN054', 'district_id' => 6],
            ['name_en' => 'Lindula', 'name_si' => 'ලින්දුල', 'name_ta' => 'லின்துல', 'code' => 'GN055', 'district_id' => 6],
            ['name_en' => 'Ginigathena', 'name_si' => 'ගිනිගතහේන', 'name_ta' => 'கினிகதஹேன', 'code' => 'GN056', 'district_id' => 6],
            ['name_en' => 'Kotagala', 'name_si' => 'කොටගල', 'name_ta' => 'கொடகள', 'code' => 'GN057', 'district_id' => 6],
            ['name_en' => 'Ambewela', 'name_si' => 'අම්බේවෙල', 'name_ta' => 'அம்பேவெல', 'code' => 'GN058', 'district_id' => 6],
            ['name_en' => 'Ramboda', 'name_si' => 'රම්බොඩ', 'name_ta' => 'ரம்பொட', 'code' => 'GN059', 'district_id' => 6],
            ['name_en' => 'Haputale', 'name_si' => 'හපුතලේ', 'name_ta' => 'ஹபுதலே', 'code' => 'GN060', 'district_id' => 6],

            // Galle District (ID: 7)
            ['name_en' => 'Galle Fort', 'name_si' => 'ගාල්ල කොටුව', 'name_ta' => 'காலி கோட்டை', 'code' => 'GN061', 'district_id' => 7],
            ['name_en' => 'Hikkaduwa North', 'name_si' => 'හික්කඩුව උතුර', 'name_ta' => 'ஹிக்கடுவ வட', 'code' => 'GN062', 'district_id' => 7],
            ['name_en' => 'Hikkaduwa South', 'name_si' => 'හික්කඩුව දකුණ', 'name_ta' => 'ஹிக்கடுவ தென்', 'code' => 'GN063', 'district_id' => 7],
            ['name_en' => 'Ambalangoda Central', 'name_si' => 'අම්බලන්ගොඩ මධ්‍යම', 'name_ta' => 'அம்பலன்கொட மத்திய', 'code' => 'GN064', 'district_id' => 7],
            ['name_en' => 'Elpitiya', 'name_si' => 'එල්පිටිය', 'name_ta' => 'எல்பிட்டிய', 'code' => 'GN065', 'district_id' => 7],
            ['name_en' => 'Bentota', 'name_si' => 'බෙන්තොට', 'name_ta' => 'பென்தொட', 'code' => 'GN066', 'district_id' => 7],
            ['name_en' => 'Baddegama', 'name_si' => 'බද්දේගම', 'name_ta' => 'பத்தேகம', 'code' => 'GN067', 'district_id' => 7],
            ['name_en' => 'Udugama', 'name_si' => 'උදුගම', 'name_ta' => 'உதுகம', 'code' => 'GN068', 'district_id' => 7],
            ['name_en' => 'Imaduwa', 'name_si' => 'ඉමදුව', 'name_ta' => 'இமதுவ', 'code' => 'GN069', 'district_id' => 7],
            ['name_en' => 'Yakkalamulla', 'name_si' => 'යක්කලමුල්ල', 'name_ta' => 'யக்கலமுல்ல', 'code' => 'GN070', 'district_id' => 7],
        ];

        foreach ($gramaNiladhariDivisions as $gnd) {
            GramaNiladhariDivision::create($gnd);
        }
    }
}
