<!-- Modal -->
<div class="modal fade" id="trymodal" tabindex="-1" role="dialog" aria-labelledby="trymodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-ivory text-white">
            <div>
                <img src="images/ready-to-dance.jpg" alt="" style="width: 100%; height: 400px; object-fit: cover; object-position: 0 0;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="p-2" style="font-size: 1.25em;">&times;</span>
                </button>
            </div>
            <h5 class="modal-title mt-2 text-center text-dark" id="trymodalLabel">Contact Us</h5>
            {{--                <small class="text-muted text-center">Limited availability. For a short time only.</small>--}}
            <div class="modal-body text-left mx-2">
                @include('contact.create')
            </div>
        </div>
    </div>
</div>
