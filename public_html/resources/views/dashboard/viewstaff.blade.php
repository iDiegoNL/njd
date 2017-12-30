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
                    <a class="item active">
                        <i class="users icon"></i> Medewerkers
                    </a>
                    <a class="item" href="https://nieuwjaarsduikijburg.nl/settings">
                        <i class="settings icon"></i> Instellingen
                    </a>
                </div>
            </div>
            <div class="twelve wide column">
                <table class="ui striped table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Gemaakt op</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $users)
                        <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $data->render() !!}
                <a class="ui right floated small primary labeled icon button" href="https://nieuwjaarsduikijburg.nl/staff/create">
                    <i class="user icon"></i> Medewerker toevoegen
                </a>
            </div>
        </div>
    </div>

@endsection