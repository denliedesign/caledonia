<form action="<?php echo e(route('employment.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-row">
        <div class="form-group my-3">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
            <?php if($errors->has('firstName')): ?>
                <div class="invalid-feedback"><?php echo e($errors->first('firstName')); ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group my-3">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
        </div>
    </div>
    <div class="form-group my-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
    </div>
    <div class="form-group my-3">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" required>
    </div>
    <div class="form-row">
        <div class="form-group my-3">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
        </div>
        <div class="form-group my-3">
            <label for="state">State</label>
            <input type="text" class="form-control" name="state" id="state" placeholder="State" required>
        </div>
    </div>
    <div class="form-group my-3">
        <label for="danceStyles">Dance Styles Taught</label>
        <input type="text" class="form-control" name="danceStyles" id="danceStyles" placeholder="" required>
    </div>
    <div class="form-group my-3">
        <label for="story">Tell Us Your Story</label>
        <textarea class="form-control" name="story" id="story" rows="4" required></textarea>
    </div>
    <div class="form-group my-3">
        <label for="additionalInfo">Additional Information</label>
        <textarea class="form-control" name="additionalInfo" id="additionalInfo" rows="4"></textarea>
    </div>
    <div class="form-group my-3">
        <label for="availability">Availability</label>
        <input type="text" class="form-control" name="availability" id="availability" placeholder="" required>
    </div>
    <div class="form-group my-3">
        <label for="resume">Resume</label>
        <input type="file" class="form-control-file" name="resume" id="resume" accept=".pdf,.doc,.docx" required>
    </div>
    <button type="submit" class="btn btn-danger shadow text-uppercase">Submit</button>
</form>
<?php /**PATH C:\Users\Dennis\caledonia\resources\views/employment/create.blade.php ENDPATH**/ ?>