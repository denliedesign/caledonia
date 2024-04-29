@extends('layouts.app-lava')

@section('title', 'Dance Classes Kentwood | Caledonia Dance & Music Center')
@section('description', 'Join CDMC in Kentwood, MI, where dance meets passion and skill! Explore our ballet, hip hop, tap, and tumbling classes, each designed to nurture talent and foster creativity in a supportive environment.')

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
                            <h1 class="text-center">Master the Art of Ballet in Kentwood</h1>
                            <p class="text-center">
                                At CDMC, our ballet classes in Kentwood are tailored to inspire and challenge dancers of all ages. Whether you're seeking ballet lessons in Kentwood for beginners or advanced performers, our expert instructors are here to guide you through every pirouette and plié. Our classes focus on classical ballet techniques and artistic expression, making us the top choice for ballet training in the area.
                            </p>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="/fall"><div class="shadow btn btn-lg btn-danger">Find Your Class</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-center">
                            <img src="/images/ballet-kentwood.jpg" alt="young dance friends in costume" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red text-white py-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="/images/hip-hop-classes-kentwood.jpg" alt="young girls and boy performing on stage" class="img-fluid shadow rounded">
            </div>
            <h2 class="text-center">Feel the Beat with Hip Hop Classes in Kentwood</h2>
            <p class="text-center">
                Dive into the dynamic world of hip hop with CDMC's hip hop dance classes in Kentwood. Our studio offers an energetic environment where dancers can learn the latest moves and express themselves freely. From popping and locking to freestyle, our hip hop classes in Kentwood are perfect for anyone looking to improve their skills and have fun.
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
                        <img src="/images/tap-dance-classes-kentwood.jpg" alt="older dancer with younger dancer in studio" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                        <div>
                            <h2 class="text-center">Discover Rhythm and Precision with Tap Dance in Kentwood</h2>
                            <p class="text-center">
                                Tap into the rhythmic world of tap dancing at CDMC. Our tap dance classes in Kentwood cater to all skill levels, teaching the fundamentals of tap choreography and sound. Students learn to combine musicality and technique, creating performances that resonate with audiences and showcase their precision and flair.
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
                <img src="/images/tumbling-classes-kentwood.jpg" alt="young girls and boy performing on stage" class="img-fluid shadow rounded">
            </div>
            <h2 class="text-center">Elevate Your Skills with Tumbling Classes in Kentwood</h2>
            <p class="text-center">
                For those interested in adding acrobatics to their dance repertoire, CDMC offers comprehensive tumbling classes in Kentwood. From basic rolls to advanced flips, our tumbling instructors provide a safe and encouraging space for dancers to increase flexibility, strength, and coordination.
            </p>
            <div class="d-flex justify-content-center">
            <a href="/fall"><div class="shadow btn btn-lg btn-danger">Start Dancing With Us Today!</div></a>
        </div>
    </div>
    </div>


@endsection
