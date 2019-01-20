<section id="works" class="works">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('our_portfolio'); ?></h2>
            <p><?php the_field('portfolio_text'); ?></p>
        </div>

        <?php

        $portfolio_categories = get_terms(['taxonomy'=>'portfolio_category']);

        if (!empty($portfolio_categories)): ?>

            <ul id="filters" class="clearfix text-center">
                <li><span class="filter active" data-filter="*">All</span></li>

                <?php foreach ($portfolio_categories as $term) : ?>
                    <li><span class="filter"
                              data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></span>
                    </li>

                <?php endforeach; ?>

            </ul>

        <?php endif; ?>



        <?php
        $portfolio = new WP_Query([
            'post_type' => "portfolio",
            'posts_per_page' => 8
        ]);
        if ($portfolio->have_posts()):
            ?>

            <div id="portfoliolist">
                <div class="row">
                    <?php while ($portfolio->have_posts()): ?>
                        <?php
                        $portfolio->the_post();
                        setup_postdata($portfolio->post);

                        $class = '';
                        $post_terms = wp_get_post_terms(get_the_ID(), ['taxonomy' => 'portfolio_category']);

                        foreach ($post_terms as $post_term) {
                            $class .= ' ' . $post_term->slug;
                        }

                        ?>


                        <div class="col-md-4 col-lg-3 portfolio <?php echo $class; ?>">
                            <div class="portfolio-wrapper">
                                <div class="works-img">
                                    <?php if (get_the_post_thumbnail($portfolio->post, 'portfolio')) : ?>
                                        <a href="<?php echo get_the_post_thumbnail_url($portfolio->post, 'portfolio'); ?>"
                                           data-fancybox="images">
                                            <?php the_post_thumbnail('portfolio'); ?>
                                        </a>
                                    <?php endif; ?>

                                </div>
                                <div class="works-info">
                                    <div class="label-text">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </div>
</section>
