@extends('layouts.app-lava')
@section('content')

    <div class="bg-white">
        <div class="container py-5" id="camp-schedule">
            <h2 class="text-center font-staat-side">Camps</h2>
            <script type="text/javascript" src="https://app.jackrabbitclass.com/jr3.0/Openings/OpeningsJS?OrgID=383292&Session=Camps&hidecols=Gender,Ages,Session,Openings&sort=Class"></script>
        </div>
    </div>

    <style>
        .jr-reg-col a {
            background: #3d1951;
            color: white;
            padding: 4px 8px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>

@endsection
