<?php
get_header('single');
the_post();
?>


<div class="main-wrapper">
    <section class="inner-page">
        <div class="container">
            <div class="singlepage-details-content">
                <div class="service-details-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="service-details">
                    <div class="full_content">
                        <h6><?php the_field('subheading'); ?></h6>
                        <h2 class="project_title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        </div>
                </div>
            </div>

            <div class="service_post-inner">
                <h2 class="project_title"><?php the_field('offers'); ?></h2>


                    <?php if( have_rows('offers__repeter') ): ?>

                    <div class="service_post-list">

                            <?php while( have_rows('offers__repeter') ): the_row(); ?>

                                <div class="service_post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="service_post-img">
                                                <?php if (get_sub_field('imedge')) : ?>
                                                    <img src="<?php echo get_sub_field('imedge')['url']; ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="service_post-content">
                                                <div class="service_post-header">
                                                    <h4><?php the_sub_field('heading'); ?></h4>
                                                </div>
                                                <div class="service_post-text">
                                                    <p><?php the_sub_field('content'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>

                    </div>

                    <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="team" class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">


                    <?php if( have_rows('service_experts') ): ?>

                        <div class="row">

                            <?php while( have_rows('service_experts') ): the_row(); ?>



                                <div class="col-lg-6">
                                    <div class="team_member">
                                        <?php if (get_sub_field('foto')) : ?>
                                            <img src="<?php echo get_sub_field('foto')['url']; ?>" />
                                        <?php endif; ?>
                                        <div class="team_member_inner">
                                            <h4><?php the_sub_field('name'); ?></h4>
                                            <h6><?php the_sub_field('position'); ?></h6>
                                            <p><?php the_sub_field('content'); ?></p>
                                        </div>
                                    </div>
                                </div>




                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>


                </div>
                <div class="col-lg-3">
                    <div class="section-title">
                        <h2>Service Experts</h2>
                        <p>Lorem ipsum dolor sit amet ut dolor cons ectet ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonials" class="testimonials testimonials2">
        <div class="container">
            <div class="section-title">
                <h2>Service Testimonial</h2>
                <p>Lorem ipsum dolor sit, consectet ipsum dolor sit</p>
            </div>
            <div class="owl-carousel owl-theme testimonial_carousel2">
                <div class="item">
                    <div class="testibox">
                        <div class="testi-img">
                            <img src="images/testimonial/reviewer-1.png" alt="">
                        </div>
                        <div class="testi-content">
                            <ul>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                            </ul>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit eaque ipsa ab illo inventore veritatis et quasi architecto  voluptatem quia.Sed ut perspiciatis</p>
                            <h4>Jeny Doe</h4>
                            <h6>CEO, Advertising Corp</h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testibox">
                        <div class="testi-img">
                            <img src="images/testimonial/reviewer-2.png" alt="">
                        </div>
                        <div class="testi-content">
                            <ul>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star-half"></i></li>
                            </ul>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit eaque ipsa ab illo inventore veritatis et quasi architecto  voluptatem quia.Sed ut perspiciatis</p>
                            <h4>Jeny Doe</h4>
                            <h6>CEO, Advertising Corp</h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testibox">
                        <div class="testi-img">
                            <img src="images/testimonial/reviewer-1.png" alt="">
                        </div>
                        <div class="testi-content">
                            <ul>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star-half"></i></li>
                                <li><i class="ion-ios-star-outline"></i></li>
                            </ul>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit eaque ipsa ab illo inventore veritatis et quasi architecto  voluptatem quia.Sed ut perspiciatis</p>
                            <h4>Jeny Doe</h4>
                            <h6>CEO, Advertising Corp</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/contact'); ?>

</div><!-- End Main Wrapper-->

<?php get_footer(); ?>