@extends('layouts.app-lava')
@section('title', '')
@section('description', '')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="py-5" id="class-schedule">
            <h2 class="text-center text-uppercase font-staat-side">Fall 2025-2026</h2>

            <div class="container">
                <p class="lead-side text-center">
                    Don't miss your chance for your preferred classes, days and times. Register now!
                    {{--                            Registration opens June 25th and 28th. Check back soon!--}}
                </p>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="p-2"><img src="/images/25-schedule-1.png" class="img-fluid" alt=""></div>
                    <div class="p-2"><img src="/images/25-schedule-2.png" class="img-fluid" alt=""></div>
                    <div class="p-2"><img src="/images/25-schedule-3b.jpg" class="img-fluid" alt=""></div>
                    <div class="p-2"><img src="/images/25-schedule-4.png" class="img-fluid" alt=""></div>
                </div>
{{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">--}}
{{--                    <div class="col my-2"><img src="/images/24-classes-1.jpg" alt="classes" class="img-fluid"></div>--}}
{{--                    <div class="col my-2"><img src="/images/24-classes-2.jpg" alt="classes" class="img-fluid"></div>--}}
{{--                    <div class="col my-2"><img src="/images/24-classes-3.jpg" alt="classes" class="img-fluid"></div>--}}
{{--                    <div class="col my-2"><img src="/images/24-classes-4.jpg" alt="classes" class="img-fluid"></div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <img src="/images/adult-24-25.png" alt="adult classes" class="img-fluid">--}}
{{--                </div>--}}
                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=2025-2026&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>
            </div>
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

@endsection
