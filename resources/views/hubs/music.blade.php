@extends('layouts.app-lava')

@section('title', 'Spring Recital Hub | Caledonia Dance & Music Center')

@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner-hub"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container pb-5">
            <h3 class="text-center mt-3 font-staat" style="font-size: 100px; line-height: 0.9em;">Music</h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                <div class="col"><a href="/images/coming-soon.png" target="_blank"><img src="/images/recital/music-rehearsal.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/ticket-faq.png" target="_blank"><img src="/images/recital/recital-ticket-faqs.png" alt="" class="img-fluid"></a></div>
            </div>

            <div class="mt-5">
                <a href="/hubs"><img src="/images/hub-btn.png" alt="button" style="height: 100px; width: auto;"></a>
            </div>

        </div>
    </div>

@endsection
