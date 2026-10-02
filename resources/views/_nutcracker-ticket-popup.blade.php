@php
    $nutcrackerNow = now(config('nutcracker.timezone'));
    $nutcrackerPopupVisible = $nutcrackerNow->greaterThanOrEqualTo(
        \Carbon\Carbon::parse(config('nutcracker.popup_starts_at'), config('nutcracker.timezone'))
    );
    $nutcrackerTicketsAvailable = $nutcrackerNow->greaterThanOrEqualTo(
        \Carbon\Carbon::parse(config('nutcracker.tickets_available_at'), config('nutcracker.timezone'))
    );
@endphp

@if($nutcrackerPopupVisible)
    <div id="side-trial" class="season-popup offcanvas offcanvas-end show shadow-lg" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" aria-labelledby="nutcrackerPopupLabel">
        <div class="offcanvas-header season-popup-header">
            <h2 class="season-popup-title font-staat-side" id="nutcrackerPopupLabel">Nutcracker Tickets</h2>
            <button class="season-popup-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close Nutcracker tickets popup">&times;</button>
        </div>
        <div class="offcanvas-body season-popup-body">
            <div class="season-popup-image-wrap">
                <img src="/images/nutcracker.jpeg" alt="The Nutcracker at Caledonia Dance &amp; Music Center" class="season-popup-image">
            </div>
            @if($nutcrackerTicketsAvailable)
                <p class="season-popup-copy">Celebrate the season with The Nutcracker, December 12 &amp; 13. Tickets are now available!</p>
                <div class="season-popup-actions">
                    <a href="{{ config('nutcracker.ticket_url') }}" target="_blank" rel="noopener" class="btn btn-danger fw-bold shadow-sm season-popup-button">Get Tickets Now</a>
                </div>
            @else
                <p class="season-popup-copy">Nutcracker tickets go on sale Saturday, October 3, 2026 at 12:00pm Eastern.</p>
                <div class="season-popup-actions">
                    <a href="{{ config('nutcracker.ticket_url') }}" target="_blank" rel="noopener" class="btn btn-danger fw-bold shadow-sm season-popup-button">Visit Ticket Sales Page</a>
                </div>
            @endif
        </div>
    </div>
@endif
