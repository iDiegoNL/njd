<!DOCTYPE html>
<html>
<head>
    <title>Succesvol aangemeld!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/notyf.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="js/uikit.min.js" ></script>
    <script src="js/uikit-icons.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
</head>
<body>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '154982988452678',
            xfbml      : true,
            version    : 'v2.10'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1612560615506896', {
        em: 'insert_email_variable'
    });
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1612560615506896&ev=PageView&noscript=1"
    /></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110126308-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110126308-1');
</script>
<!-- End of Global site tag (gtag.js) - Google Analytics -->
<script>
    fbq('track', 'CompleteRegistration');
</script>
<div class="uk-card uk-card-default uk-card-large uk-position-center">
    <div class="uk-card-media-bottom uk-cover-container uk-width-small uk-align-center uk-margin-top animated rollIn">
        <img src="images/yes.svg" class="" alt="">
    </div>
    <div class="uk-card-body">
        <div class="uk-container uk-container-small">
    <h3 class="uk-card-title">Je hebt je succesvol aangemeld!</h3>
    <p class="uk-text-justify uk-text-break">
        Binnen enkele minuten krijg je een email met de gegevens die je nodig hebt om op de dag van de duik binnen te komen.
        Print deze email uit en zorg er voor dat de QR code en het nummer daar onder goed zichtbaar zijn.<br>
        Heb je de email na een tijdje nog niet binnen gekregen? Check je spam folder.
    </p>
            <p class="uk-text-justify uk-text-break">
                Kan je niet wachten? <a class="uk-link-muted" href="https://nieuwjaarsduikijburg.nl/tips">Lees alvast de tips en informatie!</a>
            </p>
            <div class="fb-like uk-container-small" data-href="https://nieuwjaarsduikijburg.nl" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>