<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Dance Classes | Caledonia, MI">
    <meta property="og:description" content="More than just great dancing! At CDMC, we offer one of the most complete dance instruction programs in Michigan and work with students of all ages and abilities.">
    {{--    <meta property="og:image" content="">--}}
    {{--    <meta property="og:url" content="">--}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="description" content="@yield('description', 'From your child’s first class to their graduation performance. CDMC has a class for everyone!')">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="/js/script.js"></script>
    <script src="/js/app.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>@yield('title', 'Caledonia Dance & Music Center')</title>

    <meta name="google-site-verification" content="pEj8FQ1at3uraMLV77FgIB99LibvKtfCd2E3Jr8B2Hw" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E0EZP98P9Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E0EZP98P9Q');
    </script>

    <img src="https://servedby.ipromote.com/ad/?src=pixel_cid&nid=2482&cid=DH3SUICV350&cat=12020" width="1" height="1" border="0" alt="" />
    <script type="text/javascript">
        !function(){function t(){var t=r("utm_content");if(t){var e=new Date;e.setDate(e.getDate()+30),document.cookie=t+";expires="+e.toGMTString()+";path=/"}else if(document.cookie)for(var o=document.cookie.split(/; */),n=0;n<o.length;n++)if(0===o[n].toLowerCase().trim().indexOf("utm_content=")){t=o[n];break}return t}function e(t){try{console.log(t)}catch(e){alert(t)}}function r(t){var e=top.location.search?top.location.search.substring(1):null;if(e)for(var r=e.split("&"),o=0;o<r.length;o++)if(0===r[o].toLowerCase().trim().indexOf(t+"="))return r[o];return null}var o="",n=r("mctest");if(n)e("dnr tag version: 20160125"),o="http://localhost:8080/rip/library/dnr/mcDnrTag.debug.js";else{var a=t(),c="";a&&(c=top.location.search?0<=top.location.search.indexOf("utm_content")?top.location.search:top.location.search+"&"+a:"?"+a,o="https://script.advertiserreports.com/redirector/dnr"+c)}if(o){var i=document.createElement("script");i.src=o,i.type="text/javascript",scriptTag=document.getElementsByTagName("script")[0],scriptTag.parentNode.appendChild(i)}}();
    </script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

</head>
<body>

<!--to do: remove app layout so that there's no nav and it becomes a sole landing page. Then spice it up! -->

{{--<div class="banner-wrap">--}}
{{--    <div class="banner"></div>--}}
{{--</div>--}}

<div id="top" class="bg-dark py-2">
    <ul class="nav justify-content-center">
        <li class="nav-item text-white-50 mx-4">
            <ion-icon name="navigate"></ion-icon>
            131 E. Main Street, Suite E, Caledonia, MI 49316
        </li>
        <li class="nav-item text-white-50 mx-4">
            <ion-icon name="call"></ion-icon>
            <a href="tel:6168911606" style="text-decoration: none; color: inherit;">616-891-1606</a>
        </li>
        <li class="nav-item text-white-50 mx-4">
            <ion-icon name="mail"></ion-icon>
            info@CaledoniaDanceAndMusic.com
        </li>
    </ul>
</div>

<div id="checklist-bg"></div>

<div class="bg-white d-flex justify-content-center pt-5">
    <img src="/images/cdmc-logo.png" alt="" style="max-width: 257px;">
</div>

<div class="bg-white pt-1">
    <div class="container">
        <div class="pb-5" id="class-schedule">
            <h2 class="text-center pt-3">Caledonia Dance & Music Center</h2>
            <div class="text-lowercase text-center fw-bold d-none d-md-block" style="font-size: 2.75em;">We <div class="d-inline" id="statement"></div> kids through music and dance</div>
            <p class="text-center pt-3" style="font-size: 1.25em;">
                From your child’s first class to their graduation performance, CDMC has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, CDMC is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
            </p>
            <div class="container">
                <div class="d-flex justify-content-center py-3">
                    @include('refer-modal')
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-white pb-5" id="class-categories">
    <div class="container pb-5">
        <h2 class="text-center pt-5 font-weight-bold" style="font-family: 'Staatliches', cursive; font-size: 4em;">Dance Classes</h2>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <div class="col-sm mt-4">
                <img src="/images/preschool.jpg" alt="preschool" class="img-fluid shadow rounded" style="height: 250px; object-fit: cover; object-position: 15% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Preschool Classes</div>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/early-elementary.JPG" alt="elementary" class="img-fluid shadow rounded" style="height: 250px; object-fit: cover; object-position: 15% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Early Elementary School</div>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/graded-levels.JPG" alt="graded" class="img-fluid shadow rounded" style="height: 250px; object-fit: cover; object-position: 15% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Graded Levels</div>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/acro-2.JPG" alt="acro" class="img-fluid shadow rounded" style="height: 250px; object-fit: cover; object-position: 15% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Acro</div>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/performance-group-new.png" alt="performing groups" class="img-fluid shadow rounded" style="height: 250px; object-fit: cover; object-position: 15% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Performance Groups</div>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/nutcracker.jpeg" alt="nutcracker" class="img-fluid shadow rounded" style="height: 250px; object-fit: cover; object-position: 15% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Nutcracker</div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <h2 class="text-center pt-5 font-weight-bold" style="font-family: 'Staatliches', cursive; font-size: 4em;">Music Lessons</h2>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <div class="col-sm mt-4">
                <img src="/images/piano.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Piano</div>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/guitar.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Guitar</div>
            </div>
            <div class="col-sm mt-4">
                <img src="/images/voice.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 238px; object-fit: cover; object-position: -20% 0; width: 100%;">
                <div class="text-center mt-2" style="width: 100%; font-size: 1.25em;">Voice</div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container">
        <h2 class="text-center font-weight-bold" style="font-family: 'Staatliches', cursive; font-size: 4em;">keeping your dancer happy, healthy, and safe</h2>
        <div class="mb-4">
            <div class="d-flex justify-content-center py-3">
                @include('refer-modal')
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="d-flex justify-content-center my-3">
                    <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid" style="height: 180px;">
                </div>
                <h2 class="text-center font-weight-bold" style="font-family: 'Staatliches', cursive; font-size: 2.5em;">More Than Just Great Dancing</h2>
                <p class="text-center" style="font-size: 1.25em;">
                    MTJGD is a licensed affiliation of dance studios that subscribe to a high standard of dance instruction and management practices. We are united in the belief that dance has the power to change lives.
                </p>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center my-3">
                    <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="height: 180px;">
                </div>
                <h2 class="text-center font-weight-bold" style="font-family: 'Staatliches', cursive; font-size: 2.5em;">Youth Protection Advocates in Dance</h2>
                <p class="text-center" style="font-size: 1.25em;">
                    To earn the designation, studios must complete training in CPR, First Aid, dance education and safety injury prevention, emergency preparedness, abuse awareness and prevention, dancer wellness and development, social media safety, nutrition and disordered eating, bullying and conflict resolution.
                </p>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center my-3">
                    <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="height: 180px; filter: invert(1);">
                </div>
                <h2 class="text-center font-weight-bold" style="font-family: 'Staatliches', cursive; font-size: 2.5em;">Safer Studio</h2>
                <p class="text-center" style="font-size: 1.25em;">
                    Wellness Checks For Staff
                    <br>Enhanced Cleaning Procedures
                    <br>Social Distancing Practices
                    <br>Touch-less Payment Options
                    <br>Gradual Re-Opening
                    <br>Continuous Communication
                </p>
            </div>
        </div>
    </div>
</div>

<div class="text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <div class="d-flex justify-content-center">
                    <img src="/images/french.png" alt="french" style="transform: scale(1.25);">
                </div>
                <p class="text-center mb-0 mt-3" style="font-family: 'Pacifico', cursive; font-size: 1.25em; filter: opacity(0.8);">
                    Jennifer French
                </p>
            </div>
            <div class="col-sm-6">
                <div class="mb-1" style="color: gold;">
                    <ion-icon name="star" style="font-size: 2em;"></ion-icon>
                    <ion-icon name="star" style="font-size: 2em;"></ion-icon>
                    <ion-icon name="star" style="font-size: 2em;"></ion-icon>
                    <ion-icon name="star" style="font-size: 2em;"></ion-icon>
                    <ion-icon name="star" style="font-size: 2em;"></ion-icon>
                </div>
                <p style="font-size: 1.5em;">
                    LOVE this studio! High quality instruction and great teachers and staff! No better dance studio in this area!! We love CDMC!!
                </p>
            </div>
{{--            <div class="col-sm-1"></div>--}}
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <img src="/images/caledonia-dance-class-referral.jpg" alt="dancers stand together" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                <div>
                    <h2 class="pt-5 font-weight-bold" style="font-family: 'Staatliches', cursive; font-size: 4em;">See What Dance Can Do For Your Child</h2>
                    @include('refer-modal')
                </div>
            </div>
        </div>
    </div>
</div>

<div id="top" class="bg-dark py-3">
    <ul class="nav justify-content-center">
        <li class="nav-item text-white-50 mx-4">
            <ion-icon name="navigate"></ion-icon>
            131 E. Main Street, Suite E, Caledonia, MI 49316
        </li>
        <li class="nav-item text-white-50 mx-4">
            <ion-icon name="call"></ion-icon>
            <a href="tel:6168911606" style="text-decoration: none; color: inherit;">616-891-1606</a>
        </li>
        <li class="nav-item text-white-50 mx-4">
            <ion-icon name="mail"></ion-icon>
            info@CaledoniaDanceAndMusic.com
        </li>
        <li class="nav-item text-white-50 mx-4">
            © 2022 Caledonia Dance & Music Center
        </li>
    </ul>
</div>

<!--to do: remove app layout so that there's no nav and it becomes a sole landing page. Then spice it up! -->



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    tinymce.init({
        selector: '#update-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#post-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#text-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });
</script>

</body>
</html>


