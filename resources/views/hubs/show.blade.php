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
            <div class="d-flex justify-content-center">
                <img src="{{ asset('/storage/' . $hub->hubImage) }}" alt="" class="img-fluid" style="max-width: 400px; height: auto;">
            </div>
            <h3 class="text-center mt-3 font-staat" style="font-size: 100px; line-height: 0.9em;">{{ $hub->hubTitle }}</h3>
            <p class="">{!! $hub->hubContent !!}</p>
            @if($hub->hubPdf)
                <div class="pdf-viewer my-5">
                    <iframe src="{{ asset('storage/' . $hub->hubPdf) }}" width="100%" height="600px"></iframe>
                </div>
            @endif

            <div class="mt-5">
                <a href="/hubs"><button class="btn btn-blue btn-lg text-white">Back To The Hub</button></a>
            </div>

        </div>
    </div>

@endsection
