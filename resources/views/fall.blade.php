@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="bg-white">

        {{--    <div class="my-5" id="class-schedule">--}}
        {{--        <h2 class="text-center">School Year Schedule</h2>--}}
        {{--        <p class="lead text-center">--}}
        {{--            2020/2021 School Season Dance Classes--}}
        {{--            <br>--}}
        {{--            <small>Class sizes are limited and fill fast</small>--}}
        {{--        </p>--}}
        {{--        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=2020-2021"></script>--}}
        {{--    </div>--}}

        <div class="py-5" id="class-schedule">
            <h2 class="text-center text-uppercase">Classes</h2>
            <p class="lead text-center">
                2022-2023
            </p>
            <div class="container">
{{--                <div class="row">--}}
{{--                    <div class="col-sm">--}}
{{--                        <a href="/images/summer-2021.jpg" target="_blank">--}}
{{--                            <img src="/images/summer-2021.jpg" alt="summer" class="img-fluid shadow rounded" style="width: 100%; height: auto;">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <a href="/images/summer-schedule-1.jpg" target="_blank">--}}
{{--                            <img src="/images/summer-schedule-1.jpg" alt="summer schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">--}}
{{--                        </a>--}}
{{--                        <a href="/images/summer-schedule-2.jpg" target="_blank">--}}
{{--                            <img src="/images/summer-schedule-2.jpg" alt="summer schedule 2" class="img-fluid shadow rounded" style="width: 100%; height: auto;">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col my-2">
                        <a href="/images/fall-2022-2023.pdf" target="_blank">
                            <img src="/images/fall-2-4-b.png" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
                        </a>
                    </div>
                    <div class="col my-2">
                        <a href="/images/fall-2022-2023.pdf" target="_blank">
                            <img src="/images/fall-k-1st.png" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
                        </a>
                    </div>
                    <div class="col my-2">
                        <a href="/images/fall-2022-2023.pdf" target="_blank">
                            <img src="/images/fall-2nd-3rd.png" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
                        </a>
                    </div>
                    <div class="col my-2">
                        <a href="/images/fall-2022-2023.pdf" target="_blank">
                            <img src="/images/fall-graded-b.png" alt="fall schedule" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
                        </a>
                    </div>
                </div>
                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=2022-2023&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>
            </div>
        </div>
    </div>

@endsection
