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
            <h2 class="text-center">Summer Schedule</h2>
            <p class="lead text-center">
                2022 Summer Dance Classes
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <a href="/images/summer-22-final.pdf" target="_blank">
                            <img src="/images/summer-22-a.jpg" alt="summer" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="/images/summer-22-final.pdf" target="_blank">
                            <img src="/images/summer-22-b.jpg" alt="summer schedule 2" class="img-fluid shadow rounded" style="width: 100%; height: auto;">
                        </a>
                    </div>
                </div>
                <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=Summer&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>
            </div>
        </div>
    </div>

@endsection
