@extends('layouts.app-lava')

@section('title', 'Dance Classes Wayland MI | Caledonia Dance & Music Center')
@section('description', 'Join the fun at our dance studios in Wayland MI. With expert instructors, a wide range of dance classes, and a supportive environment, we offer the perfect place for kids to learn and grow in dance.')


@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white pb-5">
        <div class="container">
            <div class="py-5">
                <div class="row">
                    <div class="col-sm d-flex align-items-center">
                        <div>
                            <h1 class="text-center">Discover the Joy of Dance in Wayland MI</h1>
                            <p class="text-center">
                                Dance is a wonderful form of expression and exercise for children, and the dance studios in Wayland MI are the perfect place to get started. Our dance classes offer a fun and supportive environment where kids can learn new techniques, build confidence, and make friends. Whether your child is a beginner or an experienced dancer, we have a program to fit their needs.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-center">
                            <img src="/images/dance-wayland-mi.jpg" alt="ballerinas on stage" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 text-black">
        <div class="container">
            <h2 class="text-center">Expert Dance Instructors in Wayland MI</h2>
            <p class="text-center">
                At our dance studio in Wayland MI, we understand the importance of having knowledgeable and skilled dance instructors. Our team of expert teachers is dedicated to providing a positive and encouraging experience for every student. With a focus on proper technique and personal growth, our dance lessons in Wayland MI are the ideal way for kids to learn and excel in dance.
            </p>
            <div class="d-flex justify-content-center mt-3">
                <a href="/staff"><button class="btn btn-lg btn-danger shadow">Meet The Team</button></a>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <div class="row my-5">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/dance-studios-wayland-mi.jpg" alt="acro students in back bend stretch" class="img-fluid shadow rounded">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div class="">
                        <h2>Wide Range of Dance Classes in Wayland MI</h2>
                        <p>
                            We offer a diverse range of dance classes in Wayland MI, including ballet, jazz, hip hop, lyrical, and acro. Each class is tailored to a specific age group and skill level, ensuring that every student gets the attention and instruction they need to succeed. Our dance studios in Wayland MI provide a fun and supportive atmosphere where kids can express themselves, grow, and build a lifelong love of dance.
                        </p>
                        <div class="d-flex justify-content-center mt-3">
                            <a href="/fall"><button class="btn btn-lg btn-danger shadow">Find Your Class</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
