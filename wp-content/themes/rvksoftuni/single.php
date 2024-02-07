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

        <section id="about" class="about">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">

                        <div class="col-sm- wowload fadeInRight">
                            <div class="spacer text-center">
                                <div class="inner-p"><?php the_content(); ?></div>

                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
                No posts avalable.
            <?php endif; ?>
        </section>
    </div>
</div>

<?php get_footer(); ?>