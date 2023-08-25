<form action="<?php echo e(route('contact.store')); ?>" method="POST" class="text-dark">
    <input type="hidden" name="my_name" id="my_name" value="">
    <input type="hidden" name="my_title" id="my_title" value="">
    <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="name">Name</label>
        <div class="col-sm-8">
            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required>
        </div>
        <div><?php echo e($errors->first('name')); ?></div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="email">Email</label>
        <div class="col-sm-8">
            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
        </div>
        <div><?php echo e($errors->first('email')); ?></div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="phone">Phone Number</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo e(old('phone')); ?>" required>
        </div>
        <div><?php echo e($errors->first('phone')); ?></div>
    </div>
    <div class="form-group">
        <label class="col-sm m-0 p-0 col-form-label" for="description">What Are You Looking For?</label>
        <div class="col-sm m-0 p-0">
            <textarea class="form-control" name="description" id="description" rows="3"><?php echo e(old('description')); ?></textarea>
        </div>
        <div><?php echo e($errors->first('description')); ?></div>
    </div>
    <?php echo csrf_field(); ?>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-2">Send</button>
    </div>
</form>
<?php /**PATH C:\Users\Dennis\caledonia\resources\views/contact/create.blade.php ENDPATH**/ ?>