@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

{{--    <div class="my-5" id="class-schedule">--}}
{{--        <h2 class="text-center">School Year Schedule</h2>--}}
{{--        <p class="lead text-center">--}}
{{--            2020/2021 School Season Dance Classes--}}
{{--            <br>--}}
{{--            <small>Class sizes are limited and fill fast</small>--}}
{{--        </p>--}}
{{--        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=2020-2021"></script>--}}
{{--    </div>--}}

    <div class="my-5" id="class-schedule">
        <h2 class="text-center">Summer Schedule</h2>
        <p class="lead text-center">
            2021 Summer Dance Classes
        </p>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a href="/images/summer-2021.jpg" target="_blank">
                        <img src="/images/summer-2021.jpg" alt="summer" class="img-fluid shadow rounded">
                    </a>
                </div>
                <div class="col-sm">
                    <a href="/images/summer-schedule-1.jpg" target="_blank">
                        <img src="/images/summer-schedule-1.jpg" alt="summer schedule" class="img-fluid shadow rounded">
                    </a>
                    <a href="/images/summer-schedule-2.jpg" target="_blank">
                        <img src="/images/summer-schedule-2.jpg" alt="summer schedule 2" class="img-fluid shadow rounded">
                    </a>
                </div>
            </div>
            <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=Summer&hidecols=Gender,Ages,Session"></script>
        </div>
    </div>

@endsection
