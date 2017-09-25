<?php
/*
Template Name: Dla lekarzy
*/
get_header('custom'); ?>

<div class="container-fluid section-name">

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-4">
            <h1 class="section-name-h">Dla lekarzy</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-2">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">


        <?php


        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'dla',
            'posts_per_page' => 2,
            'paged' => $paged,

        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            ?>

            <?php
            while ($query->have_posts()) {
                $query->the_post();
                global $post;
                ?>


                <div class="col-md-2"></div>
                <div class="col-md-8 image-text">


                    <div class="row">
                        <div class="col-md-8">
                            <div class="date"><?php echo get_the_date(); ?></div>
                            <h4><strong><?php the_title(); ?></strong></h4>

                        </div>

                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img height="180" src="<?php the_field('obrazek'); ?>" alt="" class="img-fluid">

                        </div>
                        <div class="col-md-8">
                            <p class="post-text"><?php the_field('treść'); ?></p>
                        </div>
                    </div>

                    <hr>
                </div>
                <div class="col-md-2"></div>

                <?php
            }
            ?>
            </div>
            <div class="row ">
            <div class="col-md-12 text-center">

            <?php
            if ($query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>


                <div class="pagination-custom">

                    <nav class="prev-next-posts">
                        <div class="prev-posts-link">
                            <?php echo get_next_posts_link('Następne', $query->max_num_pages); // display older posts link ?>
                        </div>
                        <div class="next-posts-link">
                            <?php echo get_previous_posts_link('Poprzednie'); // display newer posts link ?>
                        </div>
                    </nav>

                </div>

                </div>

            <?php }


        } ?>
            </div>
</div>


<?php get_footer(); ?>












