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
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <!-- ///////////////////////////////PASSWORD PROTECTION/////////////////////////// -->
                    <!-- ///////////////////////////////PASSWORD PROTECTION/////////////////////////// -->
                    <!-- ///////////////////////////////PASSWORD PROTECTION/////////////////////////// -->
                    <div class="py-5">
                        <h2 class="text-center mt-3 font-staat-side">Access Recital Hub</h2>

                        {{ $code = "" }}

                        @if(isset($_POST['code']))
                            <div style="display: none;">
                                {{ $code = $_POST['code'] }}
                            </div>
                        @endif

                        @if($code == 'CDMC2023' || $code == 'cdmc2023')
                            @include('connected')
                        @else
                            <div style="height: 100%;" class="d-flex align-items-center justify-content-center text-center">
                                <form method="post" action="recital" style="border: 1px solid silver; border-radius: 10px;" class="p-5">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label for="code">Password</label>
                                            <input type="password" class="form-control my-2" id="code" name="code" aria-describedby="code">
                                        </div>
                                        @csrf
                                        <button type="submit" class="btn btn-danger shadow">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @endif

                    </div>
                    <!-- /////////////////////////END PASSWORD PROTECTION/////////////////////////////////////////// -->
                    <!-- /////////////////////////END PASSWORD PROTECTION/////////////////////////////////////////// -->
                    <!-- /////////////////////////END PASSWORD PROTECTION/////////////////////////////////////////// -->
                    <!-- /////////////////////////END PASSWORD PROTECTION/////////////////////////////////////////// -->
                </div>
                <div class="col-sm">
                    <div class="py-5">
                        <h2 class="text-center mt-3 font-staat-side">Recital Info</h2>
                        <div class="d-flex justify-content-center">
                            {{--                <img src="/images/recital-logo.png" alt="recital logo" class="img-fluid" style="width: 400px; height: auto;">--}}
                            <img src="/images/recital-23.jpg" alt="recital postcard" class="img-fluid">
                        </div>
                        {{--            <div class="text-center my-3">--}}
                        {{--                <a href="/images/recital-program-2022-final.pdf" target="_blank">Click here for Recital Program</a>--}}
                        {{--            </div>--}}
                        <div class="container">
                            {{--                <div class="row mb-3">--}}
                            {{--                    <div class="col-sm">--}}
                            {{--                        <img src="/images/recital-postcard-1.jpg" alt="recital postcard" class="img-fluid">--}}
                            {{--                    </div>--}}
                            {{--                    <div class="col-sm">--}}
                            {{--                        <img src="/images/recital-postcard-2.jpg" alt="recital postcard 2" class="img-fluid">--}}
                            {{--                    </div>--}}
                            {{--                </div>--}}


                            <div class="text-center mb-5">
                                <p style="font-size: 1.25em;">
                                    Venue: Peter V. Delille Fine Arts Center at Caledonia High School
                                    <br>Dance Recitals | June 12-15, 2023
                                    <br>Music Recital | June 20, 2023
                                    {{--                        <br>Recital #1 June 13, 2022 | 7:00pm--}}
                                    {{--                        <br>Recital #2 June 14, 2022 | 7:00pm--}}
                                    {{--                        <br>Recital #3 June 15, 2022 | 7:00pm--}}
                                    {{--                        <br>Recital #4 June 16, 2022 | 6:30pm--}}
                                    {{--                        <br>Music Recital June 21, 2022 | 6:30pm--}}
                                </p>
                            </div>

                            {{--                <div class="d-flex justify-content-center">--}}
                            {{--                    <a href="https://25664.recitalticketing.com/" class="btn-opacity btn-dive" target="_blank"><div class="shadow btn btn-lg btn-kapa-summer btn-family">Buy Tickets</div></a>--}}
                            {{--                </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
