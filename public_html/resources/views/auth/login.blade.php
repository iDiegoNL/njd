@extends('layouts.app')

@section('content')
    <style>
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui image header">
                <div class="content">
                    Nieuwjaarsduik Medewerkers Paneel
                </div>
            </h2>
            <form action="{{ route('login') }}" method="post" class="ui large form">
                {{ csrf_field() }}
                <div class="ui stacked secondary  segment">
                    <div class="field">
                        <div class="ui left icon input error {{ $errors->has('email') ? ' error' : '' }}">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mailadres" required autofocus>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input {{ $errors->has('email') ? ' error' : '' }}">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="Wachtwoord" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                            <label>Ingelogd blijven</label>
                        </div>
                    </div>
                    <button class="ui fluid large teal submit button" type="submit">Inloggen</button>
                </div>
            </form>
            @if ($errors->any())
                <div class="ui error message">
                    <div class="header">
                        Daar ging iets fout...
                    </div>
                    <ul class="list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="ui message">
                <a href="{{ route('password.request') }}">Wachtwoord vergeten?</a>
            </div>
        </div>
    </div>
@endsection
