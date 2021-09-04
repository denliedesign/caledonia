@extends('layouts.app')

@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <form action="{{ route('texts.update', ['text' => $text]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('texts.edit-form')
            </form>
        </div>
    </div>

@endsection
