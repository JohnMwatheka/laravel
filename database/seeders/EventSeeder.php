<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'venue' => 'Main Conference Center',
            'date' => Carbon::now()->addMonths(2), // Event 2 months from now
            'tickets' => [
                'early_bird' => 500,
                'advance' => 700,
                'gate' => 1000
            ],
            'event_image' => 'uploads/events/default-event.jpg',
            'intro_video' => 'https://www.youtube.com/watch?v=example'
        ]);

        Event::create([
            'venue' => 'School Auditorium',
            'date' => Carbon::now()->addMonths(3), // Event 3 months from now
            'tickets' => [
                'early_bird' => 300,
                'advance' => 500,
                'gate' => 700
            ],
            'event_image' => 'uploads/events/school-event.jpg',
            'intro_video' => null
        ]);

        $this->command->info('Sample events created successfully.');
    }
}
