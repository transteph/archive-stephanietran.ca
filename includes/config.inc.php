<?php
    //sets the site title in every spot that it is needed
    define( 'SITE_TITLE', 'Stephanie Tran' );
    //sets the time zone to use for all dates and times that are output
    define ( 'SITE_TIMEZONE', 'America/Toronto' );

//set the default timezone so that the date function shows the correct time for our location
    date_default_timezone_set(SITE_TIMEZONE);
