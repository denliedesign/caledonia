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
        <div class="container py-5" id="camp-schedule">
            <h2 class="text-center font-staat-side">Camps</h2>
            <div class="d-flex justify-content-center py-4">

                    <img src="/images/camps.jpeg" alt="mini camp pics" class="img-fluid">

            </div>
            <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=Camps&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>

            









        </div>
    </div>

    <style>
        .jr-reg-col a {
            background: #3d1951;
            color: white;
            padding: 4px 8px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-lava', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dennis\caledonia\resources\views/camps.blade.php ENDPATH**/ ?>