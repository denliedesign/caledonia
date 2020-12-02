@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="container d-flex justify-content-around align-items-center mb-5">
            <div class="row">
                <div class="col-sm my-1"><img src="/images/music-1.jpg" alt="img-fluid"></div>
                <div class="col-sm my-1"><img src="/images/music-2.jpg" alt="img-fluid"></div>
            </div>
        </div>
        <h2 class="text-center mt-3">Music Lessons</h2>
        <p class="lead text-center">
            Group and Private Music Lessons
        </p>
        <p>
            At Caledonia Dance & Music Center, students can begin music lessons at any time!  We offer fun group classes for children 18 months of age to 6 years old, and we offer private lessons generally as early as 6 years through adult.  Our music program includes piano, guitar, voice, violin, strings and more.  Our professional environment is free from the distractions and interruptions found with home lessons.  We also provide top notch annual music recitals along with numerous optional performance opportunities.
        </p>
    </div>

    <div class="background-green py-3 mb-5">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col-sm px-3">
                    <h4 class="text-center">Age</h4>
                    <p>
                        Group lessons available as early as 18 month of age.
                        <br><br>
                        Private lessons typically begin at 6 years of age for most instruments. Vocal students are generally older. Call the studio for more information.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="d-flex justify-content-center">
            <img src="/images/music-fun-time.png" alt="music fun time logo" class="img-fluid">
        </div>
        <h2 class="text-center mt-3">Music FunTime</h2>
        <p class="lead text-center">
            Caledonia Dance & Music Center is a licensed Music FunTime studio!
        </p>
        <p>
            Discover rhythm, pitch, music theory and the technique of playing instruments in a fun, nurturing, and up-beat classroom environment. In succession of studies from Johns-Hopkins Research Center about the magical connection between math and music, Music FunTime is teaching music to children as young as 18 months of age!
            <br><br>
            Interested in learning more about Music FunTime? <a href="http://musicfuntime.org/preschool_music_classes/music-classes-for-preschoolers/" target="_blank">Click HERE!</a>
        </p>
    </div>

    <div class="background-green py-3 mb-5">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col-sm px-3 border-right border-white">
                    <h4 class="text-center">Age</h4>
                    <p>
                        Music FunTime group music lessons are for students as young as 18 months of age.  Class sizes are limited and fill quickly.
                    </p>
                </div>
                <div class="col-sm px-3">
                    <h4 class="text-center">Tuition</h4>
                    <ul>
                        <li>$89/mo</li>
                        <li>Tuition includes a set of instruments and other materials given throughout the session.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
