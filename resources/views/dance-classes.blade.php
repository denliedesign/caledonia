@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>


    <div class="bg-white">
        <div class="py-5" id="class-schedule">
            <h2 class="text-center">Caledonia Dance & Music Center</h2>
            <div class="container">
                <div class="d-flex justify-content-center">
                    @include('refer-modal')
                </div>
            </div>
        </div>
    </div>

    <!--to do: remove app layout so that there's no nav and it becomes a sole landing page. Then spice it up! -->

@endsection
