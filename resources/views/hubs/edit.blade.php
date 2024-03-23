@extends('layouts.app-lava')
@section('title', 'Edit Hub | Caledonia Dance & Music Center')
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
        <h3 class="text-center py-5">Edit Hub</h3>
        <div class="container pb-5">
            <form action="{{ route('hubs.update', ['hub' => $hub]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('hubs.form')

                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>


@endsection
