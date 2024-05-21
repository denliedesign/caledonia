@extends('layouts.app-lava')

@section('title', 'Tumbling Classes Kentwood | Caledonia Dance & Music Center')
@section('description', 'Join the fun at CDMC with the best tumbling and acro classes in Kentwood! Our friendly instructors, safe environment, and strong community values make learning a blast.')

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
                            <h1 class="text-center">Tumbling and Acro Classes in Kentwood</h1>
                            <p class="text-center">
                                Welcome to CDMC, where our tumbling and acro classes in Kentwood are designed to bring out the best in every child! Our classes are packed with fun and excitement, perfect for kids of all ages and skill levels. From basic rolls and handstands to advanced flips and tricks, we help your child grow stronger, more flexible, and more coordinated, all while having a great time!
                            </p>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="/fall"><div class="shadow btn btn-lg btn-danger">Find Your Class</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-center">
                            <img src="/images/acro-classes-kentwood.jpg" alt="young dance friends in costume" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red text-white py-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="/images/tumbling-kentwood.jpg" alt="young girls and boy performing on stage" class="img-fluid shadow rounded">
            </div>
            <h2 class="text-center">Friendly Instructors and Safety First</h2>
            <p class="text-center">
                At CDMC, our amazing instructors are here to support and guide your child every step of the way. With years of experience and a passion for teaching, our team ensures that each class is both safe and enjoyable. We take safety very seriously, providing a secure environment where your child can learn and practice with confidence. Our top-notch facilities are equipped with everything needed to keep your little tumblers and acrobats safe and sound.
            </p>
            <div class="d-flex justify-content-center">
                <a href="/staff"><div class="shadow btn btn-lg btn-danger">Meet the Team</div></a>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <div class="row my-5">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/tumble-classes-kentwood.jpg" alt="older dancer with younger dancer in studio" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                        <div>
                            <h2 class="text-center">Values and Community Spirit</h2>
                            <p class="text-center">
                                Here at CDMC, we believe in more than just teaching skills – we're building a community! Our tumbling and acro programs are all about boosting confidence, promoting teamwork, and fostering friendships. We create a positive and inclusive atmosphere where every child feels welcome and valued. Join our CDMC family and experience the joy of learning together, supporting one another, and growing as a team.
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
