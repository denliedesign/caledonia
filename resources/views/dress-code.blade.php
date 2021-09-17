@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>


    <div class="bg-white">
        <div class="py-5" id="class-schedule">
            <h2 class="text-center">Attire</h2>
            <div class="container">
                @can('update', \App\Text::class)
                    <div id="dress-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
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
                            {!! $text->content !!}
                            @include('/texts/admin')
                        @endif
                    @endforeach
                </p>
            </div>
        </div>
    </div>

@endsection
