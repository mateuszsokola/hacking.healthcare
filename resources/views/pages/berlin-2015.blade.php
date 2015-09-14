@extends('layout')

@section('title', 'Berlin 2015 October 16-18 - hacking.healthcare')
@section('page-name', 'hackathon-page')

@section('scripts')
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9tKJWqg9uY5ExRVN50uagt2owAIGb1CE&callback=initMap">
</script>
@endsection

@section('content')

<!-- TODO: Add defered loading for images [Mateusz] -->
<div class="splash" style="background: url({{url('assets/berlin-large.jpg')}}) center center no-repeat;">
    <div class="inner-splash">
        <div class="container">
            <h1>Berlin</h1>
            <span class="date">October 16-18</span>
        </div>
    </div>
</div>

<nav class="secondary-nav">
    <div class="container">
        <ul class="menu-nav">
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#location">Location</a>
            </li>
            <li>
                <a href="#schedule">Schedule</a>
            </li>
            <li>
                <a href="#sponsors">Sponsors</a>
            </li>
            <li>
                <a href="#organizers">Organizers</a>
            </li>
            <li>
                <a href="#tickets" class="button small-button">Get a Ticket</a>
            </li>
        </ul>

    </div>
</nav>

<div id="about" class="container">
    <h1>About</h1>

    <span class="small-title">hacking.healthcare is bringing the Health Hackathon to Berlin!</span>

    <p>Hackers, Doctors, Nurses, Designers, Patients and everyone who wants to save a life - get your ticket!</p>

    <span class="small-title">What is a hackathon?</span>

    <p>A hackathon, as a concept, is simple. Starting on Friday, we come together to find groups to work in. Until Sunday evening we build prototypes, concepts and projects which we believe in.</p>

    <p>Taking part in the event, you are coached and helped by experts, you have access to resources and people whom you would never meet "outside". It is a weekend of free thinking with focus on current issues and projects of passion. But, you need to deliver! This we believe, is how change happens. Not just talk, but action.</p>

    <span class="small-title">What can we achieve?</span>
    <p>In Vienna on our first event, 66 health hackers came up with 17 ideas. Out of this 8 ideas survived and groups were formed which worked on them in collaborative and interdisciplinary fashion. Out of those 8 projects only one didn’t make it to it’s finalization. The remaining diverse set of 7 projects were then presented and applauded by our participants. Among those 7 projects were:</p>
    <p>mySugr Buddy - Improving diabetes therapy with the help of artificial intelligence and surveys in a game like manner.</p>
    <p>Speech Therapy Games - To support children in their speech correction, this team developed a game that helps them with the pronunciation of words, syllables and the creation of noises.</p>
    <p>Sigmund Frog - Children’s waiting rooms are boring and could be way more exciting! With the help of an XBOX and Kinect, children are educated in a game like manner how to brush their teeth. Currently being developed together with Tieto Enator and MS!</p>
</div>

<div id="location" class="location">
    <div class="container">
        <h1>Location</h1>

        <div class="container">
            <div class="col left-col">
                <div id="map" data-lat="52.518023" data-lon="13.388064" data-zoom="15"></div>
            </div>
            <div class="col">
                BASE_camp<br>
                Mittelstraße 51<br>
                10117 Berlin<br>
                Germany, Europe<br>
                <a href="http://www.basecamp.info/">www.basecamp.info</a><br>

                <a href="http://hh-berlin-2015.eventbrite.com" class="button large-button">Get a Ticket</a>
            </div>
        </div>
    </div>
</div>

<div id="schedule" class="schedule">
    <div class="container">
        <h1>Schedule</h1>

        <table>
            <thead>
            <tr>
                <th colspan="2">Friday, 16th October</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <table>
            <thead>
            <tr>
                <th colspan="2">Saturday, 17th October</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <table>
            <thead>
            <tr>
                <th colspan="2">Sunday, 18th October</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<div id="sponsors" class="container">
    <h1>Sponsors</h1>

    <ul class="partner-list">
        <li>
            <a href="http://facebook.com">
                <img src="{{url('assets/sponsor-ibm.png')}}" alt="IBM" width="210" height="60">
            </a>
        </li>
    </ul>
</div>

<div id="organizers" class="organizers">
    <div class="container">
        <h1>Organizers</h1>
        <ul class="person-hlist">
            <li>
                <div class="photo-person">
                    <img
                            src="{{url('assets/team-fdebong.jpg')}}"
                            alt=""
                            width="200"
                            height="200">
                </div>
                <span class="first-name-person">Fredrik</span>
                <span class="last-name-person">Debong</span>
                <div class="social-links">
                    <a href="https://www.facebook.com/fdebong">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="https://twitter.com/fdebong">
                        <span class="icon-twitter"></span>
                        <span class="only-screen-readers">Twitter</span>
                    </a>
                    <a href="https://mysugr.com/">
                        <span class="icon-home"></span>
                        <span class="only-screen-readers">Home Page</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="photo-person">
                    <img
                            src="{{url('assets/team-sness.jpg')}}"
                            alt=""
                            width="200"
                            height="200">
                </div>
                <span class="first-name-person">Stephanie</span>
                <span class="last-name-person">Ness</span>
                <div class="social-links">
                    <a href="https://www.facebook.com/StephanieNess1989">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="https://at.linkedin.com/in/nessstephanie">
                        <span class="icon-linkedin"></span>
                        <span class="only-screen-readers">Linkedin</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="photo-person">
                    <img
                            src="{{url('assets/team-msokola.jpg')}}"
                            alt=""
                            width="200"
                            height="200">
                </div>
                <span class="first-name-person">Matt</span>
                <span class="last-name-person">Sokola</span>
                <div class="social-links">
                    <a href="https://www.facebook.com/mateusz.sokola">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="https://at.linkedin.com/pub/mateusz-sokola/72/b20/770">
                        <span class="icon-linkedin"></span>
                        <span class="only-screen-readers">Linkedin</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="photo-person">
                    <img
                            src="{{url('assets/team-cweichselbaum.jpg')}}"
                            alt=""
                            width="200"
                            height="200">
                </div>
                <span class="first-name-person">Christian</span>
                <span class="last-name-person">Weichselbaum</span>
                <div class="social-links">
                    <a href="https://www.facebook.com/weichselbaum">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="https://at.linkedin.com/in/christianweichselbaum">
                        <span class="icon-linkedin"></span>
                        <span class="only-screen-readers">Linkedin</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>

<div id="tickets" class="tickets">
    <div class="container">
        <h1>Tickets</h1>
        <div class="visible-above-tablet">
            <iframe src="//eventbrite.com/tickets-external?eid=18595040266&ref=etckt" frameborder="0" height="500" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
            <div style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:100%; text-align:left;" >
                <a class="powered-by-eb" style="color: #dddddd; text-decoration: none;" target="_blank" href="http://www.eventbrite.com/r/etckt">Powered by Eventbrite</a>
            </div>
        </div>
        <div class="visible-below-tablet">
            <span class="encouragement">Are you ready to join us?</span>
            <a href="http://hh-berlin-2015.eventbrite.com" class="button large-button">Get a Ticket</a>
        </div>
    </div>
</div>

@endsection