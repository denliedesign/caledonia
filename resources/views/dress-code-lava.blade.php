@extends('layouts.app-lava')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>


    <div class="bg-white">
        <div class="py-5" id="class-schedule">
            <h2 class="text-center font-staat-side">Uniform</h2>
            <div class="container">
                @can('update', \App\Text::class)
                    <div id="dress-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow font-syne-side">
                        <span class="fw-bold mx-3">dress text section A</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                onClick="AddTextName('dress'); AddTextSection('A');">
                            Create New
                        </button>
                        @include('/texts/form')
                    </div>
                @endcan
                <p>
                    @foreach($texts as $text)
                        @if($text->name == 'dress' && $text->section == 'A')
                            <div class="font-syne-side">{!! $text->content !!}</div>
                            @include('/texts/admin')
                        @endif
                    @endforeach
                </p>
{{--                <p class="font-syne-side">--}}
{{--                    <a href="https://forms.gle/E1zMNM6EqUUxJNK29" target="_blank">CDMC Online Merchandise Order Form</a>--}}
{{--                </p>--}}
                <div id="uniform">
                    <h4 class="text-center font-staat-side">Female Students</h4>
                    <div class="row font-syne-side">
                        <div class="col-sm d-flex justify-content-end">
                            <img src="/images/uniform-1.png" alt="" class="img-fluid" style="max-height: 500px;">
                        </div>
                        <div class="col-sm d-flex align-items-center">
                            <div>
                                <strong>Ages 2-4</strong>
                                <dl>
                                    <dt class="fw-normal">- Pink leotard/dress</dt>
                                    <dt class="fw-normal">- Pink tights</dt>
                                    <dt class="fw-normal">- Appropriate Class Shoes</dt>
                                    <dd>-   <u>Ballet:</u> Pink Revolution Full Sole Ballet Shoes</dd>
                                    <dd>-   <u>Acro:</u> Pink Revolution Full Sole Ballet Shoes</dd>
                                    <dd>-   <u>Tap:</u> Tan Ushell Tap Shoes</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="row font-syne-side">
                        <div class="col-sm d-flex justify-content-end">
                            <img src="/images/uniform-2.png" alt="" class="img-fluid" style="max-height: 500px;">
                        </div>
                        <div class="col-sm d-flex align-items-center">
                            <div>
                                <strong>K-1st Grade</strong>
                                <dl>
                                    <dt class="fw-normal">- Lilac leotard/dress</dt>
                                    <dt class="fw-normal">- Pink tights</dt>
                                    <dt class="fw-normal">- Appropriate Class Shoes</dt>
                                    <dd>-   <u>Acro:</u> Bare feet</dd>
                                    <dd>-   <u>Hip Hop:</u> Black Pastry Hip Hop Shoes</dd>
                                    <dd>-   <u>Tap:</u> Tan Ushell Tap Shoes</dd>
                                    <dd>-   <u>Ballet:</u> Pink Revolution Stretch Ballet Shoes</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="row font-syne-side">
                        <div class="col-sm d-flex justify-content-end">
                            <img src="/images/uniform-3.png" alt="" class="img-fluid" style="max-height: 500px;">
                        </div>
                        <div class="col-sm d-flex align-items-center">
                            <div>
                                <strong>2nd-3rd Grade</strong>
                                <dl>
                                    <dt class="fw-normal">- Blue leotard/dress</dt>
                                    <dt class="fw-normal">- Pink tights</dt>
                                    <dt class="fw-normal">- Appropriate Class Shoes</dt>
                                    <dd>-   <u>Acro:</u> Bare feet</dd>
                                    <dd>-   <u>Hip Hop:</u> Black Pastry Hip Hop Shoes</dd>
                                    <dd>-   <u>Tap:</u> Tan Ushell Tap Shoes</dd>
                                    <dd>-   <u>Ballet:</u> Pink Revolution Stretch Ballet Shoes</dd>
                                    <dd>-   <u>Jazz/Lyrical:</u> Tan Bloch Super Jazz Shoes</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="row font-syne-side">
                        <div class="col-sm d-flex justify-content-end">
                            <img src="/images/uniform-4.png" alt="" class="img-fluid" style="max-height: 500px;">
                        </div>
                        <div class="col-sm d-flex align-items-center">
                            <div>
                                <strong>4th+ Grade</strong>
                                <dl>
                                    <dt class="fw-normal">- Black leotard/dress</dt>
                                    <dt class="fw-normal">- Pink tights</dt>
                                    <dt class="fw-normal">- Appropriate Class Shoes</dt>
                                    <dd>-   <u>Acro:</u> Bare feet</dd>
                                    <dd>-   <u>Hip Hop:</u> Black Pastry Hip Hop Shoes</dd>
                                    <dd>-   <u>Tap:</u> Black Capezio Tap Shoes</dd>
                                    <dd>-   <u>Ballet:</u> Pink Revolution Stretch Ballet Shoes</dd>
                                    <dd>-   <u>Jazz/Lyrical:</u> Tan Bloch Super Jazz Shoes</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center font-staat-side">Male Students</h4>
                    <div class="row font-syne-side">
                        <div class="col-sm d-flex justify-content-end">
                            <img src="/images/uniform-5.png" alt="" class="img-fluid" style="max-height: 500px;">
                        </div>
                        <div class="col-sm d-flex align-items-center">
                            <div>
                                <dl>
                                    <dt class="fw-normal">- White tank top</dt>
                                    <dt class="fw-normal">- Black joggers</dt>
                                    <dt class="fw-normal">- Appropriate Class Shoes</dt>
                                    <dd>-   <u>Acro:</u> Bare feet</dd>
                                    <dd>-   <u>Hip Hop:</u> Black Pastry Hip Hop Shoes</dd>
                                    <dd>-   <u>Ballet:</u> White Revolution Stretch Ballet Shoes</dd>
                                    <dd>-   <u>Jazz:</u> Black Bloch Super Jazz Shoes</dd>
                                    <dd>-   <u>Tap:</u></dd>
                                    <dd style="padding-left: 15px;">&middot;    Ages 2-4 - Black Revolution Oxford Tap Shoes</dd>
                                    <dd style="padding-left: 15px;">&middot;    Kindergarten and Up - Black Capezio Oxford Tap Shoes</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
