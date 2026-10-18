@php
    $nutcrackerPromotionEnds = \Carbon\Carbon::parse(config('nutcracker.promotion_ends_at'), config('nutcracker.timezone'));
@endphp

@if(now(config('nutcracker.timezone'))->lessThan($nutcrackerPromotionEnds))
    <script src="https://widgets.leadconnectorhq.com/cdt/remoteEntry.js" timerId="6abbdd04af364a64b9a2c621" position="center" altText="Countdown Timer" data-v2="true"></script>
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
