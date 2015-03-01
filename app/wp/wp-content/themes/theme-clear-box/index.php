<?php get_template_part('head'); ?>

<div class="main-view">
    <div class="main-view-visual" id="js-main-view-visual"></div>
    <h1 class="main-view-text">
        <span>SUSI</span>
        <span>"Let's do coding speedy,and go home early."</span>
        <span>This is "The <span>S</span>nipets of <span>U</span>tility and <span>S</span>imple <span>I</span>tems, with HTML,CSS,Javascript.</span>
        <a href="#" class="button button-primary">Get start</a>
    </h1>
</div>

<?php get_header(); ?>

<!--contents ここから-->
<main class="contents">

    <section class="section">
        <h1 class="heading">New Components</h1>

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

            <div class="section-footer">
                <a href="<?php echo get_post_type_archive_link('code'); ?>" class="button">more</a>
            </div>
        </div>
    </section>

    <section class="section">
        <h1 class="heading">Tag</h1>

        <div class="section-contents">
            <ul class="tag-list">
                <?php the_tags('<li class="tag-list-item">', '</li><li class="tag-list-item">', '</li>'); ?>
            </ul>
        </div>
    </section>

    <section class="section">
        <h1 class="heading">About</h1>
        <div class="section-contents">

            <div class="section-text">
                <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                    <br/>
                    サンプルテキストサンプルテキストサンプルテキスト
                    サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                    <br/>サンプルテキストサンプルテキスト
                </p>
                <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                    <br/>
                    サンプルテキストサンプルテキストサンプルテキスト
                    サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                    <br/>サンプルテキスト<strong>サンプルテキスト</strong>
                </p>
                <ul>
                    <li>サンプルテキストサンプルテキストサンプルテキスト</li>
                    <li>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</li>
                    <li>サンプルテキストサンプルテキストサンプルテキスト</li>
                </ul>
            </div>

            <div class="section-footer">
                <a href="#" target="_blank"><img src="http://placehold.it/200x100" height="100" width="200" alt=""></a>
                <a href="#" target="_blank"><img src="http://placehold.it/200x100" height="100" width="200" alt=""></a>
                <a href="#" target="_blank"><img src="http://placehold.it/200x100" height="100" width="200" alt=""></a>
            </div>
        </div>
    </section>

    <section class="section">
        <h1 class="heading">License & Author</h1>

        <div class="section-contents">

            <div class="section-text">
                <p>
                    <strong>MIT lisence</strong>
                </p>

                <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
                    associated documentation files (the "Software"), to deal in the Software without restriction,
                    including without limitation the rights to use, copy, modify, merge, publish, distribute,
                    sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
                    furnished to do so, subject to the following conditions:</p>

                <p>The above copyright notice and this permission notice shall be included in all copies or substantial
                    portions of the Software.</p>

                <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
                    LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
                    IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
                    CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
            </div>
        </div>
    </section>

</main>
<!--contents ここまで-->

<?php get_footer(); ?>