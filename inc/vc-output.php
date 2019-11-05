<?php
// For Common Heading Section

function commons($commons){
    extract(
        shortcode_atts(
            array(
                'common_heading'    => '',
                'common_text'       => ''
            ),
            $commons
        )
    );
    ob_start();
    ?>
    <div class="section-header custom">
        <h2><?php echo esc_attr($common_heading); ?></h2>
        <p><?php echo esc_attr($common_text); ?></p>
    </div>

<?php
    return ob_get_clean();
}

add_shortcode('common', 'commons');


// For About Section
function about_secs($about_secs){
    extract(
        shortcode_atts(
            array(
                'heading_one'    => '',
                'heading_two'    => '',
                'item_one'    => '',
                'item_two'    => '',
                'item_three'    => '',
                'about_img'    => '',
            ),
            $about_secs
        )
    );
    ob_start();
    ?>
    <?php  wp_get_attachment_url($about_img); ?>
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="<?php echo wp_get_attachment_url($about_img); ?>">
                </div>

                <div class="col-lg-6 content">
                    <h2><? echo esc_attr($heading_one); ?></h2>
                    <h3><? echo esc_attr($heading_two); ?></h3>

                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i><? echo esc_attr($item_one); ?></li>
                        <li><i class="ion-android-checkmark-circle"></i><? echo esc_attr($item_two); ?></li>
                        <li><i class="ion-android-checkmark-circle"></i><? echo esc_attr($item_three); ?></li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- #about -->

<?php
    return ob_get_clean();
}

add_shortcode('about_sec', 'about_secs');

