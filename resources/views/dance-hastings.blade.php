@extends('layouts.app-lava')

@section('title', 'Dance Hastings | Caledonia Dance & Music Center')
@section('description', 'Discover top-notch dance classes in Hastings, MI, at CDMC. We offer comprehensive training in ballet, hip hop, tap, and tumbling. Join us to nurture your dance passion in a supportive community.')

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
                            <h1 class="text-center">Ballet Classes in Hastings, MI</h1>
                            <p class="text-center">
                                At CDMC, we provide exceptional ballet training in Hastings, MI. Our ballet classes are designed for dancers of all levels, from beginners to advanced students. Our experienced instructors focus on developing proper technique, strength, and artistry in each dancer. Whether you're looking to start your ballet journey or refine your skills, our ballet programs offer the perfect environment for growth.
                            </p>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="/fall"><div class="shadow btn btn-lg btn-danger">Find Your Class</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-center">
                            <img src="/images/ballet-hastings.jpg" alt="young dance friends in costume" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red text-white py-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="/images/hip-hop-classes-hastings.jpg" alt="young girls and boy performing on stage" class="img-fluid shadow rounded">
            </div>
            <h2 class="text-center">Hip Hop Dance Classes in Hastings, MI</h2>
            <p class="text-center">
                Join our vibrant hip hop dance classes in Hastings, MI, at CDMC. Our hip hop programs are energetic and fun, designed to teach students the latest moves and techniques in hip hop dance. With a focus on rhythm, coordination, and self-expression, our classes cater to all skill levels. Our instructors bring passion and expertise, ensuring each dancer can develop their unique style.
            </p>
            <div class="d-flex justify-content-center">
                <a href="/fall"><div class="shadow btn btn-lg btn-danger">Start Dancing With Us Today!</div></a>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <div class="row my-5">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/tap-dance-classes-hastings.jpg" alt="older dancer with younger dancer in studio" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                        <div>
                            <h2 class="text-center">Tap Dance Classes in Hastings, MI</h2>
                            <p class="text-center">
                                Explore the rhythm and precision of tap dance with our tap dance classes in Hastings, MI. CDMC offers a comprehensive tap dance program that emphasizes timing, musicality, and intricate footwork. Our experienced instructors guide students through various tap techniques and routines, helping them to build confidence and performance skills. Tap dance is a fantastic way to develop coordination and musical awareness.
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

    <div class="bg-red text-white py-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="/images/tumbling-classes-hastings.jpg" alt="young girls and boy performing on stage" class="img-fluid shadow rounded">
            </div>
            <h2 class="text-center">Tumbling Classes in Hastings, MI</h2>
            <p class="text-center">
                At CDMC, our tumbling classes in Hastings, MI, provide a dynamic and exciting way for students to develop their acrobatic skills. Our tumbling program focuses on strength, flexibility, and coordination through exercises such as rolls, cartwheels, handstands, and back handsprings. Our qualified instructors ensure a safe and supportive environment, allowing each student to progress at their own pace and achieve their tumbling goals.
            </p>
            <div class="d-flex justify-content-center">
                <a href="/fall"><div class="shadow btn btn-lg btn-danger">Start Dancing With Us Today!</div></a>
            </div>
        </div>
    </div>


@endsection
