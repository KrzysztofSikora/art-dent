<?php
/*
Template Name: Contact
*/

get_header('custom'); ?>

<div class="container-fluid section-name">

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-4">
            <h1 class="section-name-h">Kontakt</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-2">
        </div>
    </div>
</div>
<div class="content-wrapper">

<section class="content-section-contact">

    <div class="container">

        <div class="row">
            <div class="col-lg-6 mr-auto order-lg-2">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h4 class="section-heading">Masz pytania lub chcesz się umówić na wizytę? </h4>
                <?php echo do_shortcode('[contact-form-7 id="118" title="Contact form 1"]') ?>
            </div>
            <div class="col-lg-5 ml-auto order-lg-1">
                <div id="map"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</section>
    <section class="content-section-contact">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 mr-auto order-lg-2">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h4 class="section-heading">Masz pytania lub chcesz się umówić na wizytę? </h4>
                    <?php echo do_shortcode('[contact-form-7 id="118" title="Contact form 1"]') ?>
                </div>
                <div class="col-lg-5 ml-auto order-lg-1">
                    <div id="map2"></div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </section>
</div>
<?php get_footer(); ?>












