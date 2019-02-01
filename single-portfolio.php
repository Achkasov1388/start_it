<?php
get_header('single');
the_post();
?>


<div class="main-wrapper">
    <section class="inner-page">
        <div class="container">
            <div class="singlepage-details-content">
                <div class="portfolio-details-img">
                    <?php if (get_field('baner')) : ?>
                        <img src="<?php echo get_field('baner')['url']; ?>"/>
                    <?php endif; ?>
                </div>
                <div class="portfolio-details">
                    <div class="full_content">
                        <h6><?php the_field('subheading'); ?></h6>
                        <h2 class="project_title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <div class="portfolio-content-img">
                        <?php if (get_field('img_right')) : ?>
                            <img src="<?php echo get_field('img_right')['url']; ?>"/>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-banner">
        <div class="container">
            <div class="video-content">
                Video presentation
                <span class="video_btn">
                    <a class="fancybox-media" href="<?php the_field('video'); ?>">
                        <i class="ion-ios-play"></i>
                    </a>
                </span>
                About the project
            </div>
        </div>
    </section>

    <section class="project_desc">
        <div class="container">
            <div class="section-title">
                <h2>Project Description</h2>
                <p><?php the_field('description'); ?></p>
            </div>
            <div class="project_desc_inner">
                <div class="row">
                    <div class="col-md-12 col-lg-12">


                        <?php the_field('description_content'); ?>


                    </div>
                </div>
            </div>
        </div>

        <div class="project_desc_bottom">
            <div class="container">


                <?php if (have_rows('servises')): ?>

                    <div class="project_info_grid">

                        <?php while (have_rows('servises')): the_row(); ?>

                            <div class="info_grid">
                                <h5><?php the_sub_field('mane'); ?></h5>
                                <p><?php the_sub_field('context'); ?></p>
                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials testimonials1">
        <div class="container">
            <div class="owl-carousel owl-theme testimonial_carousel">
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
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accntium oloremque
                                laudantium, totam rem aperiam, eaque ipsa ab illo inventore veritatis et quasi rchitecto
                                beatae vitae dictaexplicabo. Nemo enim voluptatem quia.Sed ut perspiciatis unde omnis
                                iste natus error sit voluptatem </p>
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
                                <li><i class="ion-ios-star"></i></li>
                                <li><i class="ion-ios-star-half"></i></li>
                            </ul>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accntium oloremque
                                laudantium, totam rem aperiam, eaque ipsa ab illo inventore veritatis et quasi rchitecto
                                beatae vitae dictaexplicabo. Nemo enim voluptatem quia.Sed ut perspiciatis unde omnis
                                iste natus error sit voluptatem </p>
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
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accntium oloremque
                                laudantium, totam rem aperiam, eaque ipsa ab illo inventore veritatis et quasi rchitecto
                                beatae vitae dictaexplicabo. Nemo enim voluptatem quia.Sed ut perspiciatis unde omnis
                                iste natus error sit voluptatem </p>
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