// For Service Section
function services_secs($services_secs){
    extract(
        shortcode_atts(
            array(
                'service_grp'       => '',
                'ser_icon'          => '',
                'ser_title'         => '',
                'ser_desc'          => ''
            ),
            $services_secs
        )
    );
    ob_start();
    ?>

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
        <div class="container">
            <div class="row">
                <?php
                    $grp_service_keys = vc_param_group_parse_atts($service_grp);
                    foreach ($grp_service_keys as $grp_service_key) {
                        ?>
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="<?php echo esc_attr($grp_service_key['ser_icon']); ?>"></i></div>
                            <h4 class="title"><a href=""><?php echo esc_attr($grp_service_key['ser_title']); ?></a></h4>
                            <p class="description"><?php echo esc_attr($grp_service_key['ser_desc']); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- #services -->

<?php
    return ob_get_clean();
}

add_shortcode('services_sec', 'services_secs');


// For Clients Section
function clients($client){
    extract(
        shortcode_atts(
            array(
                'clients'          => '',
            ),
            $client
        )
    );
    ob_start();
    ?>

    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <?php
                $args = array('post_type' => 'client', 'posts_per_page' => $clients);
                $the_query = new WP_query($args);
                ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="owl-carousel clients-carousel">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e("Sorry this is empty") ?></p>
            <?php endif; ?>
        </div>
    </section><!-- #clients -->

<?php
    return ob_get_clean();
}
add_shortcode('client', 'clients');

// For Call To Action Section
function ctas($ctas){
    extract(
        shortcode_atts(
            array(
                'heading'   => '',
                'desc'      => '',
                'btn'       => '',
                'btnlink'   =>  ''
            ),
            $ctas
        )
    );
    ob_start();
    ?>
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title"><?php echo esc_attr($heading); ?></h3>
                    <p class="cta-text"><?php echo esc_attr($desc); ?></p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="<?php echo esc_attr($btnlink); ?>"><?php echo esc_attr($btn); ?></a>
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->


<?php
    return ob_get_clean();
}
add_shortcode('cta', 'ctas');


// For Intro Section
function intros($intros){
    extract(
        shortcode_atts(
            array(
                'heading'   => '',
                'btnonet'   => '',
                'btnonel'   => '',
                'btntwot'   =>  '',
                'btntwol'   =>  '',
                'image_grp' =>  '',
                'img_slider'    => ''
            ),
            $intros
        )
    );
    ob_start();
    ?>
    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">

        <div class="intro-content">
            <h2><?php echo esc_attr($heading); ?></h2>
            <div>
                <a href="<?php echo esc_attr($btnonel); ?>" class="btn-get-started scrollto"><?php echo esc_attr($btnonet); ?></a>
                <a href="<?php echo esc_attr($btntwol); ?>" class="btn-projects scrollto"><?php echo esc_attr($btntwot); ?></a>
            </div>
        </div>

        <div id="intro-carousel" class="owl-carousel">
            <?php
                $slider_images = vc_param_group_parse_atts($image_grp);
                foreach ($slider_images as $slider_image):
                    ?>
                <?php wp_get_attachment_url($slider_image['img_slider']); ?>
                    <div class="item" style="background-image: url('<?php echo wp_get_attachment_url($slider_image['img_slider']); ?>');background-repeat:no-repeat"></div>
                <?php endforeach; ?>
        </div>

    </section><!-- #intro -->

<?php
    return ob_get_clean();
}
add_shortcode('intro', 'intros');


// For Our Portfolio Section
function portfolios($portfolios){
    extract(
        shortcode_atts(
            array(
                'portfolio_item'          => '',
            ),
            $portfolios
        )
    );
    ob_start();
    ?>
    <?php
        $args = array('post_type' => 'portfolio', 'posts_per_page' => $portfolio_item);
        $the_query = new WP_Query($args);
        ?>

    <section id="portfolio" class="wow fadeInUp">
        <div class="container-fluid">
            <div class="row no-gutters">
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="<?php the_permalink(); ?>" class="portfolio-popup">
                                    <?php the_post_thumbnail('medium'); ?>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp"><?php echo the_title(); ?><?php the_content(); ?>
                                            </h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e("Sorry this is empty") ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php
    return ob_get_clean();
}
add_shortcode('portfolio', 'portfolios');

// For Our Team Section

function team_secs($team_secs){
    extract(
        shortcode_atts(
            array(
                'team_item'          => '',
            ),
            $team_secs
        )
    );
    ob_start();
    ?>
    <?php
        $args = array('post_type' => 'team', 'posts_per_page' => $team_item);
        $the_query = new WP_Query($args);
        ?>
    <section id="team" class="wow fadeInUp">

        <div class="row">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <?php the_post_thumbnail(array(255, 255, 'class' => 'pic')); ?>
                            <div class="details">
                                <h4><?php the_title(); ?></h4>
                                <span><?php the_content(); ?></span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e("Sorry this is empty") ?></p>
            <?php endif; ?>
        </div>
    </section><!-- #team -->
<?php
    return ob_get_clean();
}
add_shortcode('team_sec', 'team_secs');

// For Contact Section
function cont_secs($cont_secs){
    extract(
        shortcode_atts(
            array(
                'cont_grp'    => '',
                'cont_icon'   => '',
                'cont_title'  => '',
                'cont_desc'   => ''
            ),
            $cont_secs
        )
    );
    ob_start();
    ?>
    <section id="contact" class="wow fadeInUp">
        <div class="row contact-info">
            <?php
                $grp_cont_keys = vc_param_group_parse_atts($cont_grp);
                foreach ($grp_cont_keys as $grp_cont_key) :
                    ?>
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="<?php echo esc_attr($grp_cont_key['cont_icon']); ?>"></i>
                        <h3><?php echo esc_attr($grp_cont_key['cont_title']); ?></h3>
                        <address><?php echo esc_attr($grp_cont_key['cont_desc']); ?></address>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('cont_sec', 'cont_secs');


// For Map

function maps($maps){
    extract(
        shortcode_atts(
            array(
                'place'    => '',
                'zoom'     => ''
            ),
            $maps
        )
    );
    ob_start();

    ?>
    <div class="container mb-4">
        <iframe src="https://maps.google.com/maps?q=<?php echo esc_attr($place); ?>&t=&z= <?php echo esc_attr($zoom); ?> &ie=UTF8&iwloc= &output=embed" width="100%" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode('maps', 'maps');


// For Testimonials Section

function testi_secs($testi_secs){
    extract(
        shortcode_atts(
            array(
                'testi_item'          => '',
            ),
            $testi_secs
        )
    );
    ob_start();
    ?>
    <?php
        $args = array('post_type' => 'testimonial', 'posts_per_page' => $testi_item);
        $the_query = new WP_Query($args);
        ?>
    <section id="testimonials" class="wow fadeInUp">
        <div class="owl-carousel testimonials-carousel">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="testimonial-item">
                        <p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            <?php the_content(); ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <?php the_post_thumbnail('thumbnail', array('class' => 'testimonial-img')); ?>
                        <h3><?php the_title(); ?></h3>
                        <h4>Designer</h4>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e("Sorry this is empty") ?></p>
            <?php endif; ?>
        </div>
    </section>


<?php
    return ob_get_clean();
}
add_shortcode('testi_sec', 'testi_secs');
