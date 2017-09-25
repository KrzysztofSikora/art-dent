<?php get_header(); ?>



<!-- Navigation -->

<!-- Page Content -->
<section class="content-section-a">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <div class="square-service-block">
                    <a href="../endodoncja">
                        <h2 class="ssb-title text-center">
                            <img class="logo-mini pull-left"
                                 src="<?php echo get_stylesheet_directory_uri() . '/img/logo-mini.png' ?>">
                            Endodoncja</h2>
                    </a>
                </div>
            </div>

        </div>
        <div class="row">


            <div class="col-md-4">
                <div class="square-service-block">
                    <a href="../profilaktyka">
                        <h2 class="ssb-title text-center">
                            <img class="logo-mini pull-left"
                                 src="<?php echo get_stylesheet_directory_uri() . '/img/logo-mini.png' ?>">
                            Profilaktyka</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="square-service-block">
                    <a href="../sedacja-wziewna">
                        <h2 class="ssb-title text-center">
                            <img class="logo-mini pull-left"
                                 src="<?php echo get_stylesheet_directory_uri() . '/img/logo-mini.png' ?>">
                            Sedacja wziewna</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square-service-block">
                    <a href="../ortodoncja">


                        <h2 class="ssb-title text-center">
                            <img class="logo-mini pull-left"
                                 src="<?php echo get_stylesheet_directory_uri() . '/img/logo-mini.png' ?>">
                            Ortodoncja</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="square-service-block">
                    <a href="../stomatologia-zachowawcza">
                        <h2 class="ssb-title text-center">
                            <img class="logo-mini-2 pull-left"
                                 src="<?php echo get_stylesheet_directory_uri() . '/img/logo-mini.png' ?>">
                            Stomatologia zachowawcza</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="square-service-block">
                    <a href="../chirurgia-stomatologiczna">
                        <h2 class="ssb-title text-center">
                            <img class="logo-mini-2 pull-left"
                                 src="<?php echo get_stylesheet_directory_uri() . '/img/logo-mini.png' ?>">
                            Chirurgia stomatologiczna</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square-service-block">
                    <a href="../stomatologia-dziecieca">
                        <h2 class="ssb-title text-center">
                            <img class="logo-mini-2 pull-left"
                                 src="<?php echo get_stylesheet_directory_uri() . '/img/logo-mini.png' ?>">
                            Stomatologia <br/>dziecięca</h2>
                    </a>
                </div>
            </div>
        </div>

    </div>
<section class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-6 mr-auto order-lg-2">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h4 class="section-heading">Masz pytania lub chcesz się umówić na wizytę? </h4>
                <?php echo do_shortcode('[contact-form-7 id="118" title="Contact form 1"]') ?>
            </div>
            <div class="col-lg-6 ml-auto order-lg-1">
                <div id="map"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</section>

<?php get_footer(); ?>












