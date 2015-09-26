@extends('layout')

@section('title', 'Past Events - hacking.healthcare')
@section('page-name', 'listing-page')

@section('content')
    <div class="global-content">
        <div class="container">
            <!-- TODO: Add defered loading for images [Mateusz] -->
            <h1>Past Events</h1>

            <ul class="hackathon-list">
                <li>
                    <div class="tile-hackathon" style="background: url('assets/vienna-2-small.jpg') no-repeat center center;">
                        <a
                            class="inner-tile-hackathon"
                            href="https://www.facebook.com/media/set/?set=a.1561600160751326.1073741830.1553212924923383&type=3"
                            target="_blank">
                            <span class="valign">
                                <span class="hackathon-city">Vienna #1</span>
                                January 2015
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="tile-hackathon" style="background: url('assets/vienna-1-small.jpg') no-repeat center center;">
                        <a
                            class="inner-tile-hackathon"
                            href="https://www.facebook.com/media/set/?set=a.1622724671305541.1073741832.1553212924923383&type=3"
                            target="_blank">
                            <span class="valign">
                                <span class="hackathon-city">Vienna #2</span>
                                May 2015
                            </span>
                        </a>
                    </div>
                </li>
                <li class="wide">
                    <div class="tile-hackathon">
                        <a
                            class="inner-tile-hackathon special-red-opacity"
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