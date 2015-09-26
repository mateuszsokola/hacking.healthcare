@extends('layout')

@section('title', 'Sponsors - hacking.healthcare')
@section('page-name', 'sponsors-page')

@section('content')
    <div class="global-content">
        <div class="container">
            <h1>Sponsors</h1>
            <ul class="partner-list">
                <li>
                    <a href="http://www.bayer.de/" target="_blank">
                        <img src="{{url('assets/sponsor-bayer.png')}}" alt="Bayer" width="125" height="125">
                    </a>
                </li>
                <li>
                    <a href="https://www.grants4apps.com/" target="_blank">
                        <img src="{{url('assets/sponsor-grants4apps.png')}}" alt="Grants4Apps" width="210" height="60">
                    </a>
                </li>
                <li>
                    <a href="http://www.ibm.com/de/de/" target="_blank">
                        <img src="{{url('assets/sponsor-ibm.png')}}" alt="IBM" width="210" height="60">
                    </a>
                </li>
                <li>
                    <a href="http://www.microsoft.com/" target="_blank">
                        <img src="{{url('assets/sponsor-microsoft.png')}}" alt="Microsoft" width="210" height="60">
                    </a>
                </li>
            </ul>

            <h1>Partners</h1>
            <ul class="partner-list">
                <li>
                    <a href="http://codete.co/" target="_blank">
                        <img src="{{url('assets/partner-codete.png')}}" alt="Codete" width="210" height="60">
                    </a>
                </li>
                <li>
                    <a href="http://health20berlin.com/" target="_blank">
                        <img src="{{url('assets/partner-health20.jpeg')}}" alt="Health20 Berlin" width="100" height="125">
                    </a>
                </li>
                <li>
                    <a href="http://www.inits.at/" target="_blank">
                        <img src="{{url('assets/partner-inits.png')}}" alt="Inits" width="168" height="84">
                    </a>
                </li>
                <li>
                    <a href="http://www.lisavienna.at/" target="_blank">
                        <img src="{{url('assets/partner-lisa.png')}}" alt="LisaVienna" width="210" height="60">
                    </a>
                </li>
                <li>
                    <a href="http://mysugr.com/" target="_blank">
                        <img src="{{url('assets/partner-mysugr.png')}}" alt="mySugr" width="125" height="125">
                    </a>
                </li>
                <li>
                    <a href="http://pioneers.io/" target="_blank">
                        <img src="{{url('assets/partner-pioneers.png')}}" alt="Pioneers" width="210" height="60">
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection