<?php include( 'includes/config.inc.php' ); ?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-76008029-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-76008029-1');
        </script>

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
        <link href="https://fonts.googleapis.com/css?family=Righteous|Ubuntu:300,500" rel="stylesheet">
         <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <![endif]-->
        
    </head>

    <body id="<?php echo strtolower ( $page_title ); ?>">
                <!-- page content begins -->