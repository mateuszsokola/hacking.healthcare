@extends('layout')

@section('title', 'hacking.healthcare')
@section('page-name', 'home-page')

@section('content')
    <div class="splash" style="background: url('assets/home-splash.jpg') center center no-repeat;">
        <div class="inner-splash">
            <div class="container">
                <h1>
                    <span class="headline">Doctors, Designers, Coders and Doers.</span>
                    Together we can make a difference.
                    <span class="breakline-below-desktop">Let’s hack healthcare.</span>
                </h1>

                <a href="/upcoming" class="button">Attend an event</a>
            </div>
        </div>
    </div>
@endsection