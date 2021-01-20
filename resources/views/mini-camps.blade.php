@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="text-center font-weight-bold">Frozen Friends Mini Camp</h2>
                <h4 class="text-center mb-3 lead">Saturday, February 27 <br><span class="badge badge-success mt-2">Ages 4-10*</span></h4>
                <p>
                    Enjoy a magical journey of dance, crafts and characters inspired by Elsa, Anna and Olaf from the hit movie "Frozen"!
                </p>
                <p class="font-weight-bold">
                    Ages 4-7 will attend camp from 9:30am-10:45am
                    <br>Ages 7-10 will attend camp from 11:00am-12:15pm
                </p>
                <p>
                    Recommended class attire is their age group's leotard color, pink convertible tights, and Revolution pink stretch ballet shoes.
                    <br>Class attire is available for purchase at Caledonia Dance & Music Center.  Dancers age 4 wear a pink leotard, kindergarten and first graders wear a lilac leotard, second and third graders wear a blue leotard and dancers fourth grade and up wear black leotards.
                </p>
                <p>
                    Tuition is $29 per dancer
                </p>
                <small class="text-muted mb-3">*Student must be 4 years old by September 1, 2020.</small>
            </div>
            <div class="col-sm-4">
                <img src="/images/snowflake.jpg" alt="snowflake" class="img-fluid border-green">
            </div>
        </div>
    </div>

@endsection
