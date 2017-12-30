<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/se/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-colvis-1.5.1/b-html5-1.5.1/b-print-1.5.1/sc-1.4.3/datatables.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/se/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/b-print-1.5.1/cr-1.4.1/datatables.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/se/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-colvis-1.5.1/b-html5-1.5.1/b-print-1.5.1/sc-1.4.3/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.semanticui.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.semanticui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/accordion.min.js"></script>
    {!! Charts::styles() !!}
</head>
<body>
<div class="ui container">
    <br>
    <div class="ui secondary menu">
        <div class="header item">Nieuwjaarsduik IJburg</div>
        <a class="active item">
            <i class="home icon"></i>
            Home
        </a>
        <a class="item" href="https://nieuwjaarsduikijburg.nl/enter">
            <i class="qrcode icon"></i>
            Scan Tickets
        </a>
        <div class="right menu">
            <div class="item">
                @if (DB::table('settings')->where('name', 'server')->value('production') == "false")
                <div class="positive basic ui button">Production mode staat uit</div>
                    @elseif (DB::table('settings')->where('name', 'server')->value('production') == "true")
                    <div class="negative labeled icon ui button"><i class="warning icon"></i>Production mode staat aan</div>
                @endif
            </div>
            <a class="ui item">
                <div class="ui simple dropdown">
                    <div class="text">{{ Auth::user()->name }}</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="header">
                            Mijn Account
                        </div>
                        <a class="divider"></a>
                        <a class="item" href="https://nieuwjaarsduikijburg.nl/profile">
                            <i class="user icon"></i>
                            Profiel
                        </a>
                        <div class="header">
                            Globaal
                        </div>
                        <a class="divider"></a>
                        <a class="item" href="https://nieuwjaarsduikijburg.nl/settings">
                            <i class="settings icon"></i>
                            Instellingen
                        </a>
                        <div class="divider"></div>
                        <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div class="ui animated negative basic button" tabindex="0">
                                <div class="visible content">Uitloggen</div>
                                <div class="hidden content">
                                    <i class="sign out icon"></i>
                                </div>
                            </div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </div>
                </div>
            </a>
        </div>
    </div>
@yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('Alerts::alerts')
</body>
</html>