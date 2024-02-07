<?php get_header(); ?>

<div class="banner">
    <div class="overlay">
        <h2 class="text-center" style="padding:5rem 0; color:whitesmoke;"><a style="color:whitesmoke; text-decoration:underline;" href="<?php echo get_home_url(); ?>">Home</a> | <?php the_archive_title(); ?></h2>
    </div>
</div>

<section id="about" class="about">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="row">

                <div class="col-sm- wowload fadeInRight">
                    <div class="spacer text-center">
                        <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <div class="inner-p"><?php the_excerpt(); ?></div>
                        <br>
                    </div>
                </div>
            </div>

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
<!-- about -->



<!-- about -->

<?php get_footer(); ?>