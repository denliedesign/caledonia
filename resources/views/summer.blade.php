@extends('layouts.app-lava')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner-summer"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="py-5" id="class-schedule">
            <h2 class="text-center text-uppercase font-staat-side">Summer 2026</h2>
            <div class="container">
                <div>
                    <div class="d-flex justify-content-center my-5">
                        <a href="/images/26-summer.pdf" target="_blank">
                            <div class="btn btn-danger shadow">Download PDF</div>
                        </a>
                    </div>
                    <div><img src="/images/26-summer-1.jpg" class="img-fluid" alt="summer graphic"></div>
                    <div><img src="/images/26-summer-2.jpg" class="img-fluid" alt="summer graphic"></div>
                </div>
                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=Summer&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>
                {{--                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=Camps&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>--}}
                <div>
                    <p class="text-center py-0 my-0">Dance Classes Caledonia MI, Dance Classes Grand Rapids, Dance Classes Hastings MI, Dance Classes Wayland MI, Dance Classes Kentwood MI, Dance Classes Byron Center</p>
                </div>
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

{{--    <div class="bg-white">--}}
{{--        <div class="py-5" id="class-schedule">--}}
{{--            <h2 class="text-center text-uppercase font-staat-side">COMING APRIL 1, 2026</h2>--}}
{{--            <p class="text-center" style="font-size: 1.25em;">SPLASH INTO SUMMER AT</p>--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="/images/cdmc-logo.png" class="img-fluid" style="max-width: 257px;" alt="logo">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
