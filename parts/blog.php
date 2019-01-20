<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <h2><?php the_field('news_blog'); ?></h2>
            <p><?php the_field('blog_text'); ?></p>
        </div>


        <?php
        $articles = new WP_Query([
            'post_type' => "post",
            'posts_per_page' => 3
        ]);
        if ($articles->have_posts()):
            ?>
            <div class="row">
                <?php while ($articles->have_posts()): ?>
                    <?php $articles->the_post();
                    setup_postdata($articles->post); ?>

                    <div class="col-md-6 col-lg-4">
                        <div class="blog_post">
                            <div class="post_img">
                                <a href="index.html#">
                                    <?php the_post_thumbnail("article") ?>
                                </a>
                            </div>
                            <div class="post_content">
                                <div class="post_header">
                                    <h2 class="post_title"><a href="index.html#"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="read_more"><a href="index.html#">Go to article</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>


    </div>
</section>