<!--
    javascriptを有効にしていなユーザーへのメッセージ。
    対応外ブラウザを使用しているユーザーへのメッセージ。
-->
<noscript>Javascriptを有効にしてください。</noscript>
<div class="for-old">お使いのOS・ブラウザでは本サイトを閲覧することができません。</div>

<!--jsでパスの値が必要な場合に使うタグ-->
<input type="hidden" value="<?php site_url(); ?>" id="base-url">

<!--wrapper ここから-->
<div class="wrapper" id="js-wrapper">

    <!--header ここから-->
    <header class="header">

        <div class="header-inner">
            <div class="header-inner-left">
                <a href="<?php echo home_url(); ?>" class="header-inner-logo">SUSI</a>
            </div>
            <div class="header-inner-right">
                <?php get_search_form(); ?>
<!--                <form action="#" class="search-box">-->
<!--                    <input type="search" value="" placeholder="ex)button, media, input ..." class="input"/>-->
<!--                    <button class="search-box-button">-->
<!--                        <i class="icon icon-search">-->
<!--                            <span></span>-->
<!--                            <span></span>-->
<!--                        </i>-->
<!--                    </button>-->
<!--                </form>-->
            </div>
        </div>

        <!--nav ここから-->
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="<?php echo home_url(); ?>">Top</a>
                </li>
                <li class="nav-item">
                    <a href="#">Components</a>
                </li>
                <li class="nav-item">
                    <a href="#">About</a>
                </li>
                <li class="nav-item">
                    <a href="#">License</a>
                </li>
            </ul>
        </nav>
        <!--nav ここまで-->
    </header>
    <!--header ここまで-->
