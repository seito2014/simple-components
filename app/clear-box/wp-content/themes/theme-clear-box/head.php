<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="keywords" content="">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>">

    <!--viewport widthの値は、サイトの横幅 or device-width　を設定-->
    <meta name="viewport" content="width=device-width,minimum-scale=0,maximum-scale=10">

    <!--SNS関連 ここから-->
    <meta property="fb:app_id" content="">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:title" content="Title">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./images/ogp.png">
    <!--SNS関連 ここまで-->

    <!--favicon,webclip ここから-->
    <meta name="apple-mobile-web-app-title" content="">
    <link rel="apple-touch-icon-precomposed" href="<?php echo home_url(); ?>images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo home_url(); ?>images/favicon.ico">
    <!--favicon,webclip ここまで-->

    <!--css ここから-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <!--css ここまで-->

    <!--初めに読み込ませたいjs ここから-->
    <script src="<?php bloginfo('template_directory'); ?>/lib/modernizer/modernizr.js"></script>
    <!--初めに読み込ませたいjs ここまで-->
</head>

<body class="page-index">