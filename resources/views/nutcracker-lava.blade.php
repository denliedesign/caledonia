@extends('layouts.app-lava')
@section('title', 'Nutcracker | Caledonia Dance & Music Center')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner-nutcracker"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container">
            <div class="d-flex justify-content-center py-4">
                <img src="/images/nutcracker-24.jpg" alt="nutcracker logo" class="img-fluid">
{{--                <img src="/images/logo-ballerinas-in-training.jpg" alt="nutcracker logo" class="img-fluid">--}}
            </div>
            <h2 class="text-center mt-3 font-staat-side pt-5">Nutcracker 2024</h2>
            <p class="text-center my-3" style="font-size: 1.5em;">CDMC Presents our 17th Annual Performance of The Nutcracker, the classic story of a young girl named Clara and a fascinating toy Nutcracker gifted to her by her enchanting godfather Dr. Drosselmeyer.  We invite you to experience the magic this holiday season.
                Performances of The Nutcracker will take place December 14th and 15th at Caledonia’s Duncan Lake Middle School Performing Arts Center.</p>
        <p class="text-center my-3" style="font-size: 1.5em;">
            {{--        A heartfelt thank you to all attendees for making our 15th Annual Nutcracker truly spectacular. Congratulations to our exceptional performers whose talent and dedication brought the magic to life. --}}
            {{--        Mark your calendars for Nutcracker 2024 on Dec 14 and 15--}}
            {{--        – we can't wait to enchant you again!--}}
        </p>
{{--            <p class="text-center mb-1"><small>Tickets go on sale Saturday, October 26th at Noon</small></p>--}}
        <div class="d-flex justify-content-center mb-5">
                    <a href="https://25664.recitalticketing.com/landing.cfm?loc=4" target="_blank"><div class="btn btn-lg btn-danger fw-bold shadow">Get Tickets Now</div></a>
        </div>
        <div class="d-flex justify-content-center">
                    <img src="/images/caledonia-christmas-events.jpg" alt="nutcracker performance flyer" class="img-fluid">
{{--                    <img src="/images/nutcracker-caledonia-2023.jpg" alt="nutcracker performance flyer" class="img-fluid">--}}
            {{--        <img src="/images/ballerinas-in-training.jpg" alt="nutcracker performance flyer" class="img-fluid">--}}
        </div>
        {{--    <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=Nutcracker"></script>--}}
    </div>
    <div class="bg-red py-3">
        <div class="container">
            <div class="">
                <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                    <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-1.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                    <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-2.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                    <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-4.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                </div>
                <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                    <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-5.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                    <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-2021a.jpg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                    <div class="col-sm my-1 d-flex justify-content-center"><img src="/images/nutcracker-2021b.jpeg" style="width: 263px; height: 200px; object-fit: cover; object-position: 50% 0%;" class="rounded shadow"></div>
                </div>
            </div>
        </div>
    </div>


{{--    <div class="bg-white">--}}
{{--        @include('_nutcracker-audition')--}}
{{--    </div>--}}

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
