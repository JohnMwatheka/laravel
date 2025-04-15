<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'school',
        'amount',
        'quantity',
        'total_amount',
        'reference',
        'payment_status',
        'mpesa_receipt_number',
        'payment_date'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // Generate a unique reference number
    public static function generateReference()
    {
        return 'TKT' . time() . rand(1000, 9999);
    }
}
