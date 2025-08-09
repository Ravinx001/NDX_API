<?php

namespace Database\Seeders;

use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class PoliceStationSeeder extends Seeder
{
    public function run(): void
    {
        $policeStations = [
            // Colombo District police stations
            [
                'name' => 'Colombo Central Police Station',
                'address' => 'Police Park, Colombo 01',
                'phone' => '+94112421111',
                'latitude' => 6.9271,
                'longitude' => 79.8612,
                'city_id' => 1
            ],
            [
                'name' => 'Fort Police Station',
                'address' => 'Fort Railway Station Road, Colombo 01',
                'phone' => '+94112421222',
                'latitude' => 6.9344,
                'longitude' => 79.8428,
                'city_id' => 1
            ],
            [
                'name' => 'Slave Island Police Station',
                'address' => 'Slave Island, Colombo 02',
                'phone' => '+94112421333',
                'latitude' => 6.9147,
                'longitude' => 79.8560,
                'city_id' => 1
            ],
            [
                'name' => 'Kollupitiya Police Station',
                'address' => 'Galle Road, Kollupitiya, Colombo 03',
                'phone' => '+94112421444',
                'latitude' => 6.9147,
                'longitude' => 79.8487,
                'city_id' => 1
            ],
            [
                'name' => 'Bambalapitiya Police Station',
                'address' => 'Galle Road, Bambalapitiya, Colombo 04',
                'phone' => '+94112421555',
                'latitude' => 6.8964,
                'longitude' => 79.8553,
                'city_id' => 1
            ],
            [
                'name' => 'Wellawatta Police Station',
                'address' => 'Galle Road, Wellawatta, Colombo 06',
                'phone' => '+94112421666',
                'latitude' => 6.8721,
                'longitude' => 79.8615,
                'city_id' => 1
            ],
            [
                'name' => 'Cinnamon Gardens Police Station',
                'address' => 'Independence Avenue, Colombo 07',
                'phone' => '+94112421777',
                'latitude' => 6.9147,
                'longitude' => 79.8728,
                'city_id' => 1
            ],
            [
                'name' => 'Dematagoda Police Station',
                'address' => 'Baseline Road, Dematagoda, Colombo 09',
                'phone' => '+94112421888',
                'latitude' => 6.9442,
                'longitude' => 79.8822,
                'city_id' => 1
            ],
            [
                'name' => 'Maradana Police Station',
                'address' => 'Maradana Road, Colombo 10',
                'phone' => '+94112421999',
                'latitude' => 6.9271,
                'longitude' => 79.8668,
                'city_id' => 1
            ],
            [
                'name' => 'Pettah Police Station',
                'address' => 'Main Street, Pettah, Colombo 11',
                'phone' => '+94112422000',
                'latitude' => 6.9442,
                'longitude' => 79.8545,
                'city_id' => 1
            ],

            // Dehiwala-Mount Lavinia police stations
            [
                'name' => 'Dehiwala Police Station',
                'address' => 'Galle Road, Dehiwala',
                'phone' => '+94112750111',
                'latitude' => 6.8413,
                'longitude' => 79.8607,
                'city_id' => 2
            ],
            [
                'name' => 'Mount Lavinia Police Station',
                'address' => 'Hotel Road, Mount Lavinia',
                'phone' => '+94112750222',
                'latitude' => 6.8330,
                'longitude' => 79.8630,
                'city_id' => 2
            ],

            // Moratuwa police stations
            [
                'name' => 'Moratuwa Police Station',
                'address' => 'Galle Road, Moratuwa',
                'phone' => '+94112650111',
                'latitude' => 6.7730,
                'longitude' => 79.8816,
                'city_id' => 3
            ],

            // Sri Jayawardenepura Kotte police stations
            [
                'name' => 'Kotte Police Station',
                'address' => 'Sri Jayawardenepura Road, Kotte',
                'phone' => '+94112870111',
                'latitude' => 6.8905,
                'longitude' => 79.9487,
                'city_id' => 4
            ],
            [
                'name' => 'Rajagiriya Police Station',
                'address' => 'Kotte Road, Rajagiriya',
                'phone' => '+94112870222',
                'latitude' => 6.9064,
                'longitude' => 79.8914,
                'city_id' => 4
            ],

            // Negombo police stations
            [
                'name' => 'Negombo Police Station',
                'address' => 'Main Street, Negombo',
                'phone' => '+94312222222',
                'latitude' => 7.2084,
                'longitude' => 79.8358,
                'city_id' => 5
            ],

            // Gampaha police stations
            [
                'name' => 'Gampaha Police Station',
                'address' => 'Colombo Road, Gampaha',
                'phone' => '+94332222333',
                'latitude' => 7.0912,
                'longitude' => 79.9959,
                'city_id' => 11
            ],

            // Kalutara police stations
            [
                'name' => 'Kalutara Police Station',
                'address' => 'Galle Road, Kalutara',
                'phone' => '+94342222444',
                'latitude' => 6.5854,
                'longitude' => 79.9607,
                'city_id' => 12
            ],
            [
                'name' => 'Panadura Police Station',
                'address' => 'Galle Road, Panadura',
                'phone' => '+94382222555',
                'latitude' => 6.7134,
                'longitude' => 79.9037,
                'city_id' => 21
            ],

            // Kandy police stations
            [
                'name' => 'Kandy Central Police Station',
                'address' => 'Temple Street, Kandy',
                'phone' => '+94812222666',
                'latitude' => 7.2906,
                'longitude' => 80.6337,
                'city_id' => 31
            ],
            [
                'name' => 'Peradeniya Police Station',
                'address' => 'Peradeniya Road, Peradeniya',
                'phone' => '+94812222777',
                'latitude' => 7.2667,
                'longitude' => 80.5833,
                'city_id' => 34
            ],

            // Matale police stations
            [
                'name' => 'Matale Police Station',
                'address' => 'Kandy Road, Matale',
                'phone' => '+94662222888',
                'latitude' => 7.4675,
                'longitude' => 80.6234,
                'city_id' => 41
            ],
            [
                'name' => 'Dambulla Police Station',
                'address' => 'Anuradhapura Road, Dambulla',
                'phone' => '+94662222999',
                'latitude' => 7.8606,
                'longitude' => 80.6518,
                'city_id' => 42
            ],

            // Nuwara Eliya police stations
            [
                'name' => 'Nuwara Eliya Police Station',
                'address' => 'Park Road, Nuwara Eliya',
                'phone' => '+94522223000',
                'latitude' => 6.9497,
                'longitude' => 80.7891,
                'city_id' => 51
            ],
            [
                'name' => 'Hatton Police Station',
                'address' => 'Station Road, Hatton',
                'phone' => '+94512223111',
                'latitude' => 6.8900,
                'longitude' => 80.5959,
                'city_id' => 52
            ],

            // Galle police stations
            [
                'name' => 'Galle Police Station',
                'address' => 'Church Street, Galle Fort',
                'phone' => '+94912223222',
                'latitude' => 6.0329,
                'longitude' => 80.2168,
                'city_id' => 61
            ],
            [
                'name' => 'Hikkaduwa Police Station',
                'address' => 'Galle Road, Hikkaduwa',
                'phone' => '+94912223333',
                'latitude' => 6.1389,
                'longitude' => 80.1007,
                'city_id' => 62
            ],

            // Jaffna police stations
            [
                'name' => 'Jaffna Police Station',
                'address' => 'Hospital Street, Jaffna',
                'phone' => '+94212223444',
                'latitude' => 9.6615,
                'longitude' => 80.0255,
                'city_id' => 71
            ],

            // Trincomalee police stations
            [
                'name' => 'Trincomalee Police Station',
                'address' => 'Court Road, Trincomalee',
                'phone' => '+94262223555',
                'latitude' => 8.5874,
                'longitude' => 81.2152,
                'city_id' => 73
            ],

            // Anuradhapura police stations
            [
                'name' => 'Anuradhapura Police Station',
                'address' => 'New Town, Anuradhapura',
                'phone' => '+94252223666',
                'latitude' => 8.3114,
                'longitude' => 80.4037,
                'city_id' => 74
            ],
        ];

        foreach ($policeStations as $policeStation) {
            PoliceStation::create($policeStation);
        }
    }
}
