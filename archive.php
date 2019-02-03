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
                            <?php
                            $articlesCount = wp_count_posts('post');
                            if($articlesCount->publish > $articles->get('posts_per_page')) : ?>
                            <ul class="pagination">
                                <?php
                                $articlesPages = ceil(
                                        $articlesCount->publish / $articles->get('posts_per_page')
                                );

                                for($i = 1; $i <= $articlesPages; $i++) :
                                    $pageClassName = 'page-numbers';
                                    if($i == get_query_var('paged')) {
                                        $pageClassName .= ' current';
                                    }
                                ?>
                                    <li>
                                        <a class="<?php echo $pageClassName; ?>" href="<?php echo get_pagenum_link($i); ?>">
                                            <?php echo $i; ?>
                                        </a>
                                    </li>
                                <?php
                                endfor; ?>

                                <li>
                                    <a class="page-numbers" href="<?php echo get_pagenum_link(get_query_var('paged') + 1); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>


        <?php get_template_part('parts/contact'); ?>

    </div><!-- End Main Wrapper-->

<?php get_footer(); ?>