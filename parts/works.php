  <section id="works" class="works">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field('our_portfolio'); ?></h2>
                        <p><?php the_field('portfolio_text'); ?></p>
                    </div>

                    <?php if( have_rows('category') ): ?>

	                       <ul id="filters" class="clearfix text-center">
                        <li><span class="filter active" data-filter="*">All</span></li>

                       <?php while( have_rows('category') ): the_row();

                        ?>
                  <li><span class="filter" data-filter=".<?php the_sub_field('class'); ?>"><?php the_sub_field('name'); ?></span></li>
                               
                    <?php endwhile; ?>

                       </ul>

                    <?php endif; ?>

                    
                     <?php if( have_rows('foro_portfolio') ): ?>
                    
                    <div id="portfoliolist">
                        <div class="row">
                

                       <?php while( have_rows('foro_portfolio') ): the_row();

                        ?>
               
                            <div class="col-md-4 col-lg-3 portfolio <?php the_sub_field('class'); ?>">
                                <div class="portfolio-wrapper">
                                    <div class="works-img">
                                       <?php if(get_sub_field('foto')) : ?>
                                        <a href="<?php echo get_sub_field('foto')['url']; ?>" data-fancybox="images">
                                            <img src="<?php echo get_sub_field('foto')['sizes']['portfolio']; ?>" alt="" />
                                        </a>
                                        <?php endif; ?>
                                        
                                    </div>
                                    <div class="works-info">
                                        <div class="label-text">
                                            <h4><?php the_sub_field('name'); ?></h4>
                                        </div>
                                    </div>
                                </div>   
                            </div> 
                            
                    <?php endwhile; ?>

                     </div>
                    </div>
                            

                    <?php endif; ?>

                </div>
            </section>
