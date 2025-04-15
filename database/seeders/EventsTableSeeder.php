<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'id' => 1,
                'venue' => 'Pace Teenz Festival',
                'date' => '2025-11-29',
                'tickets' => json_encode([
                    'early_bird' => 500,
                    'advance' => 800,
                    'gate' => 1000,
                ]),
                'event_image' => 'uploads/events/1744413862_nibenip_by_slnbnsintention_dhkpwtc.jpg',
                'intro_video' => 'https://youtu.be/fxHISPvGiRI',
                'created_at' => '2025-04-11 20:24:22',
                'updated_at' => '2025-04-11 20:24:22',
            ],
        ]);
    }
}
