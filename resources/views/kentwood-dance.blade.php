@extends('layouts.app-lava')

@section('title', 'Kentwood Dance | Caledonia Dance & Music Center')
@section('description', 'Looking for high-quality dance lessons in Kentwood? Look no further than Caledonia Dance & Music Center! Our expert instructors offer a variety of dance classes to students of all ages and skill levels. Whether you\'re a beginner or an experienced dancer, we have the perfect class for you.')


@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white pb-5">
        <div class="container">
            <div class="py-5">
                <div class="row">
                    <div class="col-sm d-flex align-items-center">
                        <div>
                            <h1 class="text-center">Kentwood Dance Classes for All Ages</h1>
                            <p class="text-center">
                                Caledonia Dance & Music Center is the premier destination for dance classes in Kentwood. Our expert instructors offer a wide variety of lessons, including ballet, jazz, hip hop, and tap, for students of all ages and skill levels. We understand that each student is unique, which is why we tailor our classes to meet their individual needs. Our state-of-the-art facility is fully equipped with everything you need to succeed in your dance lessons, from spacious studios to top-of-the-line dance equipment. With our commitment to excellence, you can be sure that you'll receive the best dance education possible at Caledonia Dance & Music Center.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-center">
                            <img src="/images/kentwood-dance.jpg" alt="young dance friends in class" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red text-white py-5">
        <div class="container">
            <h2 class="text-center">Discover the Best Dance Studio in Kentwood</h2>
            <p class="text-center">
                Looking for the best dance studios in Kentwood? Look no further than Caledonia Dance & Music Center. Our experienced instructors are dedicated to helping students of all ages and skill levels achieve their goals and develop a love for dance. We offer a wide range of classes, from ballet to hip hop, and our curriculum is designed to help each student reach their full potential. With our emphasis on technique, style, and performance, you'll be well on your way to becoming a confident and accomplished dancer. Join us today and discover why Caledonia Dance & Music Center is the top choice for dance lessons in Kentwood.
            </p>
            <div class="d-flex justify-content-center mt-3">
                <a href="/staff"><div class="shadow btn btn-lg btn-danger">Meet the Team</div></a>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <div class="row my-5">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/kentwood-dance-classes.jpg" alt="nutcracker ballet dancers on stage" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                        <div>
                            <h2 class="text-center">You Belong Here</h2>
                            <p class="text-center">
                                Your child will fall in love with dance classes in Kentwood for ages 2-18!
                            </p>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="/fall"><div class="shadow btn btn-lg btn-danger">Find Your Class</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
