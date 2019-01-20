           <section id="services" class="services pt-10">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field('our_services'); ?></h2>
                        <p><?php the_field('services_text'); ?></p>
                    </div>


                    <?php
                    $services = new WP_Query([
                        'post_type' => "services",
                        'posts_per_page' => -1
                    ]);
                    $count = 0;
                    if ($services->have_posts()):
                        ?>
                        <div class="row">
                            <?php while ($services->have_posts()): ?>
                                <?php
                                $services->the_post();
                                setup_postdata($services->post);
                                $count++;
                                ?>

                                <div class="col-lg-4 col-md-6">
                                    <div class="servicebox">
                                        <div class="srv_desc">
                                            <h5 class="count"><?php echo sprintf("%02d", $count) ?> </h5>
                                            <h4><a href="index.html#"><?php the_title(); ?></a></h4>
                                            <p><?php the_content(); ?></p>
                                        </div>
                                    </div>
                                </div>


                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>

                    <?php wp_reset_postdata(); ?>





                    
                 
                </div>
            </section>