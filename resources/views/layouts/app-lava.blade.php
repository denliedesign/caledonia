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

    <title>@yield('title', 'Caledonia Dance & Music Center')</title>

    <meta name="google-site-verification" content="pEj8FQ1at3uraMLV77FgIB99LibvKtfCd2E3Jr8B2Hw" />
    <img src="https://servedby.ipromote.com/ad/?src=pixel_cid&nid=2482&cid=DH3SUICV350&cat=12020" width="1" height="1" border="0" alt="" />
    <script type="text/javascript">
        !function(){function t(){var t=r("utm_content");if(t){var e=new Date;e.setDate(e.getDate()+30),document.cookie=t+";expires="+e.toGMTString()+";path=/"}else if(document.cookie)for(var o=document.cookie.split(/; */),n=0;n<o.length;n++)if(0===o[n].toLowerCase().trim().indexOf("utm_content=")){t=o[n];break}return t}function e(t){try{console.log(t)}catch(e){alert(t)}}function r(t){var e=top.location.search?top.location.search.substring(1):null;if(e)for(var r=e.split("&"),o=0;o<r.length;o++)if(0===r[o].toLowerCase().trim().indexOf(t+"="))return r[o];return null}var o="",n=r("mctest");if(n)e("dnr tag version: 20160125"),o="http://localhost:8080/rip/library/dnr/mcDnrTag.debug.js";else{var a=t(),c="";a&&(c=top.location.search?0<=top.location.search.indexOf("utm_content")?top.location.search:top.location.search+"&"+a:"?"+a,o="https://script.advertiserreports.com/redirector/dnr"+c)}if(o){var i=document.createElement("script");i.src=o,i.type="text/javascript",scriptTag=document.getElementsByTagName("script")[0],scriptTag.parentNode.appendChild(i)}}();
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E0EZP98P9Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E0EZP98P9Q');
    </script>

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Text&family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Staatliches&family=Syne&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Text&family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>


    <!-- Styles -->
    <link rel="stylesheet" href="/css/style-lava.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/script-lava.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/5kctqg5sa09fd8d1o32j7i9xpvwu1wzubt2thxu7k565blzw/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


    <!-- other -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#30393e">
    <meta name="msapplication-TileColor" content="#30393e">
    <meta name="theme-color" content="#30393e">
</head>
<body>

@if(session()->has('message'))
    <div class="alert alert-success mb-0" role="alert">
        <strong>Success</strong> {{ session()->get('message') }}
    </div>
@endif

@include('top')
@include('nav-lava')
@include('contact-modal-2')
@include('fitting-modal')
@yield('content')
@include('footer-lava')

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    tinymce.init({
        selector: '#hub-textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker markdown',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
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
