@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5">
        <h2 class="text-center mb-3">The Lesson Lab</h2>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    We have prepared FAQ's to answer parents' questions about The Lesson Lab™ and to help parents decide whether or not it would be a good fit to support their child’s education for fall.
                </p>
                <a href="/images/lesson-lab-faq.pdf" target="_blank">View our FAQ's</a>
                <br><br>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScWHmnoljj81jXtKrpnHfaYSgMWeVgiIpH4LwDb-GZ6qM4SFg/viewform" target="_blank">Please fill out our form if you are interested in signing up</a>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <img src="/images/lesson-lab.jpg" alt="sanitizer, books, and a backpack" class="img-fluid border-green">
            </div>
        </div>
    </div>

@endsection
