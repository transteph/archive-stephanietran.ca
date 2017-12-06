<?php include( 'includes/config.inc.php' ); ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>
            <?php echo $page_title; ?> -
                <?php echo SITE_TITLE; ?>
        </title>
        <meta name="author" content="Stephanie Tran" />
        <meta name="description" content="Toronto web developer Stephanie Tran's portfolio.">
        <meta name="keywords" content="Stephanie Tran, Stephanie, Tran, Toronto, web developer, portfolio, web design" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.gif" />
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/gridhover.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />

         <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <![endif]-->
       
        	<!-- jQuery -->
        <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

        <script src="https://use.fontawesome.com/b0dba73639.js"></script>
         <!--  Google Analytics   -->
         <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-76008029-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>

    <body id="<?php echo strtolower ( $page_title ); ?>">
                <!-- page content begins -->