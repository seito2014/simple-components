<!--Template Name: archives-->

<?php get_template_part('head'); ?>

<?php get_template_part('header-lower'); ?>

<!--contents ここから-->
<main class="contents">

    <div class="section">
        <h1 class="heading">All Components</h1>

        <div class="section-contents">
            <ul class="card-list">

                <?php
                query_posts('post_type=code');
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li class="card-item">
                        <article class="card">
                            <div class="comment">
                                <?php the_content(); ?>
                                <div class="comment-arrow"></div>
                            </div>

                            <div class="card-embed">
                                <p data-height="268" data-theme-id="0" data-slug-hash="<?php echo substr(get_the_excerpt(),32,39) ?>"
                                   data-default-tab="result" data-user="seito2014" class='codepen'>
                                    See the Pen <a href='<?php the_excerpt(); ?>'><?php echo substr(get_the_excerpt(),32,39) ?></a> by Seito (<a
                                        href='http://codepen.io/seito2014'>@seito2014</a>) on
                                    <a href='http://codepen.io'>CodePen</a>.
                                </p>
                            </div>
                            <div class="card-body">
                                <h1 class="card-heading">
                                    <a href="<?php the_excerpt(); ?>" target="_blank"><?php the_title(); ?></a>
                                </h1>
                                <ul class="card-tag-list">
                                    <?php the_tags('<li class="card-tag-item">', '</li><li class="card-tag-item">', '</li>'); ?>
                                </ul>
                                <footer class="card-footer">
                                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                                </footer>
                            </div>
                        </article>
                    </li>
                <?php endwhile; endif;
                wp_reset_query(); ?>

            </ul>
        </div>

    </div>
</main>
<!--contents ここまで-->

<?php get_footer(); ?>
