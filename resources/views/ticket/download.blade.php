<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticket | {{ $event?->venue ?? 'Pace Event' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
    <style>
        :root {
            --card-bg: #ffffff;
            --text-dark: #212529;
            --accent: #ff7f45;
            --divider: rgba(0,0,0,0.075);
        }
        body {
            background:#f8f9fa;
            color: var(--text-dark);
            font-family: "Inter", sans-serif;
        }
        .ticket-wrapper{
            max-width: 420px;
            margin: 2rem auto;
        }
        .ticket-card{
            background: var(--card-bg);
            border-radius: 1rem;
            overflow:hidden;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15);
        }
        .event-header{
            display: flex;
            gap:1rem;
            padding:1rem;
        }
        .event-header img{
            width: 96px;
            height:96px;
            object-fit: cover;
            border-radius: .5rem;
        }
        .chip{
            font-size:.7rem;
            background:#e9ecef;
            color:#6c757d;
            padding:.2rem .6rem;
            border-radius:999px;
            text-transform:uppercase;
            letter-spacing:.05em;
        }
        .divider{
            border-top:1px dashed var(--divider);
            margin:0 1rem;
        }
        .qr-section{
            display:flex;
            justify-content:center;
            padding:1.5rem;
        }
        .terms{
            background:#f1f3f5;
            padding:1rem 1.25rem;
            font-size:.8rem;
        }
        .btn-download{
            border-radius:2rem;
            font-weight:600;
            letter-spacing:.03em;
            background: var(--accent);
            border:none;
            margin-bottom:1.5rem;
        }
        .details-table td{
            padding:.25rem 0;
        }
        .copy-btn{
            cursor:pointer;
        }
    </style>
</head>
<body>
    <div class="ticket-wrapper">
        <div class="ticket-card shadow-lg">
            <!-- Header -->
            <div class="event-header">
                @php
                    use Illuminate\Support\Str;
                    $imgPath = $event?->event_image;
                    if ($imgPath) {
                        $imageSrc = Str::startsWith($imgPath, ['http://','https://']) ? $imgPath : asset($imgPath);
                    } else {
                        $imageSrc = 'https://placehold.co/150x150?text=Event';
                    }
                @endphp
                <img src="{{ $imageSrc }}" alt="event" class="event-img"/>
                <div class="flex-grow-1">
                    <span class="chip">Festival</span>
                    <h5 class="mt-2 mb-1 fw-semibold">{{ $event?->title ?? 'Pace Teens Festival 2025' }}</h5>
                    <small class="text-muted d-block mb-1">{{ $event?->venue ?? 'KICC Grounds, Nairobi' }}</small>
                    @if(isset($event->intro_video))
                    <small class="text-muted">{{ $event->intro_video }}</small>
                    @endif
                </div>
            </div>
            <div class="divider"></div>
            <!-- Details -->
            <div class="px-4 py-3">
                <table class="w-100 details-table">
                    <tr>
                        <td class="text-muted small">Event Date & Time</td><td class="fw-medium">{{ \Carbon\Carbon::parse($event?->date)->format('M d, Y, h:i A') }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted small">Quantity</td><td>{{ $ticket->quantity }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted small">Purchased On</td><td>{{ $ticket->created_at->format('M d, Y, h:i A') }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted small">Amount Paid</td><td>Ksh {{ number_format($ticket->total_amount, 2) }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted small">Booking Code</td>
                        <td>
                            <span id="bookingCode" class="me-2">{{ $ticket->reference }}</span>
                            <i class="bi bi-clipboard copy-btn" onclick="copyCode()"></i>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="divider"></div>
            <!-- QR -->
            <div class="qr-section">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data={{ urlencode($ticket->reference) }}" alt="QR" class="rounded"/>
            </div>
            <div class="divider"></div>
            <!-- Terms -->
            <div class="terms">
                <h6 class="fw-semibold mb-2">Terms &amp; Conditions</h6>
                <ul class="mb-0">
                    <li>Tickets are non-refundable unless event is canceled.</li>
                    <li>Present valid ID alongside this e-ticket.</li>
                    <li>Unauthorized duplication is prohibited.</li>
                </ul>
            </div>
        </div>
        <button class="btn btn-download w-100 py-3 mt-3" onclick="window.print()">Download Ticket</button>
    </div>

    <script>
        function copyCode(){
            const code = document.getElementById('bookingCode').innerText;
            navigator.clipboard.writeText(code).then(()=>{
                alert('Booking code copied');
            });
        }
    </script>
</body>
</html> 