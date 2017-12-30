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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



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
                    Wachtwoord Resetten
                </div>
            </h2>
            <form action="{{ route('password.email') }}" method="post" class="ui large form">
                {{ csrf_field() }}
                <div class="ui stacked secondary  segment">
                    <div class="field">
                        <div class="ui left icon input error {{ $errors->has('email') ? ' error' : '' }}">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mailadres" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>
                    <button class="ui fluid large teal submit button" type="submit">Reset Wachtwoord</button>
                </div>
            </form>
            @if ($errors->has('email'))
                <div class="ui error message">
                    <div class="header">
                        Daar ging iets fout...
                    </div>
                    <ul class="list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $errors->first('email') }}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                @if (session('status'))
                <div class="ui icon success message">
                    <i class="checkmark icon"></i>
                    <div class="content">
                        <div class="header">
                            Wachtwoord reset succesvol aangevraagd!
                        </div>
                        <p>{{ session('status') }}</p>
                    </div>
                </div>
                @endif

            <div class="ui message">
                <a href="https://nieuwjaarsduikijburg.nl/login">Terug naar inloggen</a>
            </div>
        </div>
    </div>
@endsection
