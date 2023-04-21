<?php get_header(); ?>
    <section class="service-details sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-left">
                        <div class="h2"><?php the_title(); ?></div>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-right">
                        <ul>
                            <?php $args = array('post_type' => 'post','posts_per_page' => -1,);$products = new WP_Query( $args );
                                 if ( $products->have_posts() ) {
                                while ( $products->have_posts() ) {
                                    $products->the_post();?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>" ><i class="fa-solid fa-angle-right iconnn" style="color: #a64c18;"></i><p class="p1"><?php the_title(); ?></p></a>
                                    </li>
                                <?php } } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>