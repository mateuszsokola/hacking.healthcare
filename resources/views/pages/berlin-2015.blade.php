@extends('layout')

@section('title', 'Berlin 2015 October 16-18 - hacking.healthcare')
@section('page-name', 'hackathon-page')

@section('content')

<!-- TODO: Add defered loading for images [Mateusz] -->
<div class="splash" style="background: url({{url('assets/city-full.jpg')}}) center center no-repeat;">
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
                <a href="#mentors">Mentors</a>
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

    <p>Healthcare is broken, it needs some loving. So let’s hack it.</p>

    <p>At the second Health Hackathon in Vienna, let us use what we have: modern technology, a mix of artificial intelligence, design, big data, game development, user experience and modern medicine.</p>

    <p>Healthcare is broken, it needs some loving. So let’s hack it.</p>

    <p>At the second Health Hackathon in Vienna, let us use what we have: modern technology, a mix of artificial intelligence, design, big data, game development, user experience and modern medicine.</p>
</div>

<div id="location" class="location">
    <div class="container">
        <h1>Location</h1>

        <div class="container">
            <div class="col left-col">
                <div id="map"></div>
            </div>
            <div class="col">
                Valencia College - Collaborative Design Center<br>
                1800 S. Kirkman Road<br>
                Building 10 - 3rd Floor<br>
                Orlando, FL 32811<br>

                <a href="#tickets" class="button large-button">Get a Ticket</a>
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
                <th colspan="2">Friday, 21th July</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>08:00</td>
                <td>Doors open</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            <tr>
                <td>08:00</td>
                <td>Doors open</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            </tbody>
        </table>

        <table>
            <thead>
            <tr>
                <th colspan="2">Friday, 21th July</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>08:00</td>
                <td>Doors open</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            <tr>
                <td>08:00</td>
                <td>Doors open</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            </tbody>
        </table>

        <table>
            <thead>
            <tr>
                <th colspan="2">Friday, 21th July</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>08:00</td>
                <td>Doors open</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            <tr>
                <td>08:00</td>
                <td>Doors open</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            <tr>
                <td>09:00</td>
                <td>Our friends from Microsoft welcome you to the amazing venue!</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div id="mentors" class="mentors">
    <div class="container">
        <h1>Mentors</h1>

        <div class="container mentor">
            <div class="col left-col">
                <div class="photo-person">
                    <img
                            src="assets/me.jpg"
                            alt=""
                            width="225"
                            height="200">
                </div>
                <div class="social-links">
                    <a href="http://facebook.com">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-twitter"></span>
                        <span class="only-screen-readers">Twitter</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-home"></span>
                        <span class="only-screen-readers">Home Page</span>
                    </a>
                </div>
            </div>
            <div class="col">
                <span class="full-name-person">Christoph Sauermann</span>
                <span class="profession-person">MD</span>
                <p>Christoph Sauermann studied business economics and held various positions at international pharmaceutical companies. As General Manager Wyeth Austria and Commercial Chair for Austria/CEE/CIS, he was in charge of various international health and e-health projects. He was also president of the Forum of Research Pharmaceutical Companies in Austria and board member of the Austrian Pharmaceutical Industry Association. Participating in the Austrian Pharmaceutical Negotiation Team for all relevant health care reform projects led to a deep knowledge of the health care system.</p>
                <p>After 17 years industry experience he founded in 2010 mediclass Gesundheitsclub, a new and medical health concept of private practices, which offers ambulatory medical services to patients in an affordable manner.</p>
            </div>
        </div>

        <div class="container mentor">
            <div class="col left-col">
                <div class="photo-person">
                    <img
                            src="assets/me.jpg"
                            alt=""
                            width="225"
                            height="200">
                </div>
                <div class="social-links">
                    <a href="http://facebook.com">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-twitter"></span>
                        <span class="only-screen-readers">Twitter</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-home"></span>
                        <span class="only-screen-readers">Home Page</span>
                    </a>
                </div>
            </div>
            <div class="col">
                <span class="full-name-person">Christoph Sauermann</span>
                <span class="profession-person">MD</span>
                <p>Christoph Sauermann studied business economics and held various positions at international pharmaceutical companies. As General Manager Wyeth Austria and Commercial Chair for Austria/CEE/CIS, he was in charge of various international health and e-health projects. He was also president of the Forum of Research Pharmaceutical Companies in Austria and board member of the Austrian Pharmaceutical Industry Association. Participating in the Austrian Pharmaceutical Negotiation Team for all relevant health care reform projects led to a deep knowledge of the health care system.</p>
                <p>After 17 years industry experience he founded in 2010 mediclass Gesundheitsclub, a new and medical health concept of private practices, which offers ambulatory medical services to patients in an affordable manner.</p>
            </div>
        </div>

    </div>
</div>

<div id="sponsors" class="container">
    <h1>Sponsors</h1>

    <ul class="partner-list">
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
    </ul>
</div>

<div id="partners" class="container">
    <h1>Partners</h1>

    <ul class="partner-list">
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="" width="210" height="60">
                <span class="only-screen-readers">Facebook</span>
            </a>
        </li>
        <li>
            <a href="http://facebook.com">
                <img src="assets/microsoft.png" alt="">
                <span class="only-screen-readers">Facebook</span>
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
                            src="assets/me.jpg"
                            alt=""
                            width="200"
                            height="190">
                </div>
                <span class="first-name-person">Adam</span>
                <span class="last-name-person">Kutanski</span>
                <div class="social-links">
                    <a href="http://facebook.com">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-twitter"></span>
                        <span class="only-screen-readers">Twitter</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-home"></span>
                        <span class="only-screen-readers">Home Page</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="photo-person">
                    <img
                            src="assets/me.jpg"
                            alt=""
                            width="200"
                            height="190">
                </div>
                <span class="first-name-person">Adam</span>
                <span class="last-name-person">Kutanski</span>
                <div class="social-links">
                    <a href="http://facebook.com">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-twitter"></span>
                        <span class="only-screen-readers">Twitter</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-home"></span>
                        <span class="only-screen-readers">Home Page</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="photo-person">
                    <img
                            src="assets/me.jpg"
                            alt=""
                            width="200"
                            height="190">
                </div>
                <span class="first-name-person">Adam</span>
                <span class="last-name-person">Kutanski</span>
                <div class="social-links">
                    <a href="http://facebook.com">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-twitter"></span>
                        <span class="only-screen-readers">Twitter</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-home"></span>
                        <span class="only-screen-readers">Home Page</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="photo-person">
                    <img
                            src="assets/me.jpg"
                            alt=""
                            width="200"
                            height="190">
                </div>
                <span class="first-name-person">Adam</span>
                <span class="last-name-person">Kutanski</span>
                <div class="social-links">
                    <a href="http://facebook.com">
                        <span class="icon-facebook"></span>
                        <span class="only-screen-readers">Facebook</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-twitter"></span>
                        <span class="only-screen-readers">Twitter</span>
                    </a>
                    <a href="http://twitter.com">
                        <span class="icon-home"></span>
                        <span class="only-screen-readers">Home Page</span>
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
            <iframe src="//eventbrite.com/tickets-external?eid=16720005988&ref=etckt" frameborder="0" height="500" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
            <div style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:100%; text-align:left;" >
                <a class="powered-by-eb" style="color: #dddddd; text-decoration: none;" target="_blank" href="http://www.eventbrite.com/r/etckt">Powered by Eventbrite</a>
            </div>
        </div>
        <div class="visible-below-tablet">
            <span class="encouragement">Are you ready to join us?</span>
            <a href="#" class="button large-button">Get a Ticket</a>
        </div>
    </div>
</div>

@endsection