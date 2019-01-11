            <section id="blog" class="blog">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field('news_blog'); ?></h2>
                        <p><?php the_field('blog_text'); ?></p>
                    </div>
                    
                    
            <?php if( have_rows('foto_blog') ): ?>

                <div class="row">

            <?php while( have_rows('foto_blog') ): the_row(); ?>
                 <div class="col-md-6 col-lg-4<?php the_sub_field('class'); ?>">
                            <div class="blog_post">
                                <div class="post_img">
                                    <a href="index.html#">
                                       <?php if(get_sub_field('foto')) : ?>
                                        
                                            <img src="<?php echo get_sub_field('foto')['sizes']['article']; ?>" alt="" />
                                    
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="post_content">
                                    <div class="post_header">
                                        <h2 class="post_title"><a href="index.html#"><?php the_sub_field('name'); ?></a></h2>
                                        <div class="read_more"><a href="index.html#">Go to article</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
                    
                    <?php endwhile; ?>

                </div>

        <?php endif; ?>

                    
        
                        
                        
                  
                </div>
            </section>