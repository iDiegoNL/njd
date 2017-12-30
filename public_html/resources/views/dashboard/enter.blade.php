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
<div class="ui container middle aligned">
    <div class="ui segments middle aligned">
        <div class="ui segment">
            <div class="ui embed">
                <video id="preview"></video>
            </div>
        </div>
        <div class="ui segment center aligned">
            <form method="get" action="https://nieuwjaarsduikijburg.nl/check/id">
                <div class="ui action input">
                    <input placeholder="#1234" type="number" name="id">
                    <button class="ui teal right labeled icon button">
                        <i class="search icon"></i>
                        Check!
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false });
    scanner.addListener('scan', function (content) {
        window.location = 'https://nieuwjaarsduikijburg.nl/check/email?id=' + content;
    });
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[1]);
        } else {
            document.getElementById("error").innerHTML = "No cameras found";
        }
    }).catch(function (e) {
        console.error(e);
    });
</script>
</body>
</html>