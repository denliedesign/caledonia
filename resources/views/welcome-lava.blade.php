@extends('layouts.app-lava')
@section('content')

    <div style="position: relative;" class="d-none d-lg-block">
        <div style="position:absolute; bottom: 40%; left: 50%; transform: translate(-50%, -50%); width: 100%; z-index: 3;">
            <h2 id="great-txt">
                You <span class="text-red">belong</span> here
                <ion-icon name="heart"></ion-icon>
                <br>
                <span style="font-size: 0.5em; font-weight: normal; text-shadow: 1px 2px 4px black;" class="txt-crimson">Your child will fall in love with dance with our classes for ages 2-18!</span>
                <br>
                <a href="/fall"><div class="shadow btn btn-lg btn-danger">Find Your Class</div></a>
            </h2>
        </div>
        <img src="/images/fold-lava.jpg" alt="" class="img-fluid" style="z-index: 1; width: 100%;">
        <div class="color-filter-pink"></div>
    </div>

    <div class="d-block d-lg-none">
        <div class="container">
            <p class="text-center" style="font-size: 1.5em;">
                <span class="font-staat" style="font-size: 50px; line-height: 0.9;"><strong>You <span class="text-red">belong</span> here <ion-icon name="heart"></ion-icon></strong></span>
                <br>
                <small class="txt-crimson font-syne">Your child will fall in love with dance with our classes for ages 2-18!</small>
                <br>
            <div class="d-flex justify-content-center">
                <a href="/fall"><div class="shadow btn btn-lg btn-danger">Find Your Class</div></a>
            </div>
            </p>
        </div>
        <img src="/images/fold-lava.jpg" alt="" class="img-fluid" style="z-index: 0;">
        <div class="color-filter-pink"></div>
    </div>

    {{--<div class="bg-red py-5">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm d-flex justify-content-center">--}}
    {{--                <div class="text-center text-white">--}}
    {{--                    <div class="fw-bold" style="font-size: 2em;">FIND JOY IN MOVING</div>--}}
    {{--                    <div class="txt-crimson" style="font-size: 1.5em;">Try your <u>FREE</u> trial class today.</div>--}}
    {{--                    --}}{{--                        <div class="txt-crimson" style="font-size: 1.5em;">Our Experienced Dance Instructors Will Guide You In A <u>FREE</u> Video-Recorded Dance Lesson. Enter Your Email To Get Started.</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm d-flex justify-content-center align-items-center">--}}
    {{--                <form action="">--}}
    {{--                    <div class="row g-0 align-items-center">--}}
    {{--                        <div class="col-auto mx-0">--}}
    {{--                            <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">--}}
    {{--                        </div>--}}
    {{--                        <div class="col-auto mx-0">--}}
    {{--                            <button type="submit" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0">SUBMIT</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div class="bg-red py-5" id="skip" style="position: relative;">
        <div class="container">
            <h3 class="font-staat text-white" style="font-size: 100px; line-height: 0.9em;">Dance makes GREAT kids!</h3>
            <p class="text-white font-syne" style="font-size: 22px;">
                From your child’s first class to their graduation performance, your child will thrive! At CDMC dance classes are More Than Just Great Dancing! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
            </p>
            {{--        <div class="mt-5">--}}
            {{--            <div class="">--}}
            {{--                <div class="text-white">--}}
            {{--                    <div><span class="fw-bold font-staat" style="font-size: 2em;">FIND JOY IN MOVING.</span> <span class="txt-crimson font-syne" style="font-size: 1.5em;">Try your <u>FREE</u> trial class today.</span>--}}
            {{--                        <form action="">--}}
            {{--                            <div class="row g-0 align-items-center">--}}
            {{--                                <div class="col-auto mx-0">--}}
            {{--                                    <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">--}}
            {{--                                </div>--}}
            {{--                                <div class="col-auto mx-0">--}}
            {{--                                    <button type="submit" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0">SUBMIT</button>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </form>--}}
            {{--                    </div>--}}

            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="col-sm d-flex justify-content-center align-items-center">--}}

            {{--            </div>--}}
            {{--        </div>--}}
        </div>
        <div style="height: 118px;"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        {{--    <div style="height: 123px;"></div>--}}
        {{--    <div class="custom-shape-divider-bottom-1648525246" style="transform: translateY(1px);">--}}
        {{--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--            <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
        {{--        </svg>--}}
        {{--    </div>--}}
    </div>

    <div style="position: relative; height: 990px;" class="d-none d-lg-block">
        <div class="container" style="height: 100%;">
            <div id="apple-effect-wrap" style="height: 100%;">
                <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #4A245F; z-index: 5 !important; line-height: 0.9;"><span style="color: transparent;">keepi</span>ng your dancer<br>
                    <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;">happy</a>,
                    <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and
                    <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>
                </h3>
                <div>
                    <img src="/images-lava/happy-healthy-safe.png" alt="female contemporary dancer" class="img-fluid" id="happy-healthy-safe-image">
                </div>
                <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #4A245F; z-index: 1 !important; line-height: 0.9;">keeping your dancer<br>
                    <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;">happy</a>,
                    <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and
                    <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>
                </h3>
            </div>
        </div>
    </div>

    <div style="position: relative; height: 850px;" class="d-block d-lg-none">
        <div class="container" style="height: 100%;">
            <div id="apple-effect-wrap" style="height: 100%;">
                <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #4A245F; z-index: 5 !important; line-height: 0.9;"><span style="color: transparent;">keeping your dancer</span><br>
                    <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;"><span style="color: transparent;">happy</span></a>,
                    <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and
                    <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>
                </h3>
                <div>
                    <img src="/images-lava/happy-healthy-safe.png" alt="female contemporary dancer" class="img-fluid" id="happy-healthy-safe-mobile">
                </div>
                <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #4A245F; z-index: 1 !important; line-height: 0.9;">keeping your dancer<br>
                    <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;">happy</a>,
                    <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and
                    <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>
                </h3>
            </div>
        </div>
    </div>

    <!-- middrif fluid frames dancer -->
    {{--<div style="position: relative; height: 920px;">--}}
    {{--    <div class="container" style="height: 100%;">--}}
    {{--        <div id="apple-effect-wrap" style="height: 100%;">--}}
    {{--            <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #4A245F; z-index: 5 !important; line-height: 0.9;"><span style="color: transparent;">kee</span>ping your dancer<br>--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;"><span style="color: transparent;">happy</span></a>,--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>--}}
    {{--            </h3>--}}
    {{--            <div>--}}
    {{--                <img src="/images-lava/summit-main-dancer.png" alt="female contemporary dancer" class="img-fluid d-none d-lg-block" id="badge-image">--}}
    {{--            </div>--}}
    {{--            <h3 class="apple-effect font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 36%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #4A245F; z-index: 1 !important; line-height: 0.9;">keeping your dancer<br>--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;">happy</a>,--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and--}}
    {{--                <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>--}}
    {{--            </h3>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <!-- end of middrif fluid frames dancer -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasHappy">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images-lava/logo-mtjgd.png" alt="mtjgd logo" style="height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>MTJGD is a licensed affiliation of dance studios that subscribe to a high standard of dance instruction and management practices. We are united in the belief that dance has the power to change lives.
            </p>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasHealthy">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images-lava/logo-ypad.png" alt="ypad logo" style="height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>To earn the designation, studios must complete training in CPR, First Aid, dance education and safety injury prevention, emergency preparedness, abuse awareness and prevention, dancer wellness and development, social media safety, nutrition and disordered eating, bullying and conflict resolution.
            </p>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSafe">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images-lava/logo-safer-studio.png" alt="safer studio logo" style="filter: invert(100); height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>Wellness Checks For Staff
                <br>Enhanced Cleaning Procedures
                <br>Social Distancing Practices
                <br>Touch-less Payment Options
                <br>Gradual Re-Opening
                <br>Continuous Communication
            </p>
        </div>
    </div>

    {{--<div class="text-center py-5 bg-seashell">--}}
    {{--    <div class="container my-5">--}}
    {{--        <h2 style="font-size: 2.75em;" class="fw-bold">Dance makes GREAT kids!</h2>--}}
    {{--        <p class="txt-crimson" style="font-size: 1.75em;">--}}
    {{--            From your child’s first class to their graduation performance, your child will thrive! At MDU dance classes are More Than Just Great Dancing! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.--}}
    {{--        </p>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container mb-5">
            <div class="row">
{{--                <x-testimonial image="baker" name="Ashley Baker" review="My daughter loves the teachers here. And they are super helpful" />--}}
                <x-testimonial image="caldwell" name="Emily Caldwell" review="My daughter loves CDMC! The teachers are great and the performances are amazing!" />
{{--                <x-testimonial image="wilson" name="Gretchen Wilson" review="This is a wonderful place with lots of classes to chose from and amazing instructors. They are so organized and know how to put on a show from the Nutcracker at Christmas to Recital week." />--}}
                <x-testimonial image="russo" name="Angela Russo" review="Both my daughters (3 and 5 years old) attend CDMC and they look forward to going to class every week. All of the CDMC staff are kind, friendly, and knowledgeable. They help build confidence in the dancers and technique all while having fun." />
                <x-testimonial image="beezhold" name="Emily Beezhold" review="My daughter has been dancing here since she was four and every year she loves it more and grows in what she knows and her maturity level as well. Even though covid was a tough experience for everything CDMC worked their hardest to continue dance online and in person however they could so the kids continued to be able to learn." />
{{--                <x-testimonial image="pratt" name="Stephanie Pratt" review="This is our second year at CDMC and we LOVE it. My daughter danced at two prior studios and CDMC is hands down our favorite and where we will stay. The teachers are knowledgeable and loving, they put on beautiful performances, and we look forward to many years with them. Highly recommend!" />--}}
                <x-testimonial image="french" name="Jennifer French" review="LOVE this studio! High quality instruction and great teachers and staff! No better dance studio in this area!! We love CDMC!!" />
                <x-testimonial image="kane" name="Patrick Kane" review="Very talented staff!" />
{{--                <x-testimonial image="" name="" review="" />--}}
{{--                <x-testimonial image="" name="" review="" />--}}
            </div>
        </div>
        <div style="height: 118px;"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        {{--    <div style="height: 67px;"></div>--}}
        {{--    <div class="custom-shape-divider-bottom-1663853988">--}}
        {{--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--            <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>--}}
        {{--        </svg>--}}
        {{--    </div>--}}
    </div>


    <div style="position: relative; height: 700px;">
        <div class="container" style="height: 100%;">
            <div class="row my-0 py-0 d-flex align-items-center" style="height: 100%;">
                <div class="col-sm-8">
                    <div class="mb-4">
                        <h2 style="font-size: 2.75em;" class="fw-bold text-center">Parents
                            <ion-icon name="heart-outline"></ion-icon>
                            CDMC...</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="txt-crimson d-none d-lg-block" style="font-size: 1.75em;">
                            @include("_parents-love-list")
                        </p>
                        <p class="txt-crimson d-block d-lg-none" style="font-size: 1.5em;">
                            @include("_parents-love-list")
                        </p>
                    </div>
                    {{--                    <div class="d-flex justify-content-center mt-4">--}}
                    {{--                        <a href="/#section-cta"><div class="btn btn-lg btn-outline-danger shadow">Try A Free Class</div></a>--}}
                    {{--                    </div>--}}
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <div>
            <img src="/images-lava/parents-love-mistys-bg.png" alt="" class="img-fluid d-none d-lg-block" id="parents-image">
        </div>
    </div>

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container">
            <h2 class="fw-bold text-center" style="font-size: 2.75em;">25 Years of Serving the Coulee Region</h2>
            <div class="row" style="font-size: 1.5em;">
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-right: 1px solid white;"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="home"></ion-icon><br>2</span><br> convenient locations in Holmen & Onalaska</p></div>
                <div class="d-md-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-center justify-content-center"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="school"></ion-icon><br>31</span><br>YPAD Certified Teachers</p></div>
                <div class="d-md-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-left: 1px solid white;"><p class="py-5"><span class="fw-bold" style="font-size: 1.75em;"><ion-icon name="calendar"></ion-icon><br>100+</span><br> classes per week to choose from</p></div>
            </div>
        </div>
        <div style="height: 101px;"></div>
        <div class="custom-shape-divider-bottom-1663852805">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center" style="font-size: 2.75em;">If you let me dance...</h2>
            <div class="d-flex justify-content-center">
                <video poster="/images-lava/if-you-let-me-dance-poster.png" src="/images-lava/if-you-let-me-dance.mp4" type="video/mp4" controls="" class="shadow rounded" style="max-width: 950px; width: 100%; height: auto;"></video>
            </div>
        </div>
    </div>

    <div class="bg-red-solid py-5 d-none d-lg-block" style="position: relative; height: 1250px;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm d-flex align-items-center justify-content-center font-staat text-white" style="font-size: 100px; transform: rotate(-90deg);">dance</div>
                <x-program image="preschool.jpg" slug="preschool" group="Preschool" />
                <x-program image="early-elementary.JPG" slug="elementary" group="Early Elementary" />
                <x-program image="graded-levels.JPG" slug="graded" group="Graded Levels" />
            </div>
            <div class="mt-4 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <x-program image="acro-2.JPG" slug="acro" group="Acro" />
                <x-program image="performance-group-new.png" slug="performance-groups" group="Performance Groups" />
                <x-program image="nutcracker.jpeg" slug="nutcracker" group="Nutcracker" />
{{--                <x-program image="" slug="" group="" />--}}
            </div>
            <div class="mt-4 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm d-flex align-items-center justify-content-center font-staat text-white" style="font-size: 100px; transform: rotate(-90deg);">music</div>
                <x-program image="piano.jpg" slug="music-lessons" group="Piano" />
                <x-program image="guitar.jpg" slug="music-lessons" group="Guitar" />
                <x-program image="voice.jpg" slug="music-lessons" group="Voice" />
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div id="mobile-classes-section" class="bg-red-solid py-5 d-block d-lg-none" style="position: relative; height: 3300px;">
        <div class="container">
            <div class="col-sm font-staat text-white text-center" style="font-size: 100px;">dance & music</div>
            <div class="row">
                <div class="my-3"><x-program image="preschool.jpg" slug="preschool" group="Preschool" /></div>
                <div class="my-3"><x-program image="early-elementary.JPG" slug="elementary" group="Early Elementary" /></div>
                <div class="my-3"><x-program image="graded-levels.JPG" slug="graded" group="Graded Levels" /></div>
                <div class="my-3"><x-program image="acro-2.JPG" slug="acro" group="Acro" /></div>
                <div class="my-3"><x-program image="performance-group-new.png" slug="performance-groups" group="Performance Groups" /></div>
                <div class="my-3"><x-program image="nutcracker.jpeg" slug="nutcracker" group="Nutcracker" /></div>
                <div class="my-3"><x-program image="piano.jpg" slug="music-lessons" group="Piano" /></div>
                <div class="my-3"><x-program image="guitar.jpg" slug="music-lessons" group="Guitar" /></div>
                <div class="my-3"><x-program image="voice.jpg" slug="music-lessons" group="Voice" /></div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    {{--<div class="bg-red py-5">--}}
    {{--    <div class="container my-5">--}}
    {{--        <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Our classes</h2>--}}
    {{--        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-1-2.jpg" alt="little medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Age 1-2</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-3-4.jpg" alt="medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Age 3-4</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-5-6.jpg" alt="medium big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 5-6</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-7-8.jpg" alt="big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 7-8</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-9-12.jpg" alt="little medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 9-12</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-teens.jpg" alt="medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Teens</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-guys.jpg" alt="medium big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Guys Only</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm mt-4" style="position: relative;">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/classes-schedule.jpg" alt="big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
    {{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Full Schedule</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <div>
{{--                        <div class="d-flex justify-content-center mb-0">--}}
{{--                            <img src="/images/cdmc-cast-program.jpg" alt="older dancer with younger dancer" class="img-fluid">--}}
{{--                        </div>--}}
                        <h2 class="fw-bold text-center" style="font-size: 2.75em;">Class Assistant Service Team</h2>
                        <p class="text-center txt-crimson" style="font-size: 1.25em;">
                            CDMC is proud to offer a leadership program where tweens and teens model and mentor younger students through the Class Assistant Service Team.
                            <br><br>
                            After extensive pre-screening, CAST Members, go through a training camp and ongoing leadership programs where they learn and grow not only in their craft of dance, but in confidence and character while gaining skills that will last a lifetime.
                            <br><br>
                            Cast Members are passionate about sharing their love of dance and giving back to their community.
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="/images/cdmc-cast-program.jpg" alt="older dancer with younger dancer" class="img-fluid shadow rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container">
            <div class="text-center txt-crimson" style="font-size: 1.5em;">
                We LOVE CDMC! I grew up dancing at here, and now as a parent, I'm so happy to have the opportunity to send my daughter there! She'll be starting her third year there this fall, and I have been so impressed with the professionalism of the teachers, dance curriculum, movement, fun, and confidence my daughter is gaining! The CDMC family is welcoming,, warm, fun, and energetic - exactly what you'd hope for from studio your studio owner and teachers! Plus, CDMC offers a variety of styles and levels, making it a great choice for anyone who wants to dance!
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <img class="review-img shadow mt-4" src="/images/garcia.png" alt="">
                <div class="fw-bold mx-4" style="font-size: 1.25em;">Brittany Barber Garcia</div>
            </div>
        </div>
        <div style="height: 67px;"></div>
        <div class="custom-shape-divider-bottom-1663854216">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div style="position: relative; height: 325px;">
        {{--<div style="position: relative; height: 300px;">--}}
        <div class="container" style="height: 100%;">
            <div class="row" style="width: 100%; height: 100%; z-index: 1; position: relative;">
                <div class="col-sm d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <div class="fw-bold" style="font-size: 2em;">FIND JOY IN MOVING</div>
                        {{--                        <div class="txt-crimson" style="font-size: 1.5em;">Try your <u>FREE</u> trial class today.</div>--}}
                    </div>
                </div>
                <div class="col-sm d-flex justify-content-center align-items-center">
                    {{--                    <form action="">--}}
                    {{--                        <div class="row g-0 align-items-center">--}}
                    {{--                            <div class="col-auto mx-0">--}}
                    {{--                                <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-auto mx-0">--}}
                    {{--                                <button type="button" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0" data-bs-toggle="modal" data-bs-target="#exampleModal">SUBMIT</button>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </form>--}}
                </div>
            </div>
        </div>
        <div>
            <img src="/images-lava/find-joy-in-moving.png" alt="" class="img-fluid d-none d-lg-block" id="joy-image">
            <img src="/images-lava/find-joy-in-moving.png" alt="" class="img-fluid d-block d-lg-none" id="joy-mobile">
        </div>
    </div>

    {{--<div id="safer-youth" class="bg-seashell pt-5">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm d-flex align-items-center">--}}
    {{--                <img src="/images-lava/safer-studio-dancer.png" alt="" class="img-fluid">--}}
    {{--            </div>--}}
    {{--            <div class="col-sm d-flex align-items-center">--}}
    {{--                <div>--}}
    {{--                    <div class="d-flex justify-content-center">--}}
    {{--                        <img src="/images-lava/ypad-badge.png" alt="ypad logo" class="img-fluid" style="width: auto; height: 250px;">--}}
    {{--                    </div>--}}
    {{--                    <h2 class="text-center">MDU is Youth Protection Advocates in Dance  Certified!</h2>--}}
    {{--                    <p class="txt-crimson" style="font-size: 1.25em;">--}}
    {{--                        <span class="text-red"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Safer Studio Policy--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Secured facilities--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Viewing windows--}}
    {{--                        <br><span class="text-red"><ion-icon name="heart"></ion-icon></span> Social media safety practices--}}
    {{--                    </p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="container">--}}
    {{--        <div class="row mb-0 pb-0 mt-4">--}}
    {{--            <div class="col-sm">--}}
    {{--                <div class="d-flex justify-content-center">--}}
    {{--                    <img src="/images-lava/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: auto; height: 250px; filter: invert(1);">--}}
    {{--                </div>--}}
    {{--                <h2 class="text-center">MDU is a Safer Studio</h2>--}}
    {{--                <p class="txt-crimson" style="font-size: 1.25em;">--}}
    {{--                    MDU focuses on a hierarchy of measures to create a Safer Studio environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm">--}}
    {{--                <img src="/images-lava/dancer-huddle.png" alt="" class="img-fluid">--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div id="did-you-know" class="bg-red text-white" style="position: relative;">
        <div class="container py-5">
            <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Did you know...</h2>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm d-flex justify-content-center">
                    <div class="txt-crimson" style="font-size: 1.75em;">
                        Students who regularly participate in dance:
                        <ul>
                            <li>Earn higher GPAs</li>
                            <li>Perform better in science, math, and writing</li>
                            <li>Earn higher test scores on SATs</li>
                            <li>Enroll in 4-year colleges and earn mostly As</li>
                        </ul>
                        <em>Source: National Endowment for the Arts</em>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="mt-3">
                <p class="text-center rounded p-3" style="font-size: 1.75em; border: 4px solid #c1d62e;">
                    <span>
                        Additionally, dance boosts confidence, coordination, and compassion for others. Dancers learn hard work, perseverance, and team work. Or as we like to say around here...Dance makes great kids!
                    </span>
                </p>
            </div>
            <div>
                <p class="text-center txt-crimson" style="font-size: 1.75em;">
                    At Misty's Dance Unlimited, we don't teach kids to make great dancers.<br>We teach dance to make great kids! - <em>Misty Lown</em>
                </p>
            </div>
        </div>
        <div style="height: 165px;"></div>
        <div class="custom-shape-divider-bottom-1663856371">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        {{--    <div class="custom-shape-divider-bottom-1663852805">--}}
        {{--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
        {{--            <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>--}}
        {{--        </svg>--}}
        {{--    </div>--}}
    </div>

{{--    @include('trial-modal')--}}
    <div style="position: relative; height: 500px;" class="d-none d-lg-block">
        <div class="container pt-5" style="height: 100%;">
            {{--    <div style="position:absolute; bottom: 40%; left: 50%; transform: translate(-50%, -50%); width: 100%;">--}}
            <div class="font-staat text-lowercase" style="font-size: 85px; position: absolute; top: 10%; left: 5%; width: 100%; color: black; line-height: 0.9; z-index: -3 !important;">
                <div class="apple-effect-right">See what dance can</div>
                <div class="apple-effect-left"><span style="color: transparent;">se</span>do for your child!</div>
            </div>

            <div style="z-index: 2; position: relative;" class="mt-5 pt-5" id="section-cta">
                <div style="height: 75px;"></div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 pt-4">
                    <div class="col-sm">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-green">Ready To Leap In?</p>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"
                               class="">
                                <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm">
                        {{--                        <div class="next-step mx-1 shadow py-5">--}}
                        {{--                            <p class="txt-blue">Want To Give It A Try?</p>--}}
                        {{--                            <div>--}}
                        {{--                                <button type="button" class="shadow btn btn-lg btn-blue btn-family"--}}
                        {{--                                        data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!--}}
                        {{--                                </button>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col-sm">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-pink">Still Have Questions?</p>
                            <a href="#footer" class="">
                                <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="/images-lava/cta-crop.png" alt="" class="img-fluid d-none d-lg-block" id="cta-image">
        </div>
    </div>

    <div id="mobile-cta-section" style="position: relative; height: 100%;" class="d-block d-lg-none my-5">
        <div class="container" style="height: 100%;">
            <div class="font-staat text-lowercase text-center" style="font-size: 85px; width: 100%; color: black; line-height: 0.9;">
                <div>See what dance can do for your child!</div>
            </div>

            <div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                    <div class="col-sm my-3">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-green">Ready To Leap In?</p>
                            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"
                               class="">
                                <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm my-3">
                        {{--                        <div class="next-step mx-1 shadow py-5">--}}
                        {{--                            <p class="txt-blue">Want To Give It A Try?</p>--}}
                        {{--                            <div>--}}
                        {{--                                <button type="button" class="shadow btn btn-lg btn-blue btn-family"--}}
                        {{--                                        data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!--}}
                        {{--                                </button>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col-sm my-3">
                        <div class="next-step mx-1 shadow py-5">
                            <p class="txt-pink">Still Have Questions?</p>
                            <a href="#footer" class="">
                                <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red text-white py-5" style="position: relative;">
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-6">
                <div class="col d-flex align-items-center justify-content-center text-center px-2" id="main-review-stars">
                    <div>
                        <p style="font-size: 1.5em;" class="fw-bold mb-0">OUTSTANDING 4.9/5</p>
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                        <p style="color: seashell;"><small>based on <strong>54</strong> reviews</small></p>
                    </div>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>They teach dance, but stress the importance of being a kind, hard working individual.</strong></small></p>
                    <p class="mb-0"><small>They care about each student as a person, not just a dancer.</small></p>
                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>
                    <p style="color:seashell;"><small>Heather Storbeck</small></p>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>We love that this studio values character and modesty, along with excellence in dance.</strong></small></p>
                    <p class="mb-0"><small>The teachers have encouraged and nurtured our girls in their love of dance.</small></p>
                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>
                    <p style="color:seashell;"><small>Shari Peterson</small></p>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>My daughter loves the relationships she has built with other kids her age.</strong></small></p>
                    <p class="mb-0"><small>She looks forward to dance each night and had become a stronger more confident dancer</small></p>
                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>
                    <p style="color:seashell;"><small>Natasha Remis</small></p>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>Very clean and nice dance studio.</strong></small></p>
                    <p class="mb-0"><small>Our granddaughter is 22 months old and we got to watch her dance so it was awesome!</small></p>
                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>
                    <p style="color:seashell;"><small>Randy Schroeder</small></p>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>Our young woman is nurtured and challenged as a dancer, a student, a leader and a friend</strong></small></p>
                    <p class="mb-0"><small>A place in addition to their home and school that children are safe, cared for, and are able to grow</small></p>
                    <div style="width: 30px; height: 1px; background: seashell;" class="my-1"></div>
                    <p style="color:seashell;"><small>Janet Holter</small></p>
                </div>
            </div>
        </div>
        <div style="height: 67px;"></div>
        <div class="custom-shape-divider-bottom-1663853988">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container my-5 py-5" id="brand">
        <h2 class="text-center fw-bold" style="font-size: 2.75em;">Proudly partnering with these outstanding organizations</h2>
        <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.reedmusicstudios.com" target="_blank"><img src="/images-lava/partner1.jpeg" alt="logo"></a></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.viterbo.edu" target="_blank"><img src="/images-lava/partner4.png" alt="logo"></a></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://morethanjustgreatdancing.com" target="_blank"><img src="/images-lava/partner2.png" alt="logo"></a></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.lacrossesymphony.org" target="_blank"><img src="/images-lava/partner3.png" alt="logo"></a></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.chancetodancefoundation.org" target="_blank"><img src="/images-lava/logo-a-chance-to-dance.png" alt="logo"></a></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.couleeparenting.com" target="_blank"><img src="/images-lava/logo-coulee-parenting.jpg" alt="logo"></a></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.webercenterarts.org" target="_blank"><img src="/images-lava/logo-weber-center.png" alt="logo" style="filter: invert(100%);"></a></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.balletlacrosse.com" target="_blank"><img src="/images-lava/logo-blc-2.jpg" alt="logo"></a></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><a href="https://www.thewillowandgrace.com" target="_blank"><img src="/images-lava/logo-willow-and-grace.png" alt="logo"></a></div></div>
        </div>
    </div>

    <section id="guarantee">
        <div class="bg-red text-white py-5">
            <div class="d-flex justify-content-center">
                <img src="/images-lava/gauranteed-logo-crop.png" alt="" class="img-fluid">
            </div>
            <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Our Guarantee</h2>
            <p class="text-center txt-crimson" style="font-size: 1.75em;">You'll love your experience or we'll work with you to make it right!</p>
            <div class="d-flex justify-content-center">
                <a href="/fall"><div class="btn btn-lg btn-flip-danger shadow mx-4 text-white">Find Your Class</div></a>
                <a href="mailto:mistysdance@gmail.com?subject=Schedule A Call"><div class="btn btn-lg btn-flip-danger shadow mx-4 text-white">Schedule A Call</div></a>
            </div>
        </div>
    </section>

@endsection