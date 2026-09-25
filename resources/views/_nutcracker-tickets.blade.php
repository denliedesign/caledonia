@php
    $nutcrackerNow = now(config('nutcracker.timezone'));
    $nutcrackerTicketsAvailable = $nutcrackerNow->greaterThanOrEqualTo(
        \Carbon\Carbon::parse(config('nutcracker.tickets_available_at'), config('nutcracker.timezone'))
    );
@endphp

@if($nutcrackerTicketsAvailable)
    <p class="text-center lead">Nutcracker tickets are now available!</p>
    <div class="d-flex justify-content-center mb-4">
        <a href="{{ config('nutcracker.ticket_url') }}" target="_blank" rel="noopener" class="btn btn-lg btn-danger fw-bold shadow">Get Tickets Now</a>
    </div>
@else
    <p class="text-center lead">Nutcracker tickets will be available beginning October 3, 2026 at 12:00pm.</p>
@endif
