<?php
get_header('single');
the_post();
?>

    <div class="main-wrapper">
        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-8 main-content">
                        <div class="blog-list">
                            <?php get_template_part('parts/article'); ?>
                        </div>

                        <div class="inner_posts">
                            <div class="row">
                                <?php

                                $previous = get_previous_post();
                                $next = get_next_post();

                                ?>

                                <?php if ($previous) : ?>
                                <div class="col-md-6">
                                    <div class="inner-post prev_post">
                                        <?php echo get_the_post_thumbnail($previous, "blog-next"); ?>
                                        <div class="post_block">
                                            <a class="link_to" href="<?php echo get_the_permalink($previous); ?>">Previous Post</a>
                                            <h4>
                                                <a href="<?php echo get_the_permalink($previous); ?>">
                                                    <?php echo get_the_title(); ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>


                                <?php if ($next) : ?>
                                <div class="col-md-6">
                                    <div class="inner-post next_post">
                                        <?php echo get_the_post_thumbnail($next, "blog-next"); ?>
                                        <div class="post_block">
                                            <a class="link_to" href="<?php echo get_the_permalink($next); ?>">Next Post</a>
                                            <h4>
                                                <a href="<?php echo get_the_permalink($next); ?>">
                                                    <?php echo get_the_title(); ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php get_sidebar(); ?>

                </div>
            </div>
        </section>

        <?php get_template_part('parts/contact'); ?>
    </div><!-- End Main Wrapper-->

<?php get_footer(); ?>