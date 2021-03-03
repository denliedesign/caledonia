@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="camp-schedule">
        <h2 class="text-center">Mini Camps</h2>
        <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&cat1=Camps"></script>
    </div>


{{--    <div class="container my-5">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-8">--}}
{{--                <h2 class="text-center font-weight-bold">Frozen Friends Mini Camp</h2>--}}
{{--                <h4 class="text-center mb-3 lead">Saturday, March 6 <br><span class="badge badge-success mt-2">Ages 4-10*</span></h4>--}}
{{--                <p>--}}
{{--                    Enjoy a magical journey of dance, crafts and characters inspired by Elsa, Anna and Olaf from the hit movie "Frozen"!--}}
{{--                </p>--}}
{{--                <p class="font-weight-bold">--}}
{{--                    Ages 4-7 will attend camp from 9:30am-10:45am--}}
{{--                    <br>Ages 7-10 will attend camp from 11:00am-12:15pm--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    Wear your favorite Anna and Elsa costume!--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    Tuition is $29 per dancer--}}
{{--                </p>--}}
{{--                <small class="text-muted mb-3">*Student must be 4 years old by September 1, 2020.</small>--}}
{{--                <div class="my-3 text-center">--}}
{{--                    <a href="https://app.jackrabbitclass.com/regv2.asp?id=383292" target="_blank"><div class="btn btn-lg btn-pink text-center text-uppercase">Register</div></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 d-flex align-items-center">--}}
{{--                <img src="/images/snowflake.jpg" alt="snowflake" class="img-fluid border-green">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
