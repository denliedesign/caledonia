@extends('layouts.app-lava')
@section('title', 'Nutcracker | Caledonia Dance & Music Center')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner-nutcracker"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <h2 class="text-center font-staat-side">Nutcracker 2026</h2>
            @include('_nutcracker-tickets')
            <div class="text-center mt-4">
                <a href="/documents/nutcracker-2026-poster.pdf" target="_blank" rel="noopener" aria-label="Open the Nutcracker 2026 poster PDF">
                    <img src="/images/nutcracker-2026-poster.jpg" alt="The Nutcracker: December 12, 2026 at 12:00pm and 5:00pm, and December 13 at 3:00pm. Duncan Lake Middle School PAC, 9757 Duncan Lake Avenue, Caledonia, Michigan." class="img-fluid" style="width: 100%; max-width: 850px; height: auto;">
                </a>
            </div>
        </div>
    </div>

<div class="bg-red py-3">
    <div class="container">
        <div class="">
            <div class="row p-0 m-0 d-flex justify-content-center align-items-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-1.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-2.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-4.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-5.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker/nutcracker-ballet-grand-rapids.png" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-2021b.jpeg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
            </div>
        </div>
    </div>
</div>

@endsection
