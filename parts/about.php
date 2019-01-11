            <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title">
                                <h2><?php the_field('about_company'); ?></h2>
                                <p><?php the_field('about_company2'); ?></p>
                            </div>
                            <div class="about_content_box box-left">
                                <div class="about_txt_box">
                                    <p><?php the_field('text_left'); ?></p>
                                </div>
                                <div class="about_img_box">
                                    <?php if(get_field('foto_left')) : ?>
                                    <img src="<?php echo get_field('foto_left')['sizes']['about-2']; ?>" alt="img">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_content_box box-right">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                           <?php if(get_field('foto_right1')) : ?>
                                    <img src="<?php echo get_field('foto_right1')['sizes']['about-1']; ?>" alt="img">
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_img_box">
                                            <?php if(get_field('foto_right2')) : ?>
                                    <img src="<?php echo get_field('foto_right2')['sizes']['about-1']; ?>" alt="img">
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="about_txt_box">
                                    <p><?php the_field('text_right'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
