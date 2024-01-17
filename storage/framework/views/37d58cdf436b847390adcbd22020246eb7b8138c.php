<div class="d-none d-md-block" id="contact-nav">
    <ul class="nav d-flex justify-content-center" id="top-nav" style="width: 100%;">
        <li class="nav-item">
            <a class="nav-link"><ion-icon name="location-outline"></ion-icon> 131 E. Main Street, Suite E, Caledonia, MI 49316</a>
        </li>
        <li class="nav-item">
            <a href="tel:6168911606" class="nav-link"><ion-icon name="call-outline"></ion-icon> 616-891-1606</a>
        </li>
        <li class="nav-item">
            <a href="mailto:info@caledoniadanceandmusic.com" class="nav-link"><ion-icon name="mail-outline"></ion-icon> info@CaledoniaDanceAndMusic.com</a>
        </li><li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/caledoniadanceandmusiccenter" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/caledoniadanceandmusic/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
        </li>
        <li class="nav-item">
            <a href="https://www.youtube.com/channel/UCvjNDVtwUvSxYH7KVknrQyg/" class="nav-link" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
        </li>
        <li class="nav-item">
            <a href="https://vimeo.com/showcase/7392246" class="nav-link" target="_blank"><ion-icon name="logo-vimeo"></ion-icon></a>
        </li>
    </ul>
</div>

<div class="d-none d-md-block">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><img src="/images/cdmc-logo.png" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="main-navigation">
                <ul class="navbar-nav" id="nav-dark-txt">
                    <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
            </div>
        </nav>
    </div>
    <div class="banner-wrap my-3">
        <div class="banner"></div>
    </div>
</div>
<?php /**PATH C:\Users\Dennis\caledonia\resources\views/headers.blade.php ENDPATH**/ ?>