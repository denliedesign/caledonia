<div id="footer">
    <div class="bg-dark text-white pb-5 font-syne">
        <div class="container">
            <div class="pt-5">
                <div class="row m-0 p-0">
                    <div class="col-sm-4 mt-3">
                        <p class="lead">CONTACT</p>
                        <ul class="list-group" id="footer-list">
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="navigate"></ion-icon>
                                131 E. Main Street, Suite E, Caledonia, MI 49316
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="call"></ion-icon>
                                <a href="tel:6168911606" style="text-decoration: none">616-891-1606</a>
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="mail"></ion-icon>
                                info@CaledoniaDanceAndMusic.com
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="pencil"></ion-icon>
                                <button type="button" class="text-primary" style="background: none;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;" data-bs-toggle="modal" data-bs-target="#trymodal">Send A Message</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2 mt-3">
                        <p class="lead">SOCIAL</p>
                        <div class="d-flex d-inline">
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-2" href="https://www.facebook.com/caledoniadanceandmusiccenter" target="_blank">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </div>
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-2" href="https://www.instagram.com/caledoniadanceandmusic/" target="_blank">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </div>
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-2" href="https://www.youtube.com/channel/UCvjNDVtwUvSxYH7KVknrQyg/" target="_blank">
                                    <ion-icon name="logo-youtube"></ion-icon>
                                </a>
                            </div>
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-2" href="https://vimeo.com/showcase/7392246" target="_blank">
                                    <ion-icon name="logo-vimeo"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <p class="lead">MORE LINKS</p>
                        <div class="row">
                            <div class="col-sm">
                                <ul class="list-group" id="footer-list">



                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/storytime-with-a-twist">Storytime</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/introduce-a-friend">Introduce a Friend</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/music-lessons">Music Lessons</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul class="list-group" id="footer-list">
                                                                    <li class="list-group-item px-0 border-0">
                                                                        <a class="text-decoration-none txt-blue" href="/dance-teacher-jobs-michigan">Employment</a>
                                                                    </li>
                                    <?php if(auth()->guard()->guest()): ?>
                                        <li class="list-group-item px-0 border-0">
                                            <a class="text-decoration-none txt-blue" href="<?php echo e(route('login')); ?>"><?php echo e(__('Admin')); ?></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="list-group-item px-0 border-0 dropdown">
                                            <a class="text-decoration-none txt-blue" href="<?php echo e(route('logout')); ?>"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom" class="bg-dark text-white-50 text-center pt-3 font-syne">
        © 2023 Caledonia Dance & Music Center
    </div>
    <p id="credit" class="bg-dark text-center pb-3 m-0">
        <a class="text-decoration-none" href="/dance-byron-center"><small class="text-muted">Dance Byron Center</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-studios-byron-center"><small class="text-muted">Dance Studios Byron Center</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-kentwood-mi"><small class="text-muted">Dance Kentwood MI</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-studios-hastings-mi"><small class="text-muted">Dance Studios Hastings MI</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-wayland-mi"><small class="text-muted">Dance Wayland MI</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-lessons-kentwood-mi"><small class="text-muted">Dance Lessons Kentwood MI</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-hastings-mi"><small class="text-muted">Dance Hastings MI</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-classes-wayland-mi"><small class="text-muted">Dance Classes Wayland MI</small></a>
            &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-classes-grand-rapids-mi"><small class="text-muted">Dance Classes Grand Rapids MI</small></a>
            &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/kentwood-dance"><small class="text-muted">Kentwood Dance</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-studios-kentwood-mi"><small class="text-muted">Dance Studios Kentwood</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-studios-grand-rapids"><small class="text-muted">Dance Studios Grand Rapids</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="/dance-teacher-jobs-michigan"><small class="text-muted">Dance Teacher Jobs Michigan</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp;
        <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
    </p>
    <div id="bottom"></div>
</div>
<?php /**PATH C:\Users\Dennis\caledonia\resources\views/footer-lava.blade.php ENDPATH**/ ?>