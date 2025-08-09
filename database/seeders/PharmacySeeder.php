<?php

namespace Database\Seeders;

use App\Models\Pharmacy;
use Illuminate\Database\Seeder;

class PharmacySeeder extends Seeder
{
    public function run(): void
    {
        $pharmacies = [
            // Colombo District pharmacies
            [
                'name' => 'Osu Sala Pharmacy - Fort',
                'type' => 'private',
                'address' => 'York Street, Colombo 01',
                'phone' => '+94112345001',
                'opening_time' => '08:00:00',
                'closing_time' => '22:00:00',
                'is_24_hours' => false,
                'latitude' => 6.9344,
                'longitude' => 79.8428,
                'city_id' => 1
            ],
            [
                'name' => 'Keells Super - Pharmacy Wellawatta',
                'type' => 'private',
                'address' => 'Galle Road, Wellawatta, Colombo 06',
                'phone' => '+94112345002',
                'opening_time' => '07:00:00',
                'closing_time' => '23:00:00',
                'is_24_hours' => false,
                'latitude' => 6.8721,
                'longitude' => 79.8615,
                'city_id' => 1
            ],
            [
                'name' => 'State Pharmaceuticals Corporation - Rajagiriya',
                'type' => 'government',
                'address' => 'No. 75, Sir Chittampalam A. Gardiner Mawatha, Colombo 02',
                'phone' => '+94112345003',
                'opening_time' => '08:00:00',
                'closing_time' => '17:00:00',
                'is_24_hours' => false,
                'latitude' => 6.9147,
                'longitude' => 79.8560,
                'city_id' => 1
            ],
            [
                'name' => 'Pharmacy One - Bambalapitiya',
                'type' => 'private',
                'address' => 'Galle Road, Bambalapitiya, Colombo 04',
                'phone' => '+94112345004',
                'opening_time' => '00:00:00',
                'closing_time' => '23:59:59',
                'is_24_hours' => true,
                'latitude' => 6.8964,
                'longitude' => 79.8553,
                'city_id' => 1
            ],
            [
                'name' => 'Link Pharmacy - Kollupitiya',
                'type' => 'private',
                'address' => 'Galle Road, Kollupitiya, Colombo 03',
                'phone' => '+94112345005',
                'opening_time' => '08:00:00',
                'closing_time' => '21:00:00',
                'is_24_hours' => false,
                'latitude' => 6.9147,
                'longitude' => 79.8487,
                'city_id' => 1
            ],
            [
                'name' => 'New Pharmacy - Pettah',
                'type' => 'private',
                'address' => 'Main Street, Pettah, Colombo 11',
                'phone' => '+94112345006',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 6.9442,
                'longitude' => 79.8545,
                'city_id' => 1
            ],
            [
                'name' => 'Care Pharmacy - Cinnamon Gardens',
                'type' => 'private',
                'address' => 'Ward Place, Colombo 07',
                'phone' => '+94112345007',
                'opening_time' => '08:00:00',
                'closing_time' => '22:00:00',
                'is_24_hours' => false,
                'latitude' => 6.9147,
                'longitude' => 79.8728,
                'city_id' => 1
            ],
            [
                'name' => 'Guardian Pharmacy - Maradana',
                'type' => 'private',
                'address' => 'Maradana Road, Colombo 10',
                'phone' => '+94112345008',
                'opening_time' => '07:30:00',
                'closing_time' => '21:30:00',
                'is_24_hours' => false,
                'latitude' => 6.9271,
                'longitude' => 79.8668,
                'city_id' => 1
            ],
            [
                'name' => 'Health Plus Pharmacy - Borella',
                'type' => 'private',
                'address' => 'Baseline Road, Borella, Colombo 08',
                'phone' => '+94112345009',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 6.9147,
                'longitude' => 79.8822,
                'city_id' => 1
            ],
            [
                'name' => 'National Hospital Pharmacy',
                'type' => 'government',
                'address' => 'Regent Street, Colombo 07',
                'phone' => '+94112345010',
                'opening_time' => '00:00:00',
                'closing_time' => '23:59:59',
                'is_24_hours' => true,
                'latitude' => 6.9147,
                'longitude' => 79.8728,
                'city_id' => 1
            ],

            // Dehiwala-Mount Lavinia pharmacies
            [
                'name' => 'Dehiwala Pharmacy',
                'type' => 'private',
                'address' => 'Galle Road, Dehiwala',
                'phone' => '+94112750011',
                'opening_time' => '08:00:00',
                'closing_time' => '21:00:00',
                'is_24_hours' => false,
                'latitude' => 6.8413,
                'longitude' => 79.8607,
                'city_id' => 2
            ],
            [
                'name' => 'Mount Lavinia Pharmacy',
                'type' => 'private',
                'address' => 'Hotel Road, Mount Lavinia',
                'phone' => '+94112750012',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 6.8330,
                'longitude' => 79.8630,
                'city_id' => 2
            ],

            // Moratuwa pharmacies
            [
                'name' => 'Moratuwa Central Pharmacy',
                'type' => 'private',
                'address' => 'Galle Road, Moratuwa',
                'phone' => '+94112650013',
                'opening_time' => '08:00:00',
                'closing_time' => '21:00:00',
                'is_24_hours' => false,
                'latitude' => 6.7730,
                'longitude' => 79.8816,
                'city_id' => 3
            ],

            // Sri Jayawardenepura Kotte pharmacies
            [
                'name' => 'Kotte Pharmacy',
                'type' => 'private',
                'address' => 'Sri Jayawardenepura Road, Kotte',
                'phone' => '+94112870014',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 6.8905,
                'longitude' => 79.9487,
                'city_id' => 4
            ],
            [
                'name' => 'Nugegoda Pharmacy',
                'type' => 'private',
                'address' => 'High Level Road, Nugegoda',
                'phone' => '+94112870015',
                'opening_time' => '07:30:00',
                'closing_time' => '21:30:00',
                'is_24_hours' => false,
                'latitude' => 6.8705,
                'longitude' => 79.8987,
                'city_id' => 4
            ],

            // Negombo pharmacies
            [
                'name' => 'Negombo Central Pharmacy',
                'type' => 'private',
                'address' => 'Main Street, Negombo',
                'phone' => '+94312345016',
                'opening_time' => '08:00:00',
                'closing_time' => '21:00:00',
                'is_24_hours' => false,
                'latitude' => 7.2084,
                'longitude' => 79.8358,
                'city_id' => 5
            ],

            // Gampaha pharmacies
            [
                'name' => 'Gampaha Pharmacy',
                'type' => 'private',
                'address' => 'Colombo Road, Gampaha',
                'phone' => '+94332345017',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 7.0912,
                'longitude' => 79.9959,
                'city_id' => 11
            ],

            // Kalutara pharmacies
            [
                'name' => 'Kalutara Pharmacy',
                'type' => 'private',
                'address' => 'Galle Road, Kalutara',
                'phone' => '+94342345018',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 6.5854,
                'longitude' => 79.9607,
                'city_id' => 12
            ],
            [
                'name' => 'Panadura Pharmacy',
                'type' => 'private',
                'address' => 'Galle Road, Panadura',
                'phone' => '+94382345019',
                'opening_time' => '08:00:00',
                'closing_time' => '21:00:00',
                'is_24_hours' => false,
                'latitude' => 6.7134,
                'longitude' => 79.9037,
                'city_id' => 21
            ],

            // Kandy pharmacies
            [
                'name' => 'Kandy Central Pharmacy',
                'type' => 'private',
                'address' => 'Dalada Veediya, Kandy',
                'phone' => '+94812345020',
                'opening_time' => '08:00:00',
                'closing_time' => '21:00:00',
                'is_24_hours' => false,
                'latitude' => 7.2906,
                'longitude' => 80.6337,
                'city_id' => 31
            ],
            [
                'name' => 'Teaching Hospital Kandy Pharmacy',
                'type' => 'government',
                'address' => 'William Gopallawa Mawatha, Kandy',
                'phone' => '+94812345021',
                'opening_time' => '00:00:00',
                'closing_time' => '23:59:59',
                'is_24_hours' => true,
                'latitude' => 7.2906,
                'longitude' => 80.6337,
                'city_id' => 31
            ],

            // Matale pharmacies
            [
                'name' => 'Matale Pharmacy',
                'type' => 'private',
                'address' => 'Trincomalee Street, Matale',
                'phone' => '+94662345022',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 7.4675,
                'longitude' => 80.6234,
                'city_id' => 41
            ],
            [
                'name' => 'Dambulla Pharmacy',
                'type' => 'private',
                'address' => 'Anuradhapura Road, Dambulla',
                'phone' => '+94662345023',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 7.8606,
                'longitude' => 80.6518,
                'city_id' => 42
            ],

            // Nuwara Eliya pharmacies
            [
                'name' => 'Nuwara Eliya Pharmacy',
                'type' => 'private',
                'address' => 'New Bazaar Street, Nuwara Eliya',
                'phone' => '+94522345024',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 6.9497,
                'longitude' => 80.7891,
                'city_id' => 51
            ],
            [
                'name' => 'Hatton Pharmacy',
                'type' => 'private',
                'address' => 'Station Road, Hatton',
                'phone' => '+94512345025',
                'opening_time' => '08:00:00',
                'closing_time' => '19:00:00',
                'is_24_hours' => false,
                'latitude' => 6.8900,
                'longitude' => 80.5959,
                'city_id' => 52
            ],

            // Galle pharmacies
            [
                'name' => 'Galle Fort Pharmacy',
                'type' => 'private',
                'address' => 'Church Street, Galle Fort',
                'phone' => '+94912345026',
                'opening_time' => '08:00:00',
                'closing_time' => '21:00:00',
                'is_24_hours' => false,
                'latitude' => 6.0329,
                'longitude' => 80.2168,
                'city_id' => 61
            ],
            [
                'name' => 'Hikkaduwa Pharmacy',
                'type' => 'private',
                'address' => 'Galle Road, Hikkaduwa',
                'phone' => '+94912345027',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 6.1389,
                'longitude' => 80.1007,
                'city_id' => 62
            ],

            // Jaffna pharmacies
            [
                'name' => 'Jaffna Central Pharmacy',
                'type' => 'private',
                'address' => 'Hospital Street, Jaffna',
                'phone' => '+94212345028',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 9.6615,
                'longitude' => 80.0255,
                'city_id' => 71
            ],

            // Trincomalee pharmacies
            [
                'name' => 'Trincomalee Pharmacy',
                'type' => 'private',
                'address' => 'Court Road, Trincomalee',
                'phone' => '+94262345029',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 8.5874,
                'longitude' => 81.2152,
                'city_id' => 73
            ],

            // Anuradhapura pharmacies
            [
                'name' => 'Anuradhapura Central Pharmacy',
                'type' => 'private',
                'address' => 'Main Street, Anuradhapura',
                'phone' => '+94252345030',
                'opening_time' => '08:00:00',
                'closing_time' => '20:00:00',
                'is_24_hours' => false,
                'latitude' => 8.3114,
                'longitude' => 80.4037,
                'city_id' => 74
            ],
        ];

        foreach ($pharmacies as $pharmacy) {
            Pharmacy::create($pharmacy);
        }
    }
}
