@extends('layouts.app-lava')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner-staff"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="bg-white">
        <div class="container pb-5 pt-3">
            <div class="row">
{{--                <div class="col-sm">--}}
{{--                    <img src="/images-lava/about-us-mistys-dance.jpg" alt="" class="img-fluid shadow rounded mb-2">--}}
{{--                </div>--}}
                <div class="col-sm">
                    <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">Meet The Team</h3>
{{--                    <p class="font-syne" style="font-size: 22px;">--}}
{{--                        <span style="font-family: 'Pacifico', cursive; font-size: 30px;">Hi!</span>--}}
{{--                        <br><br>--}}
{{--                        My name is Misty Lown and I am the founder of Misty's Dance Unlimited, LLC, or "MDU" as we call it around here <3. I started the studio on a simple principle that we have stayed TRUE to over the last two and a half decades–we are "More Than Just Great Dancing!®".--}}
{{--                    </p>--}}
                </div>
            </div>
            <p class="font-syne" style="font-size: 22px;">
                Welcome to Caledonia Dance & Music Center! Our studio is dedicated to providing the best possible dance and music education to children of all ages and skill levels. Our experienced instructors are qualified to teach ballet, jazz, tap, acro, lyrical, and hip hop, as well as piano, guitar, and voice lessons.
                <br><br>
                At Caledonia Dance & Music Center, we believe in going beyond just great technique. We strive to build character and a strong sense of community among our students. Our talented and dedicated instructors work to create a positive and supportive environment where children can grow and thrive.
                <br><br>
                We are proud to have a team of instructors who are passionate about dance and music, and who are dedicated to helping our students achieve their goals. Our instructors bring their unique skills and experiences to the studio, and are committed to helping each student reach their full potential.
                <br><br>
                We believe that a strong connection between the instructor and student is key to a successful learning experience, and we are committed to fostering this relationship through our variety of classes and personalized attention. Whether you are a beginner or an advanced dancer or musician, our team will work with you to help you reach your goals and make the most of your time at Caledonia Dance & Music Center.
                <br><br>
                Join us today and discover the magic of dance and music!
            </p>
{{--                        <h3 class="font-staat" style="font-size: 100px; line-height: 0.9em;">Meet The Team</h3>--}}
        </div>
    </div>

    <div class="bg-red-solid py-5" style="position: relative; height: 100%;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">

                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/aimee.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Aimee<br>Grinnell</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Admin Team & Dance Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/alli.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Alli<br>Tucker</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Dance Instructor</span><br>
                    </p>
                </div>
{{--                <div class="col-sm mt-3 text-white" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images/staff/christina.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: : cover; height: 382.50px;">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Christina<br>Price</div>--}}
{{--                    </div>--}}
{{--                    <p class="font-syne">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.1em;">Music Instructor</span><br>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-sm mt-3 text-white" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images/staff-christina.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: : cover; height: 382.50px;">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Christina<br>White</div>--}}
{{--                    </div>--}}
{{--                    <p class="font-syne">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.1em;">Admin Team</span><br>--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/heidi.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Heidi<br>LaFranboise</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Dance Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/staff-jean.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Jean<br>Maxa</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Admin Team</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/lindsey.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Lindsey<br>Wilson</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Dance Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/melissa.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Melissa<br>Giegling</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Admin Team</span><br>
                    </p>
                </div>
{{--                <div class="col-sm mt-3 text-white" style="height: 100%;">--}}
{{--                    <div style="position: relative;">--}}
{{--                        <img src="/images/staff-molly.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: : cover; height: 382.50px;">--}}
{{--                        <div id="triangle-bottomleft-staff"></div>--}}
{{--                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Molly<br>Hisey</div>--}}
{{--                    </div>--}}
{{--                    <p class="font-syne">--}}
{{--                        <span class="txt-yellow" style="font-size: 1.1em;">Admin Team & Dance Instructor</span><br>--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/monique.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Monique<br>Rodriguez</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Director</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/olivia.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Olivia<br>Sharkey</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Dance Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/paige.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Paige<br>Redner</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Admin Team & Dance Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/victoria.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Victoria<br>Sonza</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Admin Team</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/miles.jpg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Miles<br>Sonza</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Dance Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/staff-ian-crop.jpeg" alt="staff member" class="img-fluid" style="height: 382.50px; width: 255px; object-fit: cover;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Ian Sonza</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Music Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/staff-new-tanya-crop.png" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Tanya Freund</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Music Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/staff-demi.jpeg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Demi<br>Sonza</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Jr. Faculty</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/staff-new-nalana.png" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Nalana LaFramboise</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Dance Instructor</span><br>
                    </p>
                </div>
                <div class="col-sm mt-3 text-white" style="height: 100%;">
                    <div style="position: relative;">
                        <img src="/images/staff/staff-chandra.jpeg" alt="staff member" class="img-fluid" style="width: 255px; object-fit: cover; height: 382.50px;">
                        <div id="triangle-bottomleft-staff"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 0;">Chandra Criffield</div>
                    </div>
                    <p class="font-syne">
                        <span class="txt-yellow" style="font-size: 1.1em;">Admin Team</span><br>
                    </p>
                </div>


            </div>
        </div>
        <div style="height: 300px;"></div>
        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

@endsection
