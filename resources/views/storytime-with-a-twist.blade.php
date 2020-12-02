@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="d-flex justify-content-center">
            <img src="/images/storytime-with-a-twist.jpg" alt="storytime logo" class="img-fluid">
        </div>
        <h2 class="text-center mt-3">Storytime with a Twist</h2>
        <p>
            Reading is FUN and so is wiggling around!!
            <br><br>
            Just for you and your little one and totally FREE - Story Time with a Twist takes place weekly during the school year on Tuesdays from 10:00-10:25am.
            <br><br>
            This fun-filled activity combines storybooks with music, dance, rhymes, instruments, finger plays, and more!
            <br><br>
            No enrollment, registration, or reservation needed.  Just come on in and join us!
            <br><br>
            Story Time with a Twist takes place in a shoe-free room. We recommend wearing socks.  Children should wear comfy clothing that allows them to move freely.
        </p>
    </div>

    <div class="background-green py-3 mb-5">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col-sm px-3 border-right border-white">
                    <h4 class="text-center">Age</h4>
                    <p>
                        Created for children ages 5 and under, but open to children of all ages.
                    </p>
                </div>
                <div class="col-sm px-3">
                    <h4 class="text-center">When</h4>
                    <p>
                        Tuesdays 10:00-10:25am
                        <br><br>
                        This program takes place throughout the school year and follows the Caledonia Community Schools calendar taking breaks for holidays, etc.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center mb-5">
        <img src="/images/storytime-pic.jpg" alt="img-fluid">
    </div>

@endsection
