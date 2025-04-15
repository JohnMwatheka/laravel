<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\Event;
use Carbon\Carbon;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make sure there's at least one event
        $event = Event::first();

        if (!$event) {
            $this->command->info('No events found. Please run the EventSeeder first.');
            return;
        }

        // Create some sample tickets
        $tickets = [
            [
                'event_id' => $event->id,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'phone' => '0712345678',
                'email' => 'john@example.com',
                'school' => 'Test School',
                'amount' => 500,
                'quantity' => 2,
                'total_amount' => 1000,
                'reference' => 'TKT' . time() . '1001',
                'payment_status' => 'completed',
                'mpesa_receipt_number' => 'MPESA' . rand(10000000, 99999999),
                'payment_date' => Carbon::now()->subDays(5),
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5)
            ],
            [
                'event_id' => $event->id,
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'phone' => '0723456789',
                'email' => 'jane@example.com',
                'school' => 'Another School',
                'amount' => 500,
                'quantity' => 1,
                'total_amount' => 500,
                'reference' => 'TKT' . time() . '1002',
                'payment_status' => 'pending',
                'mpesa_receipt_number' => null,
                'payment_date' => null,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2)
            ],
            [
                'event_id' => $event->id,
                'first_name' => 'Michael',
                'last_name' => 'Johnson',
                'phone' => '0734567890',
                'email' => 'michael@example.com',
                'school' => 'Third School',
                'amount' => 500,
                'quantity' => 3,
                'total_amount' => 1500,
                'reference' => 'TKT' . time() . '1003',
                'payment_status' => 'failed',
                'mpesa_receipt_number' => null,
                'payment_date' => null,
                'created_at' => Carbon::now()->subDay(),
                'updated_at' => Carbon::now()->subDay()
            ],
        ];

        foreach ($tickets as $ticket) {
            Ticket::create($ticket);
        }

        $this->command->info('Sample tickets created successfully.');
    }
}
