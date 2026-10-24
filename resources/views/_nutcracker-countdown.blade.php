@php
    $nutcrackerPromotionEnds = \Carbon\Carbon::parse(config('nutcracker.promotion_ends_at'), config('nutcracker.timezone'));
@endphp

@if(now(config('nutcracker.timezone'))->lessThan($nutcrackerPromotionEnds))
    <section class="nutcracker-countdown text-center py-3" aria-labelledby="nutcracker-countdown-heading">
        <h2 id="nutcracker-countdown-heading" class="font-staat-side mb-2">The magic begins in...</h2>
        <script src="https://widgets.leadconnectorhq.com/cdt/remoteEntry.js" timerId="6abbdd04af364a64b9a2c621" position="center" altText="Countdown Timer" data-v2="true"></script>
    </section>
    <style>
        .nutcracker-countdown img { max-width: 100%; height: auto; }
    </style>
    <script>
        (function () {
            var endsAt = {{ $nutcrackerPromotionEnds->getTimestamp() * 1000 }};
            // Reload at the cutoff to remove all vendor-created graphics as well as the ticket popup.
            function expirePromotion() {
                if (Date.now() >= endsAt) {
                    window.location.reload();
                }
            }
            window.setInterval(expirePromotion, 1000);
            window.addEventListener('pageshow', expirePromotion);
            document.addEventListener('visibilitychange', expirePromotion);
        }());
    </script>
@endif
