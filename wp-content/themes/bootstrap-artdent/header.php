<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- todo clear -->
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


    <link href="<?php echo get_stylesheet_directory_uri() . '/vendor/lumos/css/lumos.css' ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' ?>"
          rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
          type="text/css">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>"/>


    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>

    <div class="row hidden-md-down absolute-banner">
        <div class="col-md-2">
        </div>
        <div class="col-md-3">
            <img class="logo" width="253" src="<?php echo get_stylesheet_directory_uri() . '/img/an-dent-logo.png' ?>" alt="First">

        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <ul class="telephone-list ">
                <li>Lorem First dolor sit</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> 00 000 00 00</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> 000 000 000</li>
            </ul>
        </div>
    </div>

<nav class="navbar navbar-expand-lg navbar-light absolute-top" role="navigation">
    <div class="container ">
<!--        <a class="navbar-brand" href="#">Start Bootstrap</a>-->
        <img class="logo hidden-lg-up photo-ipad" width="254" src="<?php echo get_stylesheet_directory_uri() . '/img/an-dent-logo.png' ?>" alt="Second">
        <ul class="telephone-list hidden-sm-down hidden-lg-up">
            <li>Lorem SECOND dolor sit</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> 00 000 00 00</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> 000 000 000</li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>



        <?php
        wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => "navbarResponsive",
                'menu_class' => 'nav navbar-nav navbar-right',
                'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',


                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker())
        );
        ?>

    </div>
</nav>




<div class="headerslider">
    <div
        style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/1.jpg' ?>); background-repeat: no-repeat;background-position: center; position: absolute; top: 0px; left: 0px; display: block; z-index: 2; opacity: 0.6; width: 100%; height: 100%;"></div>
    <div
        style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/2.jpg' ?>); background-repeat: no-repeat;background-position: center; position: absolute; top: 0px; left: 0px; display: none; z-index: 1; width: 100%; height: 100%; opacity: 0;"></div>
    <div
        style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/3.jpg' ?>); background-repeat: no-repeat;background-position: center; position: absolute; top: 0px; left: 0px; display: none; z-index: 1; width: 100%; height: 100%; opacity: 0;"></div>
    <div
        style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/4.jpg' ?>); background-repeat: no-repeat;background-position: center; position: absolute; top: 0px; left: 0px; display: none; z-index: 1; width: 100%; height: 100%; opacity: 0;"></div>
    <div
        style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/5.jpg' ?>); background-repeat: no-repeat;background-position: center; position: absolute; top: 0px; left: 0px; display: none; z-index: 1; width: 100%; height: 100%; opacity: 0;"></div>
</div>


    <div class="headerslider-2">
        <div
            style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/1.jpg' ?>); background-repeat: no-repeat; background-size: 100%;background-position: center; position: absolute; top: 0px; left: 0px; display: block; z-index: 2; opacity: 0.6; width: 100%; height: 100%;"></div>
        <div
            style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/2.jpg' ?>); background-repeat: no-repeat;background-size: 100%;background-position: center; position: absolute; top: 0px; left: 0px; display: none; z-index: 1; width: 100%; height: 100%; opacity: 0;"></div>
        <div
            style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/3.jpg' ?>); background-repeat: no-repeat;background-size: 100%;background-position: center; position: absolute; top: 0px; left: 0px; display: none; z-index: 1; width: 100%; height: 100%; opacity: 0;"></div>
        <div
            style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/4.jpg' ?>); background-repeat: no-repeat;background-size: 100%;background-position: center; position: absolute; top: 0px; left: 0px; display: none; z-index: 1; width: 100%; height: 100%; opacity: 0;"></div>
        <div
            style="background-image: url(<?php echo get_stylesheet_directory_uri() .'/img/5.jpg' ?>); background-repeat: no-repeat;background-size: 100%;background-position: center; position: absolute; top: 0px; left: 0px; display: none; z-index: 1; width: 100%; height: 100%; opacity: 0;"></div>
    </div>


    <div class="container owner">
        <div class="website-title">
            <h1 id="main-header-h">Stomatologia bez granic</h1>

        </div>
        <div class="owner-container"></div>
    </div>



    <div class="container-full-height">

