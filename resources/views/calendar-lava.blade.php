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
        <div class="container py-5">
            <h2 class="text-center mt-3 font-staat-side">2023-2024 Calendar</h2>
            <div class="d-flex justify-content-center">
                <table class="font-syne-side">
                    <x-calendar date="August 28-31" event="First Week of Classes for the 2023-24 Season"/>
                    <x-calendar date="Sept 4" event="Obsv. Labor Day"/>
                    <x-calendar date="Oct 16-19" event="Inter-sessional Break #1"/>
                    <x-calendar date="Oct 31" event="Obsv. Halloween"/>
                    <x-calendar date="Nov 21-24" event="Thanksgiving Break"/>
                    <x-calendar date="Dec 7" event="Nutcracker Rehearsals - No Class"/>
                    <x-calendar date="Dec 22-Jan 5" event="Christmas Break"/>
                    <x-calendar date="Jan 15" event="MLK Day - Open for Classes"/>
                    <x-calendar date="Feb 12-16" event="Inter-sessional Break #2"/>
                    <x-calendar date="Mar 29-Apr 7" event="Spring Break"/>
                    <x-calendar date="May 27" event="Obsv. Memorial Day"/>
                    <x-calendar date="June 3-6" event="Dance Recital Dress Rehearsals"/>
                    <x-calendar date="June 10-13" event="Dance Recitals"/>
                </table>
            </div>
        </div>
    </div>



@endsection
