@extends('layouts.app-lava')

@section('title', 'Spring Recital Hub | Caledonia Dance & Music Center')
{{--@section('description', 'Keep Up To Date With The Latest News From CDMC!')--}}

@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner-hub"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white pb-5">
        <div class="d-flex justify-content-center my-3">
            <img src="/images/logo-home.png" alt="" class="img-fluid" style="max-height: 200px; width: auto;">
        </div>
        {{--        <p class="text-center font-syne" style="font-size: 1.5em;">Stay tuned for schedules and more!</p>--}}
        {{--        @can('update', \App\Hub::class)--}}
        {{--            <p class="text-center"><a href="/hubs/create">Create New Hub</a></p>--}}
        {{--        @endcan--}}

        <div class="container" id="news">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                <div class="col"><a href="/images/recital-1.png"><img src="/images/recital/dance-recital-1.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-2.png"><img src="/images/recital/dance-recital-2.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-3.png"><img src="/images/recital/dance-recital-3.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-4.png"><img src="/images/recital/dance-recital-4.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/ticket-faq.png"><img src="/images/recital/recital-ticket-faqs.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/stage-ready.png"><img src="/images/recital/how-to-be-stage-ready.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/25-recital-look-book-2.pdf" target="_blank"><img src="/images/recital/recital-lookbook.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a target="_blank" href="/images/coming-soon.png"><img src="/images/recital/recital-prep-shop-link.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/recital-faq.pdf"><img src="/images/recital/recital-day-faqs.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a target="_blank" href="/images/coming-soon.png"><img src="/images/recital/recital-swag.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a target="_blank" href="https://www.youtube.com/playlist?app=desktop&list=PL6ugHv6O3tUoo8B5JUxI4yyhIMLjvnL2Q"><img src="/images/recital/how-to-do-hair-and-makeup.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a target="_blank" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQcBj0dOFiDG0zCloSvVQBq2dLEvLdQV0YWOrfR2cHyOWnKPdCvD5olC3rNl9H9BWiFiISKL-Is3h7B/pubhtml?gid=0&single=true"><img src="/images/recital/picture-schedule.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a target="_blank" href="https://25664.recitalticketing.com/landing.cfm"><img src="/images/recital/recital-tickets.png" alt="" class="img-fluid"></a></div>
                <div class="col"><a href="/images/coming-soon.png" target="_blank"><img src="/images/recital/music-rehearsal.png" alt="" class="img-fluid"></a></div>
{{--                <div class="col"><a href="/images/ticket-faq.png" target="_blank"><img src="/images/recital/recital-ticket-faqs.png" alt="" class="img-fluid"></a></div>--}}

            </div>



            <!-- old hub -->
{{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 pb-5">--}}
{{--                <div class="col-sm p-2 d-flex justify-content-center">--}}
{{--                    <div class="card" style="width: 100%;">--}}
{{--                        <a href="/hubs/dance">--}}
{{--                            <img src="/images/recital/25-recital-hub.JPG" alt="" class="card-img-top" style="height: 300px; width: 100%; object-fit: cover;">--}}
{{--                        </a>--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="card-title text-uppercase lead fw-bold text-center">Dance</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm p-2 d-flex justify-content-center">--}}
{{--                    <div class="card" style="width: 100%;">--}}
{{--                        <a href="/hubs/music">--}}
{{--                            <img src="/images/recital-music.jpg" alt="" class="card-img-top" style="height: 300px; width: 100%; object-fit: cover; object-position: top;">--}}
{{--                        </a>--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="card-title text-uppercase lead fw-bold text-center">Music</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm p-2 d-flex justify-content-center">--}}
{{--                    <div class="card" style="width: 100%;">--}}
{{--                        <a href="https://25664.recitalticketing.com/landing.cfm" target="_blank">--}}
{{--                            <img src="/images/recital/25-ticket.png" alt="" class="card-img-top" style="height: 300px; width: 100%; object-fit: cover; object-position: center;">--}}
{{--                        </a>--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="card-title text-uppercase lead fw-bold text-center">Recital Tickets</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- end old hub -->


        </div>
    </div>
    {{--                @foreach($hubs as $hub)--}}
    {{--                    <div class="col-sm p-2 d-flex justify-content-center">--}}
    {{--                        <div class="card" style="max-width: 400px">--}}
    {{--                            <a href="/hubs/{{ $hub->id }}">--}}
    {{--                                <img src="{{ asset('/storage/' . $hub->hubImage) }}" class="card-img-top" alt="..." style="height: 295px; width: auto; object-fit: cover;">--}}
    {{--                            </a>--}}
    {{--                            <div class="card-body">--}}
    {{--                                <p class="card-title text-uppercase lead fw-bold text-center">{{ $hub->hubTitle }}</p>--}}
    {{--                                --}}{{--                                <p class="card-text">{!! strip_tags(substr($hub->hubTitle, 0, 125)) . '...' !!}</p>--}}
    {{--                            </div>--}}
    {{--                            @can('update', \App\Hub::class)--}}
    {{--                                <div class="card-footer">--}}
    {{--                                    <div class="admin-controls d-flex justify-content-center align-items-center pb-2">--}}
    {{--                                        <div><a href="/hubs/{{ $hub->id }}/edit">Edit Hub</a></div>--}}
    {{--                                        <div>--}}
    {{--                                            <form action="/hubs/{{ $hub->id }}" method="POST">--}}
    {{--                                                @method('DELETE')--}}
    {{--                                                @csrf--}}

    {{--                                                <button class="btn btn-danger ml-4" type="submit">Delete</button>--}}
    {{--                                            </form>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            @endcan--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                @endforeach--}}


@endsection
