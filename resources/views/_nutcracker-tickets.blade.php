@php
    $nutcrackerNow = now(config('nutcracker.timezone'));
    $nutcrackerTicketsAvailable = $nutcrackerNow->greaterThanOrEqualTo(
        \Carbon\Carbon::parse(config('nutcracker.tickets_available_at'), config('nutcracker.timezone'))
    );
@endphp

@if($nutcrackerTicketsAvailable)
    <p class="text-center lead">Nutcracker tickets are now available!</p>
@else
    <p class="text-center lead">Nutcracker tickets go on sale Saturday, October 3, 2026 at 12:00pm Eastern.</p>
@endif
<div class="d-flex justify-content-center mb-4">
    <a href="{{ config('nutcracker.ticket_url') }}" target="_blank" rel="noopener" class="btn btn-lg btn-danger fw-bold shadow">{{ $nutcrackerTicketsAvailable ? 'Get Tickets Now' : 'Visit Ticket Sales Page' }}</a>
</div>
