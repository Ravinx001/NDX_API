<?php

namespace Database\Seeders;

use App\Models\PostalCode;
use Illuminate\Database\Seeder;

class PostalCodeSeeder extends Seeder
{
    public function run(): void
    {
        $postalCodes = [
            // Colombo city postal codes
            ['code' => '00100', 'area_name' => 'Colombo 1 - Fort', 'city_id' => 1],
            ['code' => '00200', 'area_name' => 'Colombo 2 - Slave Island', 'city_id' => 1],
            ['code' => '00300', 'area_name' => 'Colombo 3 - Kollupitiya', 'city_id' => 1],
            ['code' => '00400', 'area_name' => 'Colombo 4 - Bambalapitiya', 'city_id' => 1],
            ['code' => '00500', 'area_name' => 'Colombo 5 - Narahenpita', 'city_id' => 1],
            ['code' => '00600', 'area_name' => 'Colombo 6 - Wellawatta', 'city_id' => 1],
            ['code' => '00700', 'area_name' => 'Colombo 7 - Cinnamon Gardens', 'city_id' => 1],
            ['code' => '00800', 'area_name' => 'Colombo 8 - Borella', 'city_id' => 1],
            ['code' => '00900', 'area_name' => 'Colombo 9 - Dematagoda', 'city_id' => 1],
            ['code' => '01000', 'area_name' => 'Colombo 10 - Maradana', 'city_id' => 1],
            ['code' => '01100', 'area_name' => 'Colombo 11 - Pettah', 'city_id' => 1],
            ['code' => '01200', 'area_name' => 'Colombo 12 - Hulftsdorp', 'city_id' => 1],
            ['code' => '01300', 'area_name' => 'Colombo 13 - Kotahena', 'city_id' => 1],
            ['code' => '01400', 'area_name' => 'Colombo 14 - Grandpass', 'city_id' => 1],
            ['code' => '01500', 'area_name' => 'Colombo 15 - Mutwal', 'city_id' => 1],

            // Dehiwala-Mount Lavinia postal codes
            ['code' => '10350', 'area_name' => 'Dehiwala North', 'city_id' => 2],
            ['code' => '10370', 'area_name' => 'Dehiwala South', 'city_id' => 2],
            ['code' => '10400', 'area_name' => 'Mount Lavinia', 'city_id' => 2],
            ['code' => '10390', 'area_name' => 'Attidiya', 'city_id' => 2],
            ['code' => '10420', 'area_name' => 'Ratmalana', 'city_id' => 2],

            // Moratuwa postal codes
            ['code' => '10400', 'area_name' => 'Moratuwa', 'city_id' => 3],
            ['code' => '10430', 'area_name' => 'Egoda Uyana', 'city_id' => 3],
            ['code' => '10440', 'area_name' => 'Katubedda', 'city_id' => 3],
            ['code' => '10450', 'area_name' => 'Rawathawatta', 'city_id' => 3],
            ['code' => '10460', 'area_name' => 'Borupana', 'city_id' => 3],

            // Sri Jayawardenepura Kotte postal codes
            ['code' => '10100', 'area_name' => 'Sri Jayawardenepura', 'city_id' => 4],
            ['code' => '10120', 'area_name' => 'Rajagiriya', 'city_id' => 4],
            ['code' => '10140', 'area_name' => 'Welikada', 'city_id' => 4],
            ['code' => '10150', 'area_name' => 'Nugegoda', 'city_id' => 4],
            ['code' => '10250', 'area_name' => 'Nawala', 'city_id' => 4],

            // Negombo postal codes
            ['code' => '11500', 'area_name' => 'Negombo', 'city_id' => 5],
            ['code' => '11510', 'area_name' => 'Katunayake', 'city_id' => 5],
            ['code' => '11520', 'area_name' => 'Seeduwa', 'city_id' => 5],
            ['code' => '11530', 'area_name' => 'Liyanagemulla', 'city_id' => 5],
            ['code' => '11540', 'area_name' => 'Pamunugama', 'city_id' => 5],

            // Kelaniya postal codes
            ['code' => '11600', 'area_name' => 'Kelaniya', 'city_id' => 6],
            ['code' => '11650', 'area_name' => 'Kiribathgoda', 'city_id' => 6],
            ['code' => '11700', 'area_name' => 'Peliyagoda', 'city_id' => 6],
            ['code' => '11710', 'area_name' => 'Wattala', 'city_id' => 6],
            ['code' => '11750', 'area_name' => 'Hunupitiya', 'city_id' => 6],

            // Gampaha postal codes
            ['code' => '11000', 'area_name' => 'Gampaha', 'city_id' => 11],
            ['code' => '11010', 'area_name' => 'Yakkala', 'city_id' => 11],
            ['code' => '11020', 'area_name' => 'Miriswatta', 'city_id' => 11],
            ['code' => '11030', 'area_name' => 'Ganemulla', 'city_id' => 11],
            ['code' => '11040', 'area_name' => 'Kadawatha', 'city_id' => 11],

            // Kalutara postal codes
            ['code' => '12000', 'area_name' => 'Kalutara North', 'city_id' => 12],
            ['code' => '12001', 'area_name' => 'Kalutara South', 'city_id' => 12],
            ['code' => '12070', 'area_name' => 'Katukurunda', 'city_id' => 12],
            ['code' => '12080', 'area_name' => 'Waskaduwa', 'city_id' => 12],
            ['code' => '12100', 'area_name' => 'Panadura', 'city_id' => 12],

            // Kandy postal codes
            ['code' => '20000', 'area_name' => 'Kandy', 'city_id' => 31],
            ['code' => '20100', 'area_name' => 'Peradeniya', 'city_id' => 31],
            ['code' => '20150', 'area_name' => 'Gampola', 'city_id' => 31],
            ['code' => '20200', 'area_name' => 'Kadugannawa', 'city_id' => 31],
            ['code' => '20250', 'area_name' => 'Pilimatalawa', 'city_id' => 31],

            // Matale postal codes
            ['code' => '21000', 'area_name' => 'Matale', 'city_id' => 41],
            ['code' => '21100', 'area_name' => 'Dambulla', 'city_id' => 42],
            ['code' => '21120', 'area_name' => 'Sigiriya', 'city_id' => 43],
            ['code' => '21200', 'area_name' => 'Galewela', 'city_id' => 44],
            ['code' => '21300', 'area_name' => 'Ukuwela', 'city_id' => 45],

            // Nuwara Eliya postal codes
            ['code' => '22200', 'area_name' => 'Nuwara Eliya', 'city_id' => 51],
            ['code' => '22000', 'area_name' => 'Hatton', 'city_id' => 52],
            ['code' => '90100', 'area_name' => 'Bandarawela', 'city_id' => 53],
            ['code' => '22070', 'area_name' => 'Talawakelle', 'city_id' => 54],
            ['code' => '22150', 'area_name' => 'Lindula', 'city_id' => 55],

            // Galle postal codes
            ['code' => '80000', 'area_name' => 'Galle', 'city_id' => 61],
            ['code' => '80240', 'area_name' => 'Hikkaduwa', 'city_id' => 62],
            ['code' => '80300', 'area_name' => 'Ambalangoda', 'city_id' => 63],
            ['code' => '80400', 'area_name' => 'Elpitiya', 'city_id' => 64],
            ['code' => '80500', 'area_name' => 'Bentota', 'city_id' => 65],

            // Jaffna postal codes
            ['code' => '40000', 'area_name' => 'Jaffna', 'city_id' => 71],
            ['code' => '40060', 'area_name' => 'Chavakachcheri', 'city_id' => 72],
            ['code' => '40100', 'area_name' => 'Point Pedro', 'city_id' => 71],
            ['code' => '40200', 'area_name' => 'Kopay', 'city_id' => 71],
            ['code' => '40300', 'area_name' => 'Tellippalai', 'city_id' => 71],

            // Trincomalee postal codes
            ['code' => '31000', 'area_name' => 'Trincomalee', 'city_id' => 73],
            ['code' => '31100', 'area_name' => 'Kinniya', 'city_id' => 73],
            ['code' => '31200', 'area_name' => 'Kantale', 'city_id' => 73],
            ['code' => '31300', 'area_name' => 'Mutur', 'city_id' => 73],
            ['code' => '31400', 'area_name' => 'Kuchchaveli', 'city_id' => 73],

            // Anuradhapura postal codes
            ['code' => '50000', 'area_name' => 'Anuradhapura', 'city_id' => 74],
            ['code' => '50070', 'area_name' => 'Mihintale', 'city_id' => 74],
            ['code' => '50100', 'area_name' => 'Medawachchiya', 'city_id' => 74],
            ['code' => '50150', 'area_name' => 'Kekirawa', 'city_id' => 74],
            ['code' => '50200', 'area_name' => 'Tambuttegama', 'city_id' => 74],
        ];

        foreach ($postalCodes as $postalCode) {
            PostalCode::create($postalCode);
        }
    }
}
