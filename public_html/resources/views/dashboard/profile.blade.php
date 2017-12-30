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

            @if ($success == 1)
                    <div class="ui positive icon message">
                        <i class="checkmark icon"></i>
                        <div class="content">
                            <div class="header">
                                Profiel succesvol aangepast!
                            </div>
                            <p>De aangepaste gegevens zijn succesvol verwerkt.</p>
                        </div>
                    </div>
                @endif

            <form class="ui form" method="post" action="https://nieuwjaarsduikijburg.nl/profile/update">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h4 class="ui dividing header">Profiel bewerken</h4>
                <div class="field">
                    <label>Naam</label>
                    <input name="name" value="{{ Auth::user()->name }}" type="text" required>
                </div>
                <div class="field">
                    <label>E-mailadres</label>
                    <input name="email" value="{{ Auth::user()->email }}" type="email" required>
                </div>
                <div class="required field">
                    <label>Wachtwoord</label>
                    <input name="password" placeholder="Wachtwoord" type="password" required>
                </div>
                <div class="required field">
                    <label>Bevestig wachtwoord</label>
                    <input name="password_confirmation" placeholder="Bevestig achtwoord" type="password" required>
                </div>
                <button class="ui button" type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection
