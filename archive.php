<?php

/**
 * Template Name: Archives
 */

get_header('single');
the_post();
?>


    <div class="main-wrapper">
        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-8 main-content">
                        <div class="blog-list">

                            <?php

                            $articles = new WP_Query([
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'paged' => get_query_var('paged')
                            ]);

                            while ($articles->have_posts()) {

                                $articles->the_post();
                                setup_postdata($articles->post);
                                get_template_part('parts/article');

                            }

                            wp_reset_postdata();

                            ?>

                        </div>

                        <div class="pagination-div">
                            <ul class="pagination">
                                <li><a class="page-numbers current" href="blog.html#">1</a></li>
                                <li><a class="page-numbers" href="blog.html#">2</a></li>
                                <li><a class="page-numbers" href="blog.html#">3</a></li>
                                <li><a class="page-numbers" href="blog.html#"><i
                                                class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>


        <?php get_template_part('parts/contact'); ?>

    </div><!-- End Main Wrapper-->

<?php get_footer(); ?>