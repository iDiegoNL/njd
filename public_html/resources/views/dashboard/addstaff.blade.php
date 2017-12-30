@extends('layouts.dashboard')

@section('content')


        <div class="ui divider"></div>
        <br>
        <div class="ui grid">
            <div class="four wide column">
                <div class="ui secondary vertical pointing fluid menu">
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/home">
                        Home
                    </a>
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/signups">
                        Aanmeldingen
                    </a>
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/statistics">
                        Statistieken
                    </a>
                    <a class="item active">
                        Medewerkers
                    </a>
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/settings">
                        <i class="settings icon"></i> Instellingen
                    </a>
                </div>
            </div>
            <div class="twelve wide column">
                @if ($errors->any())
                    <div class="ui error message">
                        <div class="header">
                            Oeps, daar ging iets fout...
                        </div>
                        <ul class="list">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="ui form" method="post" action="store">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h4 class="ui dividing header">Staff account aanmaken</h4>
                    <div class="required field">
                        <label>Gebruikersnaam</label>
                        <input name="name" placeholder="Gebruikersnaam" type="text" autofocus required>
                    </div>
                    <div class="required field">
                        <label>E-mailadres</label>
                        <input name="email" placeholder="E-mailadres" type="email" required>
                    </div>
                    <div class="required field">
                        <label>Wachtwoord</label>
                        <input name="password" placeholder="Wachtwoord" type="password" required>
                    </div>
                    <button class="ui button" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
