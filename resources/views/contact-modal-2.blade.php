<!-- Modal -->
<div class="modal fade" id="trymodal" tabindex="-1" role="dialog" aria-labelledby="trymodalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content bg-ivory text-white">
            <div style="position: relative;">
                <img src="images/ready-to-dance.jpg" alt="" style="width: 100%; height: min(320px, 38vh); object-fit: cover; object-position: 0 0;">
                <div style="position: absolute; top: 12px; right: 12px;">
                    <button type="button" class="btn btn-dark rounded-circle shadow d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close contact form" style="width: 44px; height: 44px; font-size: 1.5rem; line-height: 1;">
                        &times;
                    </button>
                </div>
            </div>
            <h5 class="modal-title mt-2 text-center text-dark" id="trymodalLabel">Contact</h5>
            <p class="text-center text-dark px-3">
                <a href="tel:6168911606" style="text-decoration: none;" class="fw-bold">Please call us at 616-891-1606</a>
                <br>or fill out the form below to send us an email
            </p>
            {{--                <small class="text-muted text-center">Limited availability. For a short time only.</small>--}}
            <div class="modal-body text-left mx-2 pt-0">
                @include('enrollio.contact-form', ['iframeId' => 'modal-m3F6JD6sAhCDVbS2iv4M'])
            </div>
        </div>
    </div>
</div>
