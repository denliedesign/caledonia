@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <h2 class="text-center">School Year Schedule</h2>
        <p class="lead text-center">
            2020/2021 School Season Dance Classes
            <br>
            <small>Class sizes are limited and fill fast</small>
        </p>
        <script type="text/javascript" src="https://app.jackrabbitclass.com/Openings.asp?id=383292&tblstyle=2&Session=2020-2021&sort=class"></script>
    </div>

@endsection
