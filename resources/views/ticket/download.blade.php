<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticket | Pace Teens Festival 2025</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QY6IsZj0oRvcnM1zCdnF7k4lZw99AsVl9D+1NqX0xP6KRZ7Lrzz2x4Ztfk9UDO9z" crossorigin="anonymous">
    <style>
        body {
            background: #f0f2f5;
        }
        .ticket-card {
            max-width: 500px;
            margin: auto;
        }
        .barcode {
            height: 70px;
            background: repeating-linear-gradient(
                90deg,
                #000,
                #000 2px,
                #fff 2px,
                #fff 4px
            );
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="ticket-card card shadow-lg border-0">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Pace Teens Festival 2025</h4>
                <small>KICC Grounds • 29 Nov 2025</small>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title mb-3">E-Ticket Confirmation</h5>
                <p class="lead mb-1">Ref #: <strong>{{ $ticketId }}</strong></p>
                <p class="mb-3">Amount Paid: <strong>Ksh {{ number_format($amount, 2) }}</strong></p>
                <div class="barcode my-4"></div>
                <a href="#" class="btn btn-success w-100">Download Ticket PDF</a>
            </div>
            <div class="card-footer text-muted text-center">
                Thank you for choosing Pacesetter.
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-vPvD5wQqM5eMFC2J3dhuHi7XNF57l7KF4tB7YTzaPFxfhjXk3oJzA2/4lK96yreJ" crossorigin="anonymous"></script>
</body>
</html> 