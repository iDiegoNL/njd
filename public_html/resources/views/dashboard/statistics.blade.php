@extends('layouts.dashboard')

@section('content')
    <div class="ui divider"></div>
    <br>
    <div class="ui grid">
        <div class="four wide column">
            <div class="ui secondary vertical pointing fluid menu">
                <a class="item" href="https://nieuwjaarsduikijburg.nl/home">
                    <i class="home icon"></i> Home
                </a>
                <a class="item" href="https://nieuwjaarsduikijburg.nl/signups">
                    <i class="unordered list icon"></i> Aanmeldingen
                </a>
                <a class="item active">
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
            <div class="ui raised segment">
                <h3>{{ $groep1 }} personen om 12:00</h3>
                <h3>{{ $groep2 }} personen om 12:10</h3>
                <h3>{{ $groep3 }} personen om 12:20</h3>
                <h3>{{ $groep4 }} personen om 12:30</h3>
                <h3>{{ $groep5 }} personen om 12:40</h3>
                <h3>{{ $groep6 }} personen om 12:50</h3>
                <div class="ui divider"></div>
                <h3>Totaal {{ $signups }} aanmeldingen</h3>
            </div>
        </div>
        <div class="four wide column">
            <div class="ui raised segment">
                {!! $timechart->html() !!}
            </div>
        </div>
        <div class="four wide column">
            <div class="ui raised segment">
                <h3>{{ $men }} mannen</h3>
                <h3>{{ $woman }} vrouwen</h3>
                <h3>{{ $children }} kinderen</h3>
                <div class="ui divider"></div>
                <h4>{{ $male1 }}/{{ $female1 }} mannen/vrouwen om 12:00</h4>
                <h4>{{ $male2 }}/{{ $female2 }} mannen/vrouwen om 12:10</h4>
                <h4>{{ $male3 }}/{{ $female3 }} mannen/vrouwen om 12:20</h4>
                <h4>{{ $male4 }}/{{ $female4 }} mannen/vrouwen om 12:30</h4>
                <h4>{{ $male5 }}/{{ $female5 }} mannen/vrouwen om 12:40</h4>
                <h4>{{ $male6 }}/{{ $female6 }} mannen/vrouwen om 12:50</h4>
            </div>
        </div>
        <div class="center aligned two column row">
            <div class="column">
                <div class="ui segment">
                    {!! $daychart->html() !!}
                </div>
            </div>
            <div class="column">
                <div class="ui segment">
                    {!! $geochart->html() !!}
                </div>
            </div>
        </div>
    </div>

    {!! Charts::scripts() !!}
    {!! $geochart->script() !!}
    {!! $timechart->script() !!}
    {!! $daychart->script() !!}

@endsection
