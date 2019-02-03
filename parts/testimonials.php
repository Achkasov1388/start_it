<?php

$testimonials = get_field('testimonial');
foreach ($testimonials as $item) :
    setup_postdata($item);
    ?>

    <div class="item">
        <div class="testibox">
            <div class="testi-img">
                <?php echo get_the_post_thumbnail($item); ?>
            </div>
            <div class="testi-content">
                <ul>
                    <?php
                    $mark = get_field('rating', $item);
                    for ($i = 0; $i <= 5; $i++) :
                        $className = 'ion-ios-star';
                        if ($mark <= $i) {
                            $className = 'ion-ios-star-outline';
                        }
                        ?>

                        <li><i class="<?php echo $className; ?>"></i></li>

                    <?php endfor; ?>
                </ul>
                <?php the_content(); ?>
                <h4><?php echo get_the_title($item); ?></h4>
                <h6><?php the_field('position', $item); ?></h6>
            </div>
        </div>
    </div>

<?php endforeach;
wp_reset_postdata(); ?>