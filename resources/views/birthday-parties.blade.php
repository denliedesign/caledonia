@extends('layouts.app')
@section('content')

    <div class="bg-white">

        <div class="banner-wrap">
            <div class="banner"></div>
        </div>

        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <img src="/images/birthday-banner.jpg" alt="birthday cake" class="img-fluid border-green">
            </div>
            <h2 class="text-center mt-3">Want to plan a unique birthday party for your child?</h2>
            <p class="lead text-center">
                We take the work out and put tons of fun in!!!
            </p>
            <p>
                Caledonia Dance & Music Center provides a custom party experience for every child of every age.  Instead of a hectic environment full of children attending numerous parties, your CDMC party is private and personal.  All your party goers interact together in an experience fun for the entire group.  Parents my stay to enjoy the party or drop off their child and come back later for pick up.  Let us tell you more about how we can make your day extra special.
            </p>
        </div>

        <div class="background-green py-3 mb-5">
            <div class="container d-flex align-items-center">
                <div class="row">
                    <div class="col-sm px-3 border-right border-white">
                        <h4 class="text-center">Age</h4>
                        <p>
                            Parties are ideal for ages 3 and up.  We can customize a party for 2 year olds.
                        </p>
                    </div>
                    <div class="col-sm px-3">
                        <h4 class="text-center">Let us serve you!</h4>
                        <ul>
                            <li>Party packages starting at $175.</li>
                            <li>CDMC members receive $20 off your party package.</li>
                            <li>Call to plan your party today!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-around align-items-center pb-5">
            <div class="row">
                <div class="col-sm">
                    <img src="/images/birthday-1.jpg" alt="img-fluid" class="my-1">
                </div>
                <div class="col-sm">
                    <img src="/images/birthday-2.jpg" alt="img-fluid" class="my-1">
                </div>
            </div>
        </div>

    </div>

@endsection
