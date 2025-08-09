<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    public function run(): void
    {
        $hospitals = [
            // Colombo District hospitals
            [
                'name' => 'National Hospital of Sri Lanka',
                'type' => 'government',
                'address' => 'Regent Street, Colombo 07',
                'phone' => '+94112691111',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'Neurology', 'Oncology', 'ICU', 'Pediatrics'],
                'bed_count' => 3400,
                'latitude' => 6.9147,
                'longitude' => 79.8728,
                'city_id' => 1
            ],
            [
                'name' => 'Lady Ridgeway Hospital for Children',
                'type' => 'government',
                'address' => 'Danister De Silva Mawatha, Borella, Colombo 08',
                'phone' => '+94112693711',
                'services' => ['Pediatrics', 'Emergency', 'Surgery', 'Neonatal Care', 'ICU'],
                'bed_count' => 900,
                'latitude' => 6.9147,
                'longitude' => 79.8822,
                'city_id' => 1
            ],
            [
                'name' => 'De Soysa Hospital for Women',
                'type' => 'government',
                'address' => 'Kynsey Road, Colombo 08',
                'phone' => '+94112693511',
                'services' => ['Obstetrics', 'Gynecology', 'Emergency', 'Neonatal Care'],
                'bed_count' => 650,
                'latitude' => 6.9147,
                'longitude' => 79.8822,
                'city_id' => 1
            ],
            [
                'name' => 'Eye Hospital Colombo',
                'type' => 'government',
                'address' => 'Kinsey Road, Colombo 08',
                'phone' => '+94112693941',
                'services' => ['Ophthalmology', 'Emergency', 'Surgery'],
                'bed_count' => 120,
                'latitude' => 6.9147,
                'longitude' => 79.8822,
                'city_id' => 1
            ],
            [
                'name' => 'Lanka Hospital',
                'type' => 'private',
                'address' => '578 Elvitigala Mawatha, Colombo 05',
                'phone' => '+94115430000',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'Neurology', 'Oncology', 'ICU', 'Radiology'],
                'bed_count' => 350,
                'latitude' => 6.8964,
                'longitude' => 79.8615,
                'city_id' => 1
            ],
            [
                'name' => 'Nawaloka Hospital',
                'type' => 'private',
                'address' => '23 Deshamanya H K Dharmadasa Mawatha, Colombo 02',
                'phone' => '+94115577111',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'Neurology', 'Oncology', 'ICU', 'Transplant'],
                'bed_count' => 230,
                'latitude' => 6.9147,
                'longitude' => 79.8560,
                'city_id' => 1
            ],
            [
                'name' => 'Asiri Central Hospital',
                'type' => 'private',
                'address' => '114 Norris Canal Road, Colombo 10',
                'phone' => '+94114665500',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'Neurology', 'ICU', 'Orthopedics'],
                'bed_count' => 185,
                'latitude' => 6.9271,
                'longitude' => 79.8668,
                'city_id' => 1
            ],
            [
                'name' => 'Durdans Hospital',
                'type' => 'private',
                'address' => '3 Alfred Place, Colombo 03',
                'phone' => '+94115140000',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'ICU', 'Radiology'],
                'bed_count' => 160,
                'latitude' => 6.9147,
                'longitude' => 79.8487,
                'city_id' => 1
            ],
            [
                'name' => 'Apollo Hospital Colombo',
                'type' => 'private',
                'address' => '578 Elvitigala Mawatha, Colombo 05',
                'phone' => '+94114530000',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'Neurology', 'Oncology', 'ICU', 'Transplant'],
                'bed_count' => 300,
                'latitude' => 6.8964,
                'longitude' => 79.8615,
                'city_id' => 1
            ],
            [
                'name' => 'Central Hospital',
                'type' => 'private',
                'address' => '114 Norris Canal Road, Colombo 10',
                'phone' => '+94114665000',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'ICU'],
                'bed_count' => 120,
                'latitude' => 6.9271,
                'longitude' => 79.8668,
                'city_id' => 1
            ],

            // Dehiwala-Mount Lavinia hospitals
            [
                'name' => 'Kalubowila Hospital',
                'type' => 'government',
                'address' => 'Thalapathpitiya Road, Dehiwala',
                'phone' => '+94112778300',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'ICU', 'Orthopedics'],
                'bed_count' => 850,
                'latitude' => 6.8413,
                'longitude' => 79.8607,
                'city_id' => 2
            ],
            [
                'name' => 'Asiri Surgical Hospital',
                'type' => 'private',
                'address' => '21 Kirimandala Mawatha, Colombo 05',
                'phone' => '+94114524400',
                'services' => ['Surgery', 'Emergency', 'ICU', 'Orthopedics'],
                'bed_count' => 95,
                'latitude' => 6.8413,
                'longitude' => 79.8607,
                'city_id' => 2
            ],

            // Moratuwa hospitals
            [
                'name' => 'Moratuwa Base Hospital',
                'type' => 'government',
                'address' => 'Galle Road, Moratuwa',
                'phone' => '+94112650261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics'],
                'bed_count' => 320,
                'latitude' => 6.7730,
                'longitude' => 79.8816,
                'city_id' => 3
            ],

            // Sri Jayawardenepura Kotte hospitals
            [
                'name' => 'Sri Jayewardenepura General Hospital',
                'type' => 'government',
                'address' => 'Thalapathpitiya, Nugegoda',
                'phone' => '+94112778200',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'ICU', 'Cardiology'],
                'bed_count' => 1200,
                'latitude' => 6.8705,
                'longitude' => 79.8987,
                'city_id' => 4
            ],

            // Gampaha hospitals
            [
                'name' => 'Gampaha District General Hospital',
                'type' => 'government',
                'address' => 'Yakkala Road, Gampaha',
                'phone' => '+94332222261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics', 'ICU'],
                'bed_count' => 650,
                'latitude' => 7.0912,
                'longitude' => 79.9959,
                'city_id' => 11
            ],

            // Negombo hospitals
            [
                'name' => 'Negombo District General Hospital',
                'type' => 'government',
                'address' => 'Colombo Road, Negombo',
                'phone' => '+94312222261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics', 'ICU'],
                'bed_count' => 520,
                'latitude' => 7.2084,
                'longitude' => 79.8358,
                'city_id' => 5
            ],

            // Kalutara hospitals
            [
                'name' => 'Kalutara District General Hospital',
                'type' => 'government',
                'address' => 'Nagoda, Kalutara',
                'phone' => '+94342222261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics', 'ICU'],
                'bed_count' => 480,
                'latitude' => 6.5854,
                'longitude' => 79.9607,
                'city_id' => 12
            ],

            // Kandy hospitals
            [
                'name' => 'Teaching Hospital Kandy',
                'type' => 'government',
                'address' => 'William Gopallawa Mawatha, Kandy',
                'phone' => '+94812234261',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'Neurology', 'ICU', 'Pediatrics', 'Oncology'],
                'bed_count' => 1150,
                'latitude' => 7.2906,
                'longitude' => 80.6337,
                'city_id' => 31
            ],
            [
                'name' => 'Asiri Hospital Kandy',
                'type' => 'private',
                'address' => 'No. 55, Siripa Road, Kandy',
                'phone' => '+94812234567',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'ICU', 'Radiology'],
                'bed_count' => 140,
                'latitude' => 7.2906,
                'longitude' => 80.6337,
                'city_id' => 31
            ],

            // Matale hospitals
            [
                'name' => 'Matale District General Hospital',
                'type' => 'government',
                'address' => 'Trincomalee Street, Matale',
                'phone' => '+94662234261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics', 'ICU'],
                'bed_count' => 380,
                'latitude' => 7.4675,
                'longitude' => 80.6234,
                'city_id' => 41
            ],

            // Nuwara Eliya hospitals
            [
                'name' => 'Nuwara Eliya District General Hospital',
                'type' => 'government',
                'address' => 'Hospital Road, Nuwara Eliya',
                'phone' => '+94522234261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics'],
                'bed_count' => 280,
                'latitude' => 6.9497,
                'longitude' => 80.7891,
                'city_id' => 51
            ],

            // Galle hospitals
            [
                'name' => 'Teaching Hospital Karapitiya',
                'type' => 'government',
                'address' => 'Karapitiya, Galle',
                'phone' => '+94912234261',
                'services' => ['Emergency', 'Surgery', 'Cardiology', 'Neurology', 'ICU', 'Pediatrics', 'Oncology'],
                'bed_count' => 950,
                'latitude' => 6.0534,
                'longitude' => 80.2210,
                'city_id' => 61
            ],

            // Jaffna hospitals
            [
                'name' => 'Teaching Hospital Jaffna',
                'type' => 'government',
                'address' => 'Colombo Road, Jaffna',
                'phone' => '+94212234261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics', 'ICU'],
                'bed_count' => 720,
                'latitude' => 9.6615,
                'longitude' => 80.0255,
                'city_id' => 71
            ],

            // Trincomalee hospitals
            [
                'name' => 'Trincomalee District General Hospital',
                'type' => 'government',
                'address' => 'Hospital Road, Trincomalee',
                'phone' => '+94262234261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics'],
                'bed_count' => 450,
                'latitude' => 8.5874,
                'longitude' => 81.2152,
                'city_id' => 73
            ],

            // Anuradhapura hospitals
            [
                'name' => 'Teaching Hospital Anuradhapura',
                'type' => 'government',
                'address' => 'Hospital Junction, Anuradhapura',
                'phone' => '+94252234261',
                'services' => ['Emergency', 'Surgery', 'General Medicine', 'Pediatrics', 'ICU'],
                'bed_count' => 680,
                'latitude' => 8.3114,
                'longitude' => 80.4037,
                'city_id' => 74
            ],
        ];

        foreach ($hospitals as $hospital) {
            Hospital::create($hospital);
        }
    }
}
