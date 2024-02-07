<?php
/* 
* Template Name: Services 
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
        <div class="banner">
            <div class="overlay">
                <!-- main banner-->
                <h1 class="text-center page-post"><?php the_title(); ?></h1>
                <!-- main banner-->
            </div>
        </div>

        <!-- service -->
        <div style="background:#222222; padding-top:3em;">
            <?php if ($blog_query->have_posts()) : ?>
                <div class="service row text-center  wowload fadeInDownBig">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'service') ?>
                    <?php endwhile; ?>
                </div>
                <div class="text-center spacer">
                    <?php
                    $GLOBALS['wp_query'] = $blog_query;
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('Previous', 'rksoftuni'),
                        'next_text' => __('Next', 'rksoftuni'),
                    ))
                    ?>
                </div>
        </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <!-- service -->
    </div>

</div>

<?php get_footer(); ?>