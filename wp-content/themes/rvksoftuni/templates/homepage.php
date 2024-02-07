<?php

/* 
* Template Name: Homepage 
*/
?>
<?php
$blog_query_arg = array(
    'post_type'     => 'service',
    'post_status'   => 'publish',
    'post_per_page' => 4,
    'paged'         => get_query_var('paged'),
    'orderby'       => 'title'
);
$blog_query = new WP_Query($blog_query_arg);
?>

<?php get_header(); ?>

<div class="container">
    <div class="wrapper">

        <div class="banner" style="background-image: url(<?php echo the_field('page_banner_background_image'); ?>); ">
            <div class="overlay">
                <!-- main banner-->
                <h1 class="text-center"><?php echo the_field('banner_title'); ?></h1>
                <h3 class="text-center" style="color:#a9a9a9; margin: -5em 0 5em; font-size: 2em"><?php echo the_field('banner_subtitle'); ?></h3>
                <!-- main banner-->

                <!-- service -->
                <?php if ($blog_query->have_posts()) : ?>
                    <div class="service row text-center  wowload fadeInDownBig">
                        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                            <?php get_template_part('template-parts/content', 'service') ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="text-center spacer">
                        <?php the_posts_pagination(array(
                            'mid_size' => 1,
                            'prev_text' => __('Previous', 'rksoftuni'),
                            'next_text' => __('Next', 'rksoftuni'),
                        )) ?>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

                <!-- Initial option but then used WP_query(); what is currently above -->
                <!-- <div class="service row text-center  wowload fadeInDownBig">
                    <div class="col-sm-3 col-xs-6">
                        <i class="fa fa-code  fa-4x"></i>
                        <?php
                        $page_id = 18;
                        $title = get_the_title($page_id);
                        $page = get_post($page_id);
                        echo '<h3>' . esc_html($title) . '</h3>';
                        echo '<div>' . apply_filters('the_content', $page->post_content) . '</div>';
                        ?>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <i class="fa fa-pencil  fa-4x"></i>
                        <?php
                        $page_id = 22;
                        $title = get_the_title($page_id);
                        $page = get_post($page_id);
                        echo '<h3>' . esc_html($title) . '</h3>';
                        echo '<div>' . apply_filters('the_content', $page->post_content) . '</div>';
                        ?>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <i class="fa fa-cloud-download  fa-4x"></i>
                        <?php
                        $page_id = 65;
                        $title = get_the_title($page_id);
                        $page = get_post($page_id);
                        echo '<h3>' . esc_html($title) . '</h3>';
                        echo '<div>' . apply_filters('the_content', $page->post_content) . '</div>';
                        ?>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <i class="fa fa-camera-retro fa-4x"></i>
                        <?php
                        $page_id = 26;
                        $title = get_the_title($page_id);
                        $page = get_post($page_id);
                        echo '<h3>' . esc_html($title) . '</h3>';
                        echo '<div>' . apply_filters('the_content', $page->post_content) . '</div>';
                        ?>
                    </div>
                </div> -->
                <!-- service -->
            </div>
        </div>

        <!-- AJAX section -->
        <!-- it diesn't work run out of time to fix it -->
        <div class="mx-auto text-center spacer">
            <button id="ajax-request" class="btn btn-toclick" style="background-color:rgba(159, 16, 64, 0.856); color:white;">AJAX Request Click me to read a message</button>
            <p id="ajax-response" style="width:250px; margin:20px auto"></p>
        </div>
        <!-- AJAX section end -->

        <!-- about -->
        <div id="about" class="about">
            <div class="row">
                <div class="col-sm-7 wowload fadeInLeft">
                    <div id="carousel-about" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active"><img src="<?php echo get_template_directory_uri() . '/images/portfolio/1.jpg' ?>" class="img-responsive"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri() . '/images/portfolio/2.jpg' ?>" class="img-responsive"></div>
                            <div class="item"><img src="<?php echo get_template_directory_uri() . '/images/portfolio/3.jpg' ?>" class="img-responsive"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-about" role="button" data-slide="prev"><i class="fa fa-3x fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#carousel-about" role="button" data-slide="next"><i class="fa fa-3x fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-5 wowload fadeInRight">
                    <div class="spacer">
                        <?php
                        $page_id = 6;
                        $title = get_field('banner_title', $page_id);
                        $text_about = get_post($page_id);
                        ?>
                        <a href="<?php echo esc_html(get_the_permalink($page_id)); ?>">
                            <h2><i class="fa fa-flask"></i><?php echo esc_html($title); ?> </h2>
                        </a>
                        <?php echo '<div>' . apply_filters('the_content', $text_about->post_content) . '</div>'; ?>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-dribbble fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about -->

        <!-- works -->
        <div id="works" class="works">
            <div class="row">
                <div class="col-sm-5 wowload fadeInLeft">
                    <div class="spacer">
                        <h2><i class="fa fa-code"></i> Monkey's work</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    </div>
                </div>

                <div class="col-sm-7 wowload fadeInRight">
                    <div id="carousel-works" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active"><img src="<?php echo get_stylesheet_directory_uri() . '/images/portfolio/4.jpg' ?>" class="img-responsive"><a href="#" class="view"><i class="fa fa-external-link"></i> View</a></div>
                            <div class="item"><img src="<?php echo get_stylesheet_directory_uri() . '/images/portfolio/5.jpg' ?>" class="img-responsive"><a href="#" class="view"><i class="fa fa-external-link"></i> View</a></div>
                            <div class="item"><img src="<?php echo get_stylesheet_directory_uri() . '/images/portfolio/6.jpg' ?>" class="img-responsive"><a href="#" class="view"><i class="fa fa-external-link"></i> View</a></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-works" role="button" data-slide="prev"><i class="fa fa-3x fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#carousel-works" role="button" data-slide="next"><i class="fa fa-3x fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- works -->

        <div id="contact" class="contact">
            <div class="row">
                <div class="col-sm-7 wowload fadeInLeft">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/map.jpg' ?>" class="img-responsive">
                </div>
                <div class="col-sm-5 wowload fadeInRight">
                    <div class="spacer">
                        <h2><i class="fa fa-terminal"></i> Get in touch to start your project</h2>
                        <div class="wowload fadeInRightBig">
                            <div class="form-group"><input type="text" placeholder="Name" class="form-control"></div>
                            <div class="form-group"><input type="text" placeholder="Company" class="form-control"></div>
                            <div class="form-group"><textarea rows="5" placeholder="Message" class="form-control"></textarea></div>
                            <div class="form-group"><button class="btn btn-danger"><i class="fa fa-paper-plane"></i> Send</button></div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
</div>

<?php get_footer(); ?>