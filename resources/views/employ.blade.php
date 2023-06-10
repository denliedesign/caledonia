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
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <img src="/images/staff-cdmc.jpg" alt="alumni logo" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div>
                        <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">Employment</h3>
                        <div class="font-syne" style="font-size: 22px;">
                            <p class="lead fw-bold">CDMC is growing!</p>
                            <p class="fw-bold">Find employment opportunities with us</p>
                            At Caledonia Dance & Music Center we are always looking for positive, enthusiastic, qualified instructors.
                            <br><br>
                            {{--                        Employment for teaching positions available include:--}}
                            {{--                        <br>--}}
                            {{--                        <ul class="job-list">--}}
                            {{--                            <li>Preschool & Beginning Level Classes</li>--}}
                            {{--                            <li>Intermediate & Advanced Classes</li>--}}
                            {{--                            <li>Ballet, Pointe, Tap & Jazz Classes</li>--}}
                            {{--                            <li>Contemporary, Modern & Hip Hop Classes</li>--}}
                            {{--                            <li>Specialty Classes</li>--}}
                            {{--                            <li>Boy’s Only Classes</li>--}}
                            {{--                            <li>Group Fitness</li>--}}
                            {{--                            <li>Ballroom and Latin</li>--}}
                            {{--                        </ul>--}}
                            {{--                        <br>--}}
                            If you LOVE dance and working with children, please tell us a bit about yourself below!
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container pb-5">
{{--            <h1>Registration Form</h1>--}}

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm py-3 px-5 rounded shadow" style="background: #F0EAEB;">
                @include('employment.create')
            </div>
            <div class="col-sm-2"></div>
        </div>


        {{--        <form>--}}
{{--            <div class="mb-3">--}}
{{--                <label for="exampleInputName1" class="form-label">Name</label>--}}
{{--                <div class="row g-3 align-items-center">--}}
{{--                    <div class="col-auto">--}}
{{--                        <input type="text" class="form-control" id="exampleInputName1" placeholder="First Name">--}}
{{--                    </div>--}}
{{--                    <div class="col-auto">--}}
{{--                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Last Name">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <label for="exampleInputEmail1" class="form-label">Email address</label>--}}
{{--                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--            </div>--}}
{{--            <div class="mb-3 form-check">--}}
{{--                <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}
    </div>

@endsection
