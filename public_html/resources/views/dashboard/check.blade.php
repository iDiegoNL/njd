<!DOCTYPE html>
<html>
<head>
    <title>Aanmeldingen Bekijken</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
    <script type="text/javascript" src="js/instascan.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body > .grid {
            height: 100%;
            background-color: {{ $color }};
        }
        .column {
            max-width: 450px;
        }
    </style>
</head>
<body>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <div class="ui raised very padded text container segment middle aligned center aligned">

                @isset($exists)
                    <h2 class="ui header">Aanmelding geaccepteerd!</h2>
                    <i class="massive check circle icon {{ $color }}"></i>
                    <h2><b>Tijd: {{ $njgroup }}</b></h2>
                    <h3><b>Kleur: {{ $color }}</b></h3>
                    <h3><b>Naam: {{ $name }}</b></h3>
                @endisset

                @empty($exists)
                    <h2 class="ui header">Aanmelding ongeldig...</h2>
                    <i class="massive remove circle icon red"></i>
                @endempty
                <br><br>
                <a class="ui labeled icon primary button" href="https://nieuwjaarsduikijburg.nl/enter">
                    <i class="arrow left icon"></i>
                    Terug
                </a>
        </div>
    </div>
</div>
</body>
