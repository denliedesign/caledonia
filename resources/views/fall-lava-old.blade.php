@extends('layouts.app-lava')
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
            <h2 class="text-center text-uppercase font-staat-side">Explore Open 2024 Classes - Spaces Limited</h2>
{{--            <p class="lead-side text-center">--}}
{{--                Fall 2023-2024--}}
{{--            </p>--}}
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col my-2">
{{--                        <a target="_blank">--}}
{{--                            <a href="/images/fall-23.pdf" target="_blank">--}}
                                <img src="/images/fall-23-1.jpg" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
{{--                            </a>--}}
{{--                        </a>--}}
                    </div>
                    <div class="col my-2">
{{--                        <a target="_blank">--}}
{{--                            <a href="/images/fall-23.pdf" target="_blank">--}}
                                <img src="/images/fall-23-2.jpg" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
{{--                            </a>--}}
{{--                        </a>--}}
                    </div>
                    <div class="col my-2">
{{--                        <a target="_blank">--}}
{{--                            <a href="/images/fall-23.pdf" target="_blank">--}}
                                <img src="/images/fall-23-3.jpg" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
{{--                            </a>--}}
{{--                        </a>--}}
                    </div>
                    <div class="col my-2">
{{--                        <a target="_blank">--}}
{{--                            <a href="/images/fall-23.pdf" target="_blank">--}}
                                <img src="/images/fall-23-4-b.jpg" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
{{--                            </a>--}}
{{--                        </a>--}}
                    </div>
{{--                    <div class="col my-2">--}}
{{--                        <a href="/images/fall-2022-2023.pdf" target="_blank">--}}
{{--                            <img src="/images/fall-2nd-3rd.png" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col my-2">--}}
{{--                        <a href="/images/fall-2022-2023.pdf" target="_blank">--}}
{{--                            <img src="/images/fall-graded-b.png" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col my-2">--}}
{{--                        <img src="/images/adult-dance-2022c.png" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">--}}
{{--                    </div>--}}
{{--                    <div class="col my-2"></div>--}}
                </div>
                <div class="my-2">
                    <img src="/images/23-adult.jpg" alt="adult classes" class="img-fluid">
                </div>
                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=2023-2024&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>
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

@endsection
