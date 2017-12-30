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
                <a class="item active">
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
        <div class="twelve wide column" style="overflow:auto;">
            <script>
                $(document).ready(function() {
                    $('#users ').DataTable( {
                        dom: 'Bfrtip',
                        buttons: [

                            {
                                extend:    'copyHtml5',
                                text:      'Kopiëren <i class="copy icon"></i>',
                                titleAttr: 'Copy'
                            },
                            {
                                extend:    'excelHtml5',
                                text:      'Excel <i class="file excel outline icon"></i>',
                                titleAttr: 'Excel',
                                messageTop: 'Dit Excel document is gegenereerd op {{ $current }} door {{ Auth::user()->name }}',
                                title: 'Nieuwjaarsduik IJburg Export {{ $current }}'
                            },
                            {
                                extend:    'csvHtml5',
                                text:      'CSV <i class="file text outline icon"></i>',
                                titleAttr: 'CSV',
                                messageTop: 'Dit CSV document is gegenereerd op {{ $current }} door {{ Auth::user()->name }}',
                                title: 'Nieuwjaarsduik IJburg Export {{ $current }}'
                            },
                            {
                                extend:    'pdfHtml5',
                                text:      'PDF <i class="file pdf outline icon"></i>',
                                titleAttr: 'PDF',
                                orientation: 'landscape',
                                messageTop: 'Dit PDF document is gegenereerd op {{ $current }} door {{ Auth::user()->name }}',
                                title: 'Nieuwjaarsduik IJburg Export {{ $current }}',
                                pageSize: 'A3'
                            },
                            {
                                extend:    'print',
                                text:      'Printen <i class="print icon"></i>',
                                titleAttr: 'Print',
                                messageTop: 'Dit document is uitgeprint op {{ $current }} door {{ Auth::user()->name }}',
                                title: 'Nieuwjaarsduik IJburg Export {{ $current }}'
                            },
                            {
                                extend:    'colvis',
                                text:      'Kolommen <i class="columns icon"></i>',
                                titleAttr: 'Column Visibility'
                            }
                        ],
                        ajax: 'https://nieuwjaarsduikijburg.nl/api/signups',
                        "deferRender": true,
                        "columns": [
                            { "data": "id" },
                            { "data": "firstname" },
                            { "data": "tussenv" },
                            { "data": "lastname" },
                            { "data": "gender" },
                            { "data": "age" },
                            { "data": "email" },
                            { "data": "street" },
                            { "data": "hnumber" },
                            { "data": "postal" },
                            { "data": "area" },
                            { "data": "province" },
                            { "data": "country" },
                            { "data": "child" },
                            { "data": "tel" },
                            { "data": "njgroup" },
                            { "data": "created_at" }
                        ],
                        lengthChange: false,
                        "pagingType": "full_numbers",
                        keys: true,
                        scrollX: true,
                        "language": {
                            "loadingRecords": '<i class="huge spinner loading icon"></i><b><h2>Laden . . .</h2>',
                            "emptyTable":     '<i class="huge yellow warning circle icon"></i><b><h2>Geen data gevonden</h2>',
                            "info":           "_START_ - _END_ van _TOTAL_ aanmeldingen",
                            "infoEmpty":      "0 - 0 van 0 aanmeldingen",
                            "infoFiltered":   "(filtered from _MAX_ total entries)",
                            "lengthMenu":     "Show _MENU_ entries",
                            "processing":     '<i class="huge spinner loading icon"></i><b><h2>Laden . . .</h2>',
                            "search":         "Zoeken:",
                            "zeroRecords":    '<i class="huge yellow warning circle icon"></i><b><h2>Geen data gevonden</h2>',
                            "paginate": {
                                "first":      '<i class="angle double left icon"></i>',
                                "last":       '<i class="angle double right icon"></i>',
                                "next":       '<i class="angle right icon"></i>',
                                "previous":   '<i class="angle left icon"></i>'
                            }
                        }
                    } );
                } );

            </script>
            <div style="overflow:auto;">
                <table id="users" class="ui striped selectable table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Tussenvoegsel</th>
                        <th>Achternaam</th>
                        <th>Geslacht</th>
                        <th>Leeftijd</th>
                        <th>E-mailadres</th>
                        <th>Straatnaam</th>
                        <th>Huisnummer</th>
                        <th>Postcode</th>
                        <th>Stad/Dorp</th>
                        <th>Provincie</th>
                        <th>Land</th>
                        <th>Met kind</th>
                        <th>Telefoonnummer</th>
                        <th>Tijd</th>
                        <th>Aangemeld op</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    </div>

@endsection
