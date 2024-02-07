<div class="col-sm-3 text-center">
    <a href="<?php echo get_the_permalink(); ?>">
        <?php if (has_post_thumbnail()) :
            the_post_thumbnail('iconBig');
        endif ?>
        <h3 class=""><?php the_title(); ?></h3>
        <div><?php the_excerpt(); ?></div>
    </a>
</div>