<article class="blog_post post-box">
    <div class="post_header">
        <?php $category = get_the_category()[0]; ?>
        <h4 class="post_cat">Category : <a href="<?php echo get_category_link($category); ?>"><?php echo $category->name ?></a></h4>
        <h2 class="post_title"><?php the_title(); ?></h2>
    </div>
    <div class="post_img">
        <?php the_post_thumbnail("blog-single"); ?>
    </div>
    <div class="post_content">
        <div class="full_content">
            <?php the_content(); ?>
        </div>

        <div class="post_footer">
            <ul class="post_meta">
                <li>
                                                <span class="author">
                                                    <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
                                                         alt="author">
                                                    By <a href="#"><?php echo get_the_author_meta('display_name'); ?></a>
                                                </span>
                </li>
                <li>
                                                <span class="date">
                                                    <a href="#"><?php the_date('j F, Y'); ?></a>
                                                </span>
                </li>
            </ul>
        </div>
    </div>
</article>