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
            <div class="row text-center">


                <div class="col-lg-6 ml-auto">
                    <div class="ground">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-contact">
                                    <li><h3 class="color-red">Gabinet Kraków</h3></li>
                                    <li>ul. Kobierzyńska 63</li>
                                    <li>30-001 Kraków</li>
                                    <li>tel. 12 353 22 23</li>
                                    <li>tel. 782 313 878</li>

                                </ul>
                                <ul class="list-contact">
                                    <li><h5 class="color-red">Godziny otwarcia</h5></li>
                                    <li>Pon.-Pt.: 8:00-20:00</li>
                                    <li>Sobota: 8:00-14:00</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="map"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 ml-auto">
                    <div class="ground">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-contact">
                                    <li><h3 class="color-red">Gabinet Rudnik</h3></li>
                                    <li>ul. Dolna 400</li>
                                    <li>32-440 Sułkowice, Rudnik</li>
                                    <li>tel. 691 572 353</li>
                                    <li>tel. 535 122 322</li>

                                </ul>
                                <ul class="list-contact">
                                    <li><h5 class="color-red">Godziny otwarcia</h5></li>
                                    <li>Pon.-Pt.: 8:00-20:00</li>
                                    <li>Sobota: 8:00-14:00</li>
                                </ul>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div id="map2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container -->
        <div class="container contact-form-container">

            <div class="row">
                <div class="col-lg-6 mr-auto">
                    <p>Jako zespół stawiamy sobie ambitne cele. Wierzymy, że kreują one nową jakość. Wciąż się
                        rozwijamy. Jesteśmy profesjonalistami, nie boimy się podejmować kolejnych wyzwań, to one
                        dostarczają nam nowych doświadczeń.
                        Nasza wiedza i umiejętności pomogły wielu pacjentom. Zachęcamy i Państwa do skorzystania z
                        naszej oferty.</p>
                </div>
                <div class="col-lg-6 ml-auto">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h4 class="section-heading">Masz pytania lub chcesz się umówić na wizytę? </h4>
                    <?php echo do_shortcode('[contact-form-7 id="118" title="Contact form 1"]') ?>
                </div>

            </div>

        </div>
        <!-- /.container -->
    </section>


</div>
<?php get_footer(); ?>












