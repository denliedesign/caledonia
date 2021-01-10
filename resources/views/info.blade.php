@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container mt-5">
        <h2 class="text-center mb-3">Caledonia Dance & Music Center</h2>
    </div>

    <div class="background-green">
        <div class="container">
            <div class="text-center">
                <p style="font-size: 1.5em;" class="p-5">
                    "We love Caledonia Dance (& Music) Center because of the excellent teachers and strong programs. Their class offerings are perfect for every age and ability level, even offering an "all boys" class."
                    <br><small class="text-black-50" style="font-size: 0.75em;"> - Jackie Baum, Caledonia</small>
                </p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div id="sked-link">
            <p class="text-center pt-3">
                Choose to dance at our <strong>Safer Studio&trade;</strong> or at home through <strong>CDMC Connected Live Stream</strong>
            </p>
        </div>
        <div class="row mx-5 px-5">
            <div class="col-sm d-flex justify-content-center">
                <img src="/images/safer-studio-logo.png" alt="" style="max-height: 200px;" id="safer-studio-black">
            </div>
            <div class="col-sm d-flex justify-content-center">
                <a href="https://classroom.google.com" target="_blank"><img src="/images/cdmc_connected.png" alt="cdmc connected logo" class="img-fluid mt-4" style="max-height: 150px;"></a>
            </div>
        </div>
    </div>

    <div class="my-5 background-green py-5">
        <div class="d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-sm my-1 text-uppercase text-center">
                    <h2 style="font-weight: 800;">Dance</h2>
                    <img src="/images/nutcracker-1.jpg" style="max-height: 200px;">
                </div>
                <div class="col-sm my-1 text-uppercase text-center">
                    <h2 style="font-weight: 800;">Acro</h2>
                    <img src="/images/acro.jpg" style="max-height: 200px;">
                </div>
                <div class="col-sm my-1 text-uppercase text-center">
                    <h2 style="font-weight: 800;">Music</h2>
                    <img src="/images/music-2.jpg" alt="img-fluid">
                </div>
            </div>
        </div>
        <div class="pt-3">
            <p class="text-center">
                We Offer Dance, Music, & Acro Classes For All Ages
            </p>
            <div class="d-flex justify-content-center">
                <a href="/class-schedule"><div class="btn btn-aqua btn-lg text-center text-uppercase">View Our Class Schedule</div></a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <p class="lead text-center">
            Professional training in a fun and caring atmosphere…
        </p>
        <p>
            At the Caledonia Dance & Music Center, we provide your child the skills they need to enjoy dance and music for a lifetime.  By offering a large variety of classes for students as young as 12 months old, we are able to introduce dance to virtually everyone.  Students learn not only dance technique, history, and the latest styles, but they also learn valuable life skills.  Our faculty is made up of qualified dancers and musicians who are passionate about the arts and sharing their love of dance and music with children.  These worthy role models are trained in all areas of dance, enabling us to offer you superior classes in tap, ballet, jazz, lyrical, hip hop, musical theater, pointe, and specialty classes for preschoolers and adults.  Music teachers are university trained in voice, piano, guitar and string instruments.  Private and group music lessons are available.
            <br><br>
            Our students participate in numerous performances.  Many of Caledonia Dance & Music Center's students have been seen and awarded at regional and national competitions.  For over 30 years, we have danced at the Grand Rapids Festival of the Arts, the nation's largest all-volunteer festival.  Students young and old have performed at multiple July 4th Celebrations and parades, nursing homes, and all students take part in our annual spring recitals.  Our liturgical dancers have danced and worshiped at several local churches.  Caledonia Dance & Music Center's students share their gift of dance and music with the community.
            <br><br>
            We hope that your family will join us in experiencing the joy of dance and music.
        </p>
    </div>

    <div class="background-green">
        <div class="container">
            <div class="text-center">
                <p style="font-size: 1.5em;" class="p-5">
                    "We've chosen Caledonia Dance Center for many reasons. The staff is very friendly and professional and the quality of teaching is excellent. My girls are challenged and have a great time doing what they love. I also love the good taste in costumes and choreography. An excellent place to dance!"
                    <br><small class="text-black-50" style="font-size: 0.75em;"> - Sheila Workman, Middleville</small>
                </p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-3">Upcoming Events</h2>
        <p class="text-center">Check back soon!</p>
    </div>

@endsection
