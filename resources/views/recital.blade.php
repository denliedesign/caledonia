@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="py-5">

            <h2 class="text-center text-uppercase">Recital</h2>
            <div class="d-flex justify-content-center">
                <img src="/images/recital-logo.png" alt="recital logo" class="img-fluid" style="width: 400px; height: auto;">
            </div>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-sm">
                        <img src="/images/recital-postcard-1.jpg" alt="recital postcard" class="img-fluid">
                    </div>
                    <div class="col-sm">
                        <img src="/images/recital-postcard-2.jpg" alt="recital postcard 2" class="img-fluid">
                    </div>
                </div>

                <div class="text-center mt-5">
                    <p style="font-size: 1.25em;">
                        More info at the <a style="font-size: inherit;" href="https://sites.google.com/caledoniadanceandmusic.com/recitalinfo" target="_blank">CDMC Recital Hub</a>
                    </p>
                </div>

                <div class="text-center mb-5">
                    <p style="font-size: 1.25em;">
                        Venue: Peter V. Delille Fine Arts Center at Caledonia High School
                        <br>Recital #1 June 13, 2022 | 7:00pm
                        <br>Recital #2 June 14, 2022 | 7:00pm
                        <br>Recital #3 June 15, 2022 | 7:00pm
                        <br>Recital #4 June 16, 2022 | 6:30pm
                        <br>Tickets go on sale May 7
                    </p>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="https://25664.recitalticketing.com/" class="btn-opacity btn-dive" target="_blank"><div class="shadow btn btn-lg btn-kapa-summer btn-family">Buy Tickets</div></a>
                </div>
            </div>
        </div>
    </div>

@endsection
