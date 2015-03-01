        <!--
            javascriptを有効にしていなユーザーへのメッセージ。
            対応外ブラウザを使用しているユーザーへのメッセージ。
        -->
        <noscript>Javascriptを有効にしてください。</noscript>
        <div class="for-old">お使いのOS・ブラウザでは本サイトを閲覧することができません。</div>

        <!--jsでパスの値が必要な場合に使うタグ-->
        <input type="hidden" value="<?php echo home_url(); ?>" id="base-url">

        <!--wrapper ここから-->
        <div class="wrapper" id="js-wrapper">

            <!--header ここから-->
            <header class="header">
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
                            <a href="#">License & Author</a>
                        </li>
                    </ul>
                </nav>
                <!--nav ここまで-->
            </header>
            <!--header ここまで-->
