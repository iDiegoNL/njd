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
                <a class="item active">
                    <i class="settings icon"></i> Instellingen
                </a>
            </div>
        </div>
        <div class="twelve wide column">
            <h4 class="ui dividing header">Nieuwjaarsduik Instellingen</h4>
            <div class="ui icon error message">
                <i class="warning sign icon"></i>
                <div class="content">
                    <div class="header">
                        Let op!
                    </div>
                    <p>Zet production mode <b>alleen</b> aan als de duik gestart is. Dit is <b>niet</b> gemaakt voor het testen.</p>
                </div>
            </div>
            <form class="ui form" method="post" action="https://nieuwjaarsduikijburg.nl/settings/production">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h2>
                    Production mode staat momenteel @if ($production == "false") uit @elseif ($production == "true") aan @endif
                </h2>
                <div class="field">
                    @if ($production == "false")
                        <button class="positive ui button" type="submit">Zet production mode aan</button>
                        @elseif ($production == "true")
                        <button class="negative ui button" type="submit">Zet production mode uit</button>
                    @endif
                </div>
            </form>

            <h4 class="ui horizontal divider header">
                <i class="calendar icon"></i>
                Duik tijden
            </h4>

            <table class="ui celled table">
                <thead>
                <tr>
                    <th class="eight wide">Tijd</th>
                    <th class="five wide">Status</th>
                    <th class="two wide"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($times as $njgroups)
                    <tr>
                        <td>{{ $njgroups->time }}</td>
                        @if( $njgroups->status == "enabled")
                            <td class="positive">Aan</td>
                        @else
                            <td class="negative">Uit</td>
                        @endif
                        @if( $njgroups->status == "enabled")
                            <td>
                                <a class="ui compact negative button" href="https://nieuwjaarsduikijburg.nl/settings/njgroups?time={{ $njgroups->time }}">
                                    Zet uit
                                </a>
                            </td>
                        @else
                            <td>
                                <a class="ui compact positive button" href="https://nieuwjaarsduikijburg.nl/settings/njgroups?time={{ $njgroups->time }}">
                                    Zet aan
                                </a>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
