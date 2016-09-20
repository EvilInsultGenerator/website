<!doctype html>
<html lang="en">
<head>

<meta http-equiv="refresh" content="0; URL=https://evilinsult.com/download.php">

    <!-- jQuery -->
    <script src="scripts/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Generate evil insults">

    <meta name="application-name" content="Evil Insult Generator">
    <meta name="robots" content="index,follow,noodp">
    <meta name="googlebot" content="index,follow">

    <meta name="theme-color" content="#E64545">

    <!-- Add to homescreen -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- More info: https://developer.chrome.com/multidevice/android/installtohomescreen -->

    <meta name="google" value="notranslate">

    <!-- Android -->
    <meta property="al:android:url" content="applinks://docs">
    <meta property="al:android:app_name" content="App Links">
    <meta property="al:android:package" content="org.applinks">
    <!-- More info: http://applinks.org/documentation/ -->

    <!-- For IE 11, Chrome, Firefox, Safari, Opera -->
    <link rel="icon" href="favicons/favicon-16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="favicons/favicon-32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="favicons/favicon-48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="favicons/favicon-62.png" sizes="62x62" type="image/png">

    <title><?php echo $lang['PAGE_TITLE']; ?></title>


    <script src="https://use.fontawesome.com/9ee63b7ac0.js" async></script>


    <!-- Select2 -->
    <script src="scripts/select2.min.js" defer></script>

    <script type="text/javascript" src="scripts/cookieinfo.min.js" defer></script>
    <script type="text/javascript" src="scripts/jquery.cookie.min.js" defer></script>
    <script type="text/javascript">

        // PHP Cookie to JS
        var lang = "<?php echo $cLang; ?>";
        function Generate() {
            $.ajax({
                url: "generate_insult.php?lang=" + lang,
                type: 'get',
                success: function(response){
                    $('#generated_insult').html(response);
                },
                cache: false
            });
        }
        $(document).ready(function () {
            $("#lang_select").val($.cookie("lang"));
            Generate()
        });

    </script>

    <script>
        $(function() {
            // bind change event to select
            $('#lang_select').on('change', function () {
                lang = $(this).val(); // get selected value
                $.cookie('lang', lang);
               
                document.location.reload(true);
            });
        });
    </script>


    <!-- Piwik -->
    <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var u = "//poopjournal.rocks/piwik/";
            _paq.push(['setTrackerUrl', u + 'piwik.php']);
            _paq.push(['setSiteId', 8]);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'piwik.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <noscript><p><img src="//poopjournal.rocks/piwik/piwik.php?idsite=8" style="border:0;" alt=""/></p></noscript>
    <!-- End Piwik Code -->


<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//evilinsult.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//evilinsult.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->


    <link rel="stylesheet" href="css/layouts/pure-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/layouts/mobile.css">

    <!--[if lte IE 8]>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

    <![endif]-->
    <!--[if gt IE 8]><!-->

    <link rel="stylesheet" href="css/layouts/grids-responsive-min.css ">

    <!--<![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/layouts/marketing.css">
    <!--<![endif]-->
    <link href="css/layouts/select2.min.css" rel="stylesheet"/>

<meta name="carrot-page-owner" content="LJVK-WPRB-JQWG-CVKJ" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72331953-13', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>



</body>
</html>
