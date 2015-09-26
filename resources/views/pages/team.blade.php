@extends('layout')

@section('title', 'Team - hacking.healthcare')
@section('page-name', 'team-page')

@section('content')
    <div class="global-content">
        <div class="container">
            <h1>Team</h1>
            <ul class="person-hlist">
                <li>
                    <div class="photo-person">
                        <img
                            src="assets/team-fdebong.jpg"
                            alt=""
                            width="200"
                            height="200">
                    </div>
                    <span class="first-name-person">Fredrik</span>
                    <span class="last-name-person">Debong</span>
                    <div class="social-links">
                        <a href="https://www.facebook.com/fdebong" target="_blank">
                            <span class="icon-facebook"></span>
                            <span class="only-screen-readers">Facebook</span>
                        </a>
                        <a href="https://twitter.com/fdebong" target="_blank">
                            <span class="icon-twitter"></span>
                            <span class="only-screen-readers">Twitter</span>
                        </a>
                        <a href="https://mysugr.com/" target="_blank">
                            <span class="icon-home"></span>
                            <span class="only-screen-readers">Home Page</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="photo-person">
                        <img
                                src="assets/team-sness.jpg"
                                alt=""
                                width="200"
                                height="200">
                    </div>
                    <span class="first-name-person">Stephanie</span>
                    <span class="last-name-person">Ness</span>
                    <div class="social-links">
                        <a href="https://www.facebook.com/StephanieNess1989" target="_blank">
                            <span class="icon-facebook"></span>
                            <span class="only-screen-readers">Facebook</span>
                        </a>
                        <a href="https://at.linkedin.com/in/nessstephanie" target="_blank">
                            <span class="icon-linkedin"></span>
                            <span class="only-screen-readers">Linkedin</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="photo-person">
                        <img
                                src="assets/team-msokola.jpg"
                                alt=""
                                width="200"
                                height="200">
                    </div>
                    <span class="first-name-person">Matt</span>
                    <span class="last-name-person">Sokola</span>
                    <div class="social-links">
                        <a href="https://www.facebook.com/mateusz.sokola" target="_blank">
                            <span class="icon-facebook"></span>
                            <span class="only-screen-readers">Facebook</span>
                        </a>
                        <a href="https://at.linkedin.com/pub/mateusz-sokola/72/b20/770" target="_blank">
                            <span class="icon-linkedin"></span>
                            <span class="only-screen-readers">Linkedin</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="photo-person">
                        <img
                                src="assets/team-cweichselbaum.jpg"
                                alt=""
                                width="200"
                                height="200">
                    </div>
                    <span class="first-name-person">Christian</span>
                    <span class="last-name-person">Weichselbaum</span>
                    <div class="social-links">
                        <a href="https://www.facebook.com/weichselbaum" target="_blank">
                            <span class="icon-facebook"></span>
                            <span class="only-screen-readers">Facebook</span>
                        </a>
                        <a href="https://at.linkedin.com/in/christianweichselbaum" target="_blank">
                            <span class="icon-linkedin"></span>
                            <span class="only-screen-readers">Linkedin</span>
                        </a>
                    </div>
                </li>
            </ul>

            <div class="text-center">
                <p>Would you like to organize an event with us?</p>
                <a href="mailto:office@hacking.healthcare" class="button">Join Our Team</a>
            </div>
        </div>
    </div>
@endsection