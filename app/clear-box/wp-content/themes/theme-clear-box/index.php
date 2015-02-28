    <?php get_template_part( 'head' ); ?>

    <div class="main-view">
        <div class="main-view-visual" id="js-main-view-visual"></div>
        <h1 class="main-view-text">
            <span>CLEAR BOX</span>
            <span>"Let's do coding speedy,and go home early."</span>
            <span>This is simple components, with HTML,CSS,Javascript.</span>
            <a href="#" class="button button-primary">Get start</a>
        </h1>
    </div>

	<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="entry"><?php the_content(); ?></div>
            <div class="data"><?php the_time('Y/m/d'); ?></div>
        <?php endwhile; endif; ?>


	<?php get_footer(); ?>