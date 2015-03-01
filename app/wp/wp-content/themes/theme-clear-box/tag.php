<!--Template Name: Tag Archives-->

<?php get_template_part('head'); ?>

<?php get_template_part('header-lower'); ?>

<!--contents ここから-->
<main class="contents">

    <div class="section">
        <h1 class="heading">Tag: "<?php single_tag_title(); ?>"</h1>
        <?php
        $tag_description = tag_description();
        if ( ! empty($tag_description ) )
            echo '<div>' .$tag_description . '</div>';
        ?>

        <ul class="card-list">
        <?php
            global $wp_query;
            query_posts(array_merge(
                array( 'post_type' => array('post', 'code') ),
                $wp_query->query
            ));
            if (have_posts()) : while (have_posts()) : the_post();
            ?>
            <li class="card-item">
                <article class="card">
                    <div class="comment">
                        <?php the_content(); ?>
                        <div class="comment-arrow"></div>
                    </div>

                    <div class="card-embed">
                        <p data-height="268" data-theme-id="0" data-slug-hash="EaEwrx"
                           data-default-tab="result" data-user="seito2014" class='codepen'>
                            See the Pen <a href='<?php the_excerpt(); ?>'>EaEwrx</a> by Seito (<a
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
        <?php endwhile; ?>
        </ul>

        <?php else : ?>
        <p class="nothing-text">"<?php single_tag_title(); ?>" is nothing.</p>
        <?php endif; ?>

    </div>
</main>
<!--contents ここまで-->

<?php get_footer(); ?>
