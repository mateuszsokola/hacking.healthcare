@extends('layout')

@section('title', 'Upcoming Events - hacking.healthcare')
@section('page-name', 'listing-page')

@section('content')
    <div class="global-content">
        <div class="container">

            <!-- TODO: Add defered loading for images [Mateusz] -->
            <h1>Upcoming Events</h1>

            <ul class="hackathon-list">
                <li>
                    <div class="tile-hackathon" style="background: url('assets/berlin-small.jpg') no-repeat center center;">
                        <a class="inner-tile-hackathon" href="upcoming/berlin-2015">
                            <span class="valign">
                                <span class="hackathon-city">Berlin</span>
                                October 16-18
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="tile-hackathon">
                        <a
                            class="inner-tile-hackathon special-blue-opacity"
                            href="mailto:office@hacking.healthcare"
                            >
                        <span class="valign">
                            <span class="hackathon-city">Bring us to your city!</span>
                        </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection