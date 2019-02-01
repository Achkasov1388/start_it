<div class="col-md-5 col-lg-4 sidebar">

    <div id="search-2" class="widget widget_search">
        <div class="sidebar_search">
            <form method="get" class="sidebar_search_form">
                <input type="text" name="s" class="form-control" placeholder="Search">
                <button type="submit" class="form-control form-control-submit"><i
                            class="ion-ios-search"></i></button>
            </form>
        </div>
    </div>

    <div id="recent-posts-2" class="widget widget_recent_posts">
        <h4 class="widget_title"><span>Recent Posts</span></h4>
        <div class="sidebar_recent_posts">
            <ul class="recent_posts_list">

                <?php

                $recent = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ]);

                while ($recent->have_posts()) :

                    $recent->the_post();
                    setup_postdata($recent->post);


                    ?>

                    <li>
                        <?php the_post_thumbnail(); ?>
                        <div class="post_content">
                            <h6><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            <p class="date"><?php the_date('j F, Y'); ?></p>
                        </div>
                    </li>

                <?php

                endwhile;
                wp_reset_postdata();

                ?>


            </ul>
        </div>
    </div>

    <div id="archives-1" class="widget widget_archive">
        <h4 class="widget_title"><span>Archives List</span></h4>
        <div class="sidebar_archive">
            <ul class="archive_list">
                <?php

                $args = array(
                    'type' => 'monthly',
                    'limit' => '5',
                    'format' => 'html',
                    'echo' => 1,
                    'order' => 'DESC',
                    'post_type' => 'post'
                );

                wp_get_archives($args);

                ?>
            </ul>
        </div>
    </div>

    <div id="categories-2" class="widget widget_categories">
        <h4 class="widget_title"><span>Categories</span></h4>
        <div class="sidebar_categories">
            <ul class="category_list">
                <?php

                $categories = get_terms([
                    'taxonomy'      => array( 'category' ), // название таксономии с WP 4.5
                    'orderby'       => 'count',
                    'order'         => 'DESC',
                    'number'        => 5,
                    'fields'        => 'all',
                ]);

                foreach ($categories as $term) : ?>
                    <li>
                        <a href="<?php echo get_category_link($term); ?>">
                            <?php echo $term->name ?>
                            <span>(<?php echo $term->count ?>)</span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>