<?php

namespace Database\Seeders;

use App\Models\PradeshiyaSaba;
use Illuminate\Database\Seeder;

class PradeshiyaSabaSeeder extends Seeder
{
    public function run(): void
    {
        $pradeshiyaSabas = [
            // Colombo District (ID: 1)
            ['name_en' => 'Colombo Municipal Council', 'name_si' => 'කොළඹ මහ නගර සභාව', 'name_ta' => 'கொழும்பு மாநகர சபை', 'code' => 'PS001', 'district_id' => 1],
            ['name_en' => 'Dehiwala-Mount Lavinia Municipal Council', 'name_si' => 'දෙහිවල-ගල්කිස්ස මහ නගර සභාව', 'name_ta' => 'தெஹிவளா-கல்கிஸ்ஸ மாநகர சபை', 'code' => 'PS002', 'district_id' => 1],
            ['name_en' => 'Moratuwa Municipal Council', 'name_si' => 'මොරටුව මහ නගර සභාව', 'name_ta' => 'மொறட்டுவை மாநகர சபை', 'code' => 'PS003', 'district_id' => 1],
            ['name_en' => 'Sri Jayawardenepura Kotte Municipal Council', 'name_si' => 'ශ්‍රී ජයවර්ධනපුර කෝට්ටේ මහ නගර සභාව', 'name_ta' => 'ஸ்ரீ ஜயவர்த்தனபுர கோட்டே மாநகர சபை', 'code' => 'PS004', 'district_id' => 1],
            ['name_en' => 'Kelaniya Pradeshiya Sabha', 'name_si' => 'කැලණිය ප්‍රාදේශීය සභාව', 'name_ta' => 'களனி பிரதேச சபை', 'code' => 'PS005', 'district_id' => 1],
            ['name_en' => 'Maharagama Urban Council', 'name_si' => 'මහරගම නාගරික සභාව', 'name_ta' => 'மஹரகம நகர சபை', 'code' => 'PS006', 'district_id' => 1],
            ['name_en' => 'Kaduwela Municipal Council', 'name_si' => 'කඩුවෙල මහ නගර සභාව', 'name_ta' => 'கடுவெல மாநகர சபை', 'code' => 'PS007', 'district_id' => 1],
            ['name_en' => 'Homagama Pradeshiya Sabha', 'name_si' => 'හෝමාගම ප්‍රාදේශීය සභාව', 'name_ta' => 'ஹோமாகம பிரதேச சபை', 'code' => 'PS008', 'district_id' => 1],
            ['name_en' => 'Kolonnawa Urban Council', 'name_si' => 'කොලොන්නාව නාගරික සභාව', 'name_ta' => 'கொலொன்னாவ நகர சபை', 'code' => 'PS009', 'district_id' => 1],
            ['name_en' => 'Thimbirigasyaya Pradeshiya Sabha', 'name_si' => 'තිම්බිරිගස්යාය ප්‍රාදේශීය සභාව', 'name_ta' => 'திம்பிரிகஸ்யாய பிரதேச சபை', 'code' => 'PS010', 'district_id' => 1],

            // Gampaha District (ID: 2)
            ['name_en' => 'Gampaha Municipal Council', 'name_si' => 'ගම්පහ මහ නගර සභාව', 'name_ta' => 'கம்பஹா மாநகர சபை', 'code' => 'PS011', 'district_id' => 2],
            ['name_en' => 'Negombo Municipal Council', 'name_si' => 'මීගමුව මහ නගර සභාව', 'name_ta' => 'நீர்கொழும்பு மாநகர சபை', 'code' => 'PS012', 'district_id' => 2],
            ['name_en' => 'Katunayake-Seeduwa Pradeshiya Sabha', 'name_si' => 'කටුනායක-සීදුව ප්‍රාදේශීය සභාව', 'name_ta' => 'கட்டுநாயக்கே-சீதுவ பிரதேச சபை', 'code' => 'PS013', 'district_id' => 2],
            ['name_en' => 'Wattala-Mabole Pradeshiya Sabha', 'name_si' => 'වත්තල-මාබෝලේ ප්‍රාදේශීය සභාව', 'name_ta' => 'வத்தளை-மாபோலே பிரதேச சபை', 'code' => 'PS014', 'district_id' => 2],
            ['name_en' => 'Minuwangoda Pradeshiya Sabha', 'name_si' => 'මිණුවන්ගොඩ ප්‍රාදේශීය සභාව', 'name_ta' => 'மினுவன்கொட பிரதேச சபை', 'code' => 'PS015', 'district_id' => 2],
            ['name_en' => 'Ja-Ela Pradeshiya Sabha', 'name_si' => 'ජා-ඇල ප්‍රාදේශීය සභාව', 'name_ta' => 'ஜா-எல பிரதேச சபை', 'code' => 'PS016', 'district_id' => 2],
            ['name_en' => 'Kesbewa Pradeshiya Sabha', 'name_si' => 'කෙස්බෑව ප්‍රාදේශීය සභාව', 'name_ta' => 'கெஸ்பெவ பிரதேச சபை', 'code' => 'PS017', 'district_id' => 2],
            ['name_en' => 'Biyagama Pradeshiya Sabha', 'name_si' => 'බියගම ප්‍රාදේශීය සභාව', 'name_ta' => 'பியகம பிரதேச சபை', 'code' => 'PS018', 'district_id' => 2],
            ['name_en' => 'Mahara Pradeshiya Sabha', 'name_si' => 'මහර ප්‍රාදේශීය සභාව', 'name_ta' => 'மஹர பிரதேச சபை', 'code' => 'PS019', 'district_id' => 2],
            ['name_en' => 'Dompe Pradeshiya Sabha', 'name_si' => 'දොම්පේ ප්‍රාදේශීය සභාව', 'name_ta' => 'தொம்பே பிரதேச சபை', 'code' => 'PS020', 'district_id' => 2],

            // Kalutara District (ID: 3)
            ['name_en' => 'Kalutara Urban Council', 'name_si' => 'කළුතර නාගරික සභාව', 'name_ta' => 'களுத்துறை நகர சபை', 'code' => 'PS021', 'district_id' => 3],
            ['name_en' => 'Panadura Urban Council', 'name_si' => 'පානදුර නාගරික සභාව', 'name_ta' => 'பாணந்துறை நகர சபை', 'code' => 'PS022', 'district_id' => 3],
            ['name_en' => 'Horana Urban Council', 'name_si' => 'හොරණ නාගරික සභාව', 'name_ta' => 'ஹொரண நகர சபை', 'code' => 'PS023', 'district_id' => 3],
            ['name_en' => 'Beruwala Urban Council', 'name_si' => 'බේරුවල නාගරික සභාව', 'name_ta' => 'பேருவளை நகர சபை', 'code' => 'PS024', 'district_id' => 3],
            ['name_en' => 'Matugama Pradeshiya Sabha', 'name_si' => 'මතුගම ප්‍රාදේශීය සභාව', 'name_ta' => 'மதுகம பிரதேச சபை', 'code' => 'PS025', 'district_id' => 3],
            ['name_en' => 'Bandaragama Pradeshiya Sabha', 'name_si' => 'බණ්ඩාරගම ප්‍රාදේශීය සභාව', 'name_ta' => 'பண்டாரகம பிரதேச சபை', 'code' => 'PS026', 'district_id' => 3],
            ['name_en' => 'Agalawatta Pradeshiya Sabha', 'name_si' => 'අගලවත්ත ප්‍රාදේශීය සභාව', 'name_ta' => 'அகலவத்த பிரதேச சபை', 'code' => 'PS027', 'district_id' => 3],
            ['name_en' => 'Dodangoda Pradeshiya Sabha', 'name_si' => 'දොඩන්ගොඩ ප්‍රාදේශීය සභාව', 'name_ta' => 'தொடன்கொட பிரதேச சபை', 'code' => 'PS028', 'district_id' => 3],
            ['name_en' => 'Ingiriya Pradeshiya Sabha', 'name_si' => 'ඉංගිරිය ප්‍රාදේශීය සභාව', 'name_ta' => 'இங்கிரிய பிரதேச சபை', 'code' => 'PS029', 'district_id' => 3],
            ['name_en' => 'Palindanuwara Pradeshiya Sabha', 'name_si' => 'පලින්දනුවර ප්‍රාදේශීය සභාව', 'name_ta' => 'பலின்தனுவர பிரதேச சபை', 'code' => 'PS030', 'district_id' => 3],

            // Kandy District (ID: 4)
            ['name_en' => 'Kandy Municipal Council', 'name_si' => 'කෑන්ඩි මහ නගර සභාව', 'name_ta' => 'கண்டி மாநகர சபை', 'code' => 'PS031', 'district_id' => 4],
            ['name_en' => 'Gampola Urban Council', 'name_si' => 'ගම්පොල නාගරික සභාව', 'name_ta' => 'கம்பொள நகர சபை', 'code' => 'PS032', 'district_id' => 4],
            ['name_en' => 'Nawalapitiya Urban Council', 'name_si' => 'නවලපිටිය නාගරික සභාව', 'name_ta' => 'நவலபிட்டிய நகர சபை', 'code' => 'PS033', 'district_id' => 4],
            ['name_en' => 'Wattegama Pradeshiya Sabha', 'name_si' => 'වත්තේගම ප්‍රාදේශීය සභාව', 'name_ta' => 'வத்தேகம பிரதேச சபை', 'code' => 'PS034', 'district_id' => 4],
            ['name_en' => 'Harispattuwa Pradeshiya Sabha', 'name_si' => 'හරිස්පත්තුව ප්‍රාදේශීය සභාව', 'name_ta' => 'ஹரிஸ்பத்துவ பிரதேச சபை', 'code' => 'PS035', 'district_id' => 4],
            ['name_en' => 'Pathahewaheta Pradeshiya Sabha', 'name_si' => 'පතහේවාහේට ප්‍රාදේශීය සභාව', 'name_ta' => 'பதஹேவாஹேட பிரதேச சபை', 'code' => 'PS036', 'district_id' => 4],
            ['name_en' => 'Udapalatha Pradeshiya Sabha', 'name_si' => 'උදපලත ප්‍රාදේශීය සභාව', 'name_ta' => 'உதபலத பிரதேச சபை', 'code' => 'PS037', 'district_id' => 4],
            ['name_en' => 'Yatinuwara Pradeshiya Sabha', 'name_si' => 'යටිනුවර ප්‍රාදේශීය සභාව', 'name_ta' => 'யட்டினுவர பிரதேச சபை', 'code' => 'PS038', 'district_id' => 4],
            ['name_en' => 'Udunuwara Pradeshiya Sabha', 'name_si' => 'උඩුනුවර ප්‍රාදේශීය සභාව', 'name_ta' => 'உடுநுவர பிரதேச சபை', 'code' => 'PS039', 'district_id' => 4],
            ['name_en' => 'Gangawata Korale Pradeshiya Sabha', 'name_si' => 'ගංගාවට කෝරලේ ප්‍රාදේශීය සභාව', 'name_ta' => 'கங்காவட கோரலே பிரதேச சபை', 'code' => 'PS040', 'district_id' => 4],

            // Matale District (ID: 5)
            ['name_en' => 'Matale Municipal Council', 'name_si' => 'මාතලේ මහ නගර සභාව', 'name_ta' => 'மாத்தளை மாநகர சபை', 'code' => 'PS041', 'district_id' => 5],
            ['name_en' => 'Dambulla Pradeshiya Sabha', 'name_si' => 'දඹුල්ල ප්‍රාදේශීය සභාව', 'name_ta' => 'தம்புள்ள பிரதேச சபை', 'code' => 'PS042', 'district_id' => 5],
            ['name_en' => 'Galewela Pradeshiya Sabha', 'name_si' => 'ගලේවෙල ප්‍රාදේශීය සභාව', 'name_ta' => 'களேवெல பிரதேச சபை', 'code' => 'PS043', 'district_id' => 5],
            ['name_en' => 'Ukuwela Pradeshiya Sabha', 'name_si' => 'උකුවෙල ප්‍රාදේශීය සභාව', 'name_ta' => 'உக््कुवெல பிரதேச சபை', 'code' => 'PS044', 'district_id' => 5],
            ['name_en' => 'Rattota Pradeshiya Sabha', 'name_si' => 'රත්තොට ප්‍රාදේශීය සභාව', 'name_ta' => 'ரத்தொட பிரதேச சபை', 'code' => 'PS045', 'district_id' => 5],
            ['name_en' => 'Pallepola Pradeshiya Sabha', 'name_si' => 'පල්ලේපොල ප්‍රාදේශීය සභාව', 'name_ta' => 'பல்லேபொள பிரதேச சபை', 'code' => 'PS046', 'district_id' => 5],
            ['name_en' => 'Yatawatta Pradeshiya Sabha', 'name_si' => 'යටවත්ත ප්‍රාදේශීය සභාව', 'name_ta' => 'யடவத்த பிரதேச சபை', 'code' => 'PS047', 'district_id' => 5],
            ['name_en' => 'Wilgamuwa Pradeshiya Sabha', 'name_si' => 'විල්ගමුව ප්‍රාදේශීය සභාව', 'name_ta' => 'வில்கமுவ பிரதேச சபை', 'code' => 'PS048', 'district_id' => 5],
            ['name_en' => 'Naula Pradeshiya Sabha', 'name_si' => 'නාඋල ප්‍රාදේශීය සභාව', 'name_ta' => 'நாउல பிரதேச சபை', 'code' => 'PS049', 'district_id' => 5],
            ['name_en' => 'Laggala-Pallegama Pradeshiya Sabha', 'name_si' => 'ලග්ගල-පල්ලේගම ප්‍රාදේශීය සභාව', 'name_ta' => 'லக்கள-பல்லேகம பிரதேச சபை', 'code' => 'PS050', 'district_id' => 5],

            // Nuwara Eliya District (ID: 6)
            ['name_en' => 'Nuwara Eliya Municipal Council', 'name_si' => 'නුවරඑළිය මහ නගර සභාව', 'name_ta' => 'நுவரேலியா மாநகர சபை', 'code' => 'PS051', 'district_id' => 6],
            ['name_en' => 'Hatton-Dickoya Pradeshiya Sabha', 'name_si' => 'හැටන්-ඩිකෝය ප්‍රාදේශීය සභාව', 'name_ta' => 'ஹட்டன்-டிகோய பிரதேச சபை', 'code' => 'PS052', 'district_id' => 6],
            ['name_en' => 'Kotmale Pradeshiya Sabha', 'name_si' => 'කොත්මලේ ප්‍රාදේශීය සභාව', 'name_ta' => 'கொத்மலே பிரதேச சபை', 'code' => 'PS053', 'district_id' => 6],
            ['name_en' => 'Ambagamuwa Pradeshiya Sabha', 'name_si' => 'අම්බගමුව ප්‍රාදේශීය සභාව', 'name_ta' => 'அம்பகமுவ பிரதேச சபை', 'code' => 'PS054', 'district_id' => 6],
            ['name_en' => 'Walapane Pradeshiya Sabha', 'name_si' => 'වලපනේ ප්‍රාදේශීය සභාව', 'name_ta' => 'வலபனே பிரதேச சபை', 'code' => 'PS055', 'district_id' => 6],
            ['name_en' => 'Hanguranketa Pradeshiya Sabha', 'name_si' => 'හන්ගුරන්කෙත ප්‍රාදේශීය සභාව', 'name_ta' => 'ஹன்குரன்கெத பிரதேச சபை', 'code' => 'PS056', 'district_id' => 6],
            ['name_en' => 'Nuwara Eliya Pradeshiya Sabha', 'name_si' => 'නුවරඑළිය ප්‍රාදේශීය සභාව', 'name_ta' => 'நுவரேலியா பிரதேச சபை', 'code' => 'PS057', 'district_id' => 6],
            ['name_en' => 'Hanguranketha Pradeshiya Sabha', 'name_si' => 'හන්ගුරන්කෙත ප්‍රාදේශීය සභාව', 'name_ta' => 'ஹன்குரன்கெத பிரதேச சபை', 'code' => 'PS058', 'district_id' => 6],
            ['name_en' => 'Ambagamuwa Pradeshiya Sabha', 'name_si' => 'අම්බගමුව ප්‍රාදේශීය සභාව', 'name_ta' => 'அம்பகமுவ பிரதேச சபை', 'code' => 'PS059', 'district_id' => 6],
            ['name_en' => 'Walapane Pradeshiya Sabha', 'name_si' => 'වලපනේ ප්‍රාදේශීය සභාව', 'name_ta' => 'வலபனே பிரதேச சபை', 'code' => 'PS060', 'district_id' => 6],

            // Galle District (ID: 7)
            ['name_en' => 'Galle Municipal Council', 'name_si' => 'ගාල්ල මහ නගර සභාව', 'name_ta' => 'காலி மாநகர சபை', 'code' => 'PS061', 'district_id' => 7],
            ['name_en' => 'Hikkaduwa Urban Council', 'name_si' => 'හික්කඩුව නාගරික සභාව', 'name_ta' => 'ஹிக்கடுவ நகர சபை', 'code' => 'PS062', 'district_id' => 7],
            ['name_en' => 'Ambalangoda Urban Council', 'name_si' => 'අම්බලන්ගොඩ නාගරික සභාව', 'name_ta' => 'அம்பலன்கொட நகர சபை', 'code' => 'PS063', 'district_id' => 7],
            ['name_en' => 'Elpitiya Pradeshiya Sabha', 'name_si' => 'එල්පිටිය ප්‍රාදේශීය සභාව', 'name_ta' => 'எல்பிட்டிய பிரதேச சபை', 'code' => 'PS064', 'district_id' => 7],
            ['name_en' => 'Bentota Pradeshiya Sabha', 'name_si' => 'බෙන්තොට ප්‍රාදේශීය සභාව', 'name_ta' => 'பென்தொட பிரதேச சபை', 'code' => 'PS065', 'district_id' => 7],
            ['name_en' => 'Baddegama Pradeshiya Sabha', 'name_si' => 'බද්දේගම ප්‍රාදේශීය සභාව', 'name_ta' => 'பத்தேகம பிரதேச சபை', 'code' => 'PS066', 'district_id' => 7],
            ['name_en' => 'Nagoda Pradeshiya Sabha', 'name_si' => 'නාගොඩ ප්‍රාදේශීය සභාව', 'name_ta' => 'நாகொட பிரதேச சபை', 'code' => 'PS067', 'district_id' => 7],
            ['name_en' => 'Yakkalamulla Pradeshiya Sabha', 'name_si' => 'යක්කලමුල්ල ප්‍රාදේශීය සභාව', 'name_ta' => 'யக்கலமுல்ல பிரதேச சபை', 'code' => 'PS068', 'district_id' => 7],
            ['name_en' => 'Habaraduwa Pradeshiya Sabha', 'name_si' => 'හබරදුව ප්‍රාදේශීය සභාව', 'name_ta' => 'ஹபரதுவ பிரதேச சபை', 'code' => 'PS069', 'district_id' => 7],
            ['name_en' => 'Imaduwa Pradeshiya Sabha', 'name_si' => 'ඉමදුව ප්‍රාදේශීය සභාව', 'name_ta' => 'இमதுவ பிரதேச சபை', 'code' => 'PS070', 'district_id' => 7],
        ];

        foreach ($pradeshiyaSabas as $pradeshiyaSaba) {
            PradeshiyaSaba::create($pradeshiyaSaba);
        }
    }
}
