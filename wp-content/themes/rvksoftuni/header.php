<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- favicon -->
    <link rel="shortcut icon" href="http://rossivk.local/wp-content/themes/rvksoftuni/images/favicon.png" type="image/x-icon">


</head>

<body id="home" <?php body_class(); ?>>

    <!-- Header Starts -->
    <div class="navbar-wrapper">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand" href="<?php echo esc_url(get_home_url()); ?>">monkey digital</a>
                    <!-- #Logo Ends -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <?php
                wp_nav_menu(array(
                    'menu'             => 'primary_menu',
                    'theme_location'   => 'primary_menu',
                    'menu_class'       => 'nav navbar-nav navbar-right',
                    'container_class'  => 'navbar-collapse  collapse',
                ));
                ?>
                <!-- #Nav Ends -->
            </div>
        </div>


    </div>
    <!-- #Header Starts -->