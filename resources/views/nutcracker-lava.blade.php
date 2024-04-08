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
        @include('_nutcracker-audition')
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

@endsection
