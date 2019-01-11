           <section id="services" class="services pt-10">
                <div class="container">
                    <div class="section-title">
                        <h2><?php the_field('our_services'); ?></h2>
                        <p><?php the_field('services_text'); ?></p>
                    </div>
                    
                    <?php if( have_rows('services') ): ?>

                        <div class="row">

                        <?php while( have_rows('services') ): the_row(); ?>
                            
                               <div class="col-lg-4 col-md-6">
                            <div class="servicebox">
                                <div class="srv_desc">
                                    <h5 class="count"><?php the_sub_field('count'); ?> </h5>
                                    <h4><a href="index.html#"><?php the_sub_field('name'); ?></a></h4>
                                    <p><?php the_sub_field('text'); ?></p>
                                </div>
                            </div>
                        </div>
    
                        <?php endwhile; ?>

                        </div>

                    <?php endif; ?>
                    
                 
                </div>
            </section>