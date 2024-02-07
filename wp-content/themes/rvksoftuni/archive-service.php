<?php get_header(); ?>


<div class="banner" style="background-image: url(<?php echo the_field('page_banner_background_image'); ?>); ">
    <div class="overlay">
        <!-- main banner-->
        <h2 class="text-center" style="padding:5rem 0; color:whitesmoke;"><a style="color:whitesmoke; text-decoration:underline;" href="<?php echo get_home_url(); ?>">Home</a> | <?php the_archive_title(); ?></h2>
    </div>
</div>

<section class="container service">
    <div class="row">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'service'); ?>
            <?php endwhile; ?>
        <?php else : ?>
            No posts avalable.
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>