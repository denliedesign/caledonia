@extends('layouts.app-lava')

@section('title', 'Spring Recital Hub | Caledonia Dance & Music Center')

@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container pb-5">
            <h3 class="text-center mt-3 font-staat" style="font-size: 100px; line-height: 0.9em;">Dance</h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                <div class="col"><a href="/images/recital-1-lineup.pdf"><img src="/images/recital-1-lineup.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-2-lineup.pdf"><img src="/images/recital-2-lineup.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-3-lineup.pdf"><img src="/images/recital-3-lineup.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-ticket-faqs.pdf"><img src="/images/recital-ticket-faqs.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/how-to-be-stage-ready.pdf"><img src="/images/how-to-be-stage-ready.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-lookbook.pdf"><img src="/images/recital-lookbook.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a target="_blank" href="https://forms.gle/twyWPqURosGor9Jx9"><img src="/images/recital-prep-shop-link.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-day-faqs.pdf"><img src="/images/recital-day-faqs.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a target="_blank" href="https://forms.gle/avVLNEi4PpCRR1uGA"><img src="/images/recital-swag.png" alt="" class="img-fluid"></a></div>
            </div>

            <div class="mt-5">
                <a href="/hubs"><img src="/images/hub-btn.png" alt="button" style="height: 100px; width: auto;"></a>
            </div>

        </div>
    </div>

@endsection
