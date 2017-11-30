<?php include( 'includes/config.inc.php' ); ?>
    <!doctype html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>
            <?php echo $page_title; ?> -
                <?php echo SITE_TITLE; ?>
        </title>
        <link rel="stylesheet" href="css/style.css" />
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
        <script src="https://use.fontawesome.com/b0dba73639.js"></script>
    </head>

    <body id="<?php echo strtolower ( $page_title ); ?>">
        <body>
        <div class="grid__item color-2">
				<header id="site-header">
				<a class="link link--surinami" href="https://stephanietran.ca/"><span data-letters-l="stephanie" data-letters-r="tran.ca">stephanietran.ca</span></a>
			</header>
       </div>
        
        
        
        
        <div id="wrapper">
            <?php include( 'includes/nav.inc.php' ); ?>
                <!-- page content begins -->