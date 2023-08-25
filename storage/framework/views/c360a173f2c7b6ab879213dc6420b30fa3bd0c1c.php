<!-- Modal -->
<div class="modal fade" id="trymodal" tabindex="-1" role="dialog" aria-labelledby="trymodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-ivory text-white">
            <div style="position: relative;">
                <img src="images/ready-to-dance.jpg" alt="" style="width: 100%; height: 400px; object-fit: cover; object-position: 0 0;">
                <div style="position: absolute; top: 0; right: 0;">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
            </div>
            <h5 class="modal-title mt-2 text-center text-dark" id="trymodalLabel">Contact</h5>
            <p class="text-center text-dark">
                <a href="tel:6168911606" style="text-decoration: none;" class="fw-bold">Please call us at 616-891-1606</a>
                <br>or fill out the form below to send us an email
            </p>
            
            <div class="modal-body text-left mx-2">
                <?php echo $__env->make('contact.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Dennis\caledonia\resources\views/contact-modal-2.blade.php ENDPATH**/ ?>