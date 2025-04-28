{{-- @extends('layouts.app') --}}

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white shadow rounded p-6 text-center">
        <h1 class="text-2xl font-bold mb-4">Your Ticket is Ready!</h1>
        <p class="mb-2">Thank you for purchasing a ticket.</p>
        <p class="mb-4">Ticket ID: <strong>{{ $ticketId }}</strong></p>
        <p class="mb-4">Amount Paid: <strong>Ksh {{ number_format($amount, 2) }}</strong></p>
        <a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">Download Ticket PDF</a>
    </div>
</div>
@endsection 