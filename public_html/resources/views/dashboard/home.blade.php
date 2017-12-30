@extends('layouts.dashboard')

@section('content')

        <div class="ui divider"></div>
        <br>
        <div class="ui grid">
            <div class="four wide column">
                <div class="ui secondary vertical pointing fluid menu">
                    <a class="item active">
                        <i class="home icon"></i> Home
                    </a>
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/signups">
                        <i class="unordered list icon"></i> Aanmeldingen
                    </a>
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/statistics">
                        <i class="line chart icon"></i> Statistieken
                    </a>
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/staff">
                        <i class="users icon"></i> Medewerkers
                    </a>
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/settings">
                        <i class="settings icon"></i> Instellingen
                    </a>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui big aligned selection list">
                    <div class="item">
                        <div class="content">
                            <a class="header">{{ $groep1 }} personen om 12:00</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <a class="header">{{ $groep2 }} personen om 12:10</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <a class="header">{{ $groep3 }} personen om 12:20</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <a class="header">{{ $groep4 }} personen om 12:30</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <a class="header">{{ $groep5 }} personen om 12:40</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <a class="header">{{ $groep6 }} personen om 12:50</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <h2>Hallo, {{ Auth::user()->name }}! Het is momenteel {{ $current }}.</h2>
                {!! $chart->html() !!}
            </div>
            <div class="center aligned two column row">
                <div class="column">
                    <div class="ui segment">
                        Center aligned row
                    </div>
                </div>
                <div class="column">
                    <div class="ui segment">
                        Center aligned row
                    </div>
                </div>
            </div>
        </div>

    {!! Charts::scripts() !!}
    {!! $chart->script() !!}

@endsection
