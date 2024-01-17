<?php $__env->startSection('content'); ?>

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center my-3">
                        <a href="https://www.google.com/url?q=https%3A%2F%2F25664.recitalticketing.com%2Fr%2Fevents%2F&sa=D&sntz=1&usg=AOvVaw07qZoGhNi91FRosc3Pyr88" target="_blank" class="nav-link text-uppercase">
                            <div class="btn btn-outline-danger btn-lg shadow">Order Recital Tickets HERE!</div>
                        </a>
                    </div>

                    <!-- ///////////////////////////////PASSWORD PROTECTION/////////////////////////// -->
                    <!-- ///////////////////////////////PASSWORD PROTECTION/////////////////////////// -->
                    <!-- ///////////////////////////////PASSWORD PROTECTION/////////////////////////// -->
                    <div class="py-5">
                        <h2 class="text-center mt-3 font-staat-side">Access Recital Hub</h2>

                        <?php echo e($code = ""); ?>


                        <?php if(isset($_POST['code'])): ?>
                            <div style="display: none;">
                                <?php echo e($code = $_POST['code']); ?>

                            </div>
                        <?php endif; ?>

                        <?php if($code == 'CDMC2023' || $code == 'cdmc2023'): ?>
                            <?php echo $__env->make('connected', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            <div style="height: 100%;" class="d-flex align-items-center justify-content-center text-center">
                                <form method="post" action="recital" style="border: 1px solid silver; border-radius: 10px;" class="p-5">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label for="code">Password</label>
                                            <input type="password" class="form-control my-2" id="code" name="code" aria-describedby="code">
                                        </div>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger shadow">Submit</button>
                                    </div>
                                </form>
                            </div>
                        <?php endif; ?>

                    </div>
                    <!-- /////////////////////////END PASSWORD PROTECTION/////////////////////////////////////////// -->
                    <!-- /////////////////////////END PASSWORD PROTECTION/////////////////////////////////////////// -->
                    <!-- /////////////////////////END PASSWORD PROTECTION/////////////////////////////////////////// -->
                    <!-- /////////////////////////END PASSWORD PROTECTION/////////////////////////////////////////// -->
                </div>
                <div class="col-sm">
                    <div class="py-5">
                        <h2 class="text-center mt-3 font-staat-side">Recital Info</h2>
                        <div class="d-flex justify-content-center">
                            
                            <img src="/images/recital-23.jpg" alt="recital postcard" class="img-fluid">
                        </div>
                        
                        
                        
                        <div class="container">
                            
                            
                            
                            
                            
                            
                            
                            


                            <div class="text-center mb-5">
                                <p style="font-size: 1.25em;">
                                    Venue: Peter V. Delille Fine Arts Center at Caledonia High School
                                    <br>Dance Recitals | June 12-15, 2023
                                    <br>Music Recital | June 20, 2023
                                    
                                    
                                    
                                    
                                    
                                </p>
                            </div>

                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-lava', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dennis\caledonia\resources\views/recital.blade.php ENDPATH**/ ?>