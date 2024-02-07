<?php get_header(); ?>

<div class="banner">
    <div class="overlay">
        <!-- main banner-->
        <h2 class="text-center" style="padding:5rem 0; color:whitesmoke;"><a style="color:whitesmoke; text-decoration:underline;" href="<?php echo get_home_url(); ?>">Home</a> | <?php the_archive_title(); ?></h2>
    </div>
</div>
<section class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'post'); ?>
        <?php endwhile; ?>
    <?php else : ?>
        No posts avalable.
    <?php endif; ?>
    <div class="text-center spacer">
        <?php the_posts_pagination(array(
            'mid_size' => 1,
            'prev_text' => __('Previous', 'rksoftuni'),
            'next_text' => __('Next', 'rksoftuni'),
        )) ?>
    </div>

</section>

<?php get_footer(); ?>