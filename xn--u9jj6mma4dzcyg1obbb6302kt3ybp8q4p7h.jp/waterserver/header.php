<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <?php $url = $_SERVER["REQUEST_URI"]; ?>
    <?php if(preg_match('/info/',$url)){ ?>
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <?php } ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ウォーターサーバー選びの決定版
        <?php if (is_front_page()) : echo "| 探し求めていた水サーバーが見つかる！!"; elseif (is_single() || is_page()) : echo "| " ; the_title(); endif; ?>
    </title>
    <meta name="description"
        content="ウォーターサーバーどれにしようか迷っていませんか？当サイトは利用目的に合ったウォーターサーバーを条件を指定して検索することができます。また、人気・おすすめのウォーターサーバーランキングをご紹介♪あなたのウォーターサーバー選びをお手伝いします。" />
    <meta name="keywords" content="ウォーターサーバー,ウォーターサーバー ランキング,水 サーバー,水 宅配,天然水" />
    <?php if(!is_page('ranking-new')) : ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="all" />
    <?php else : ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-test.css" media="all" />
    <?php endif; ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/top.css" media="all" />
    <?php if(!is_page('ranking-new')) : ?>
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory'); ?>/css/sidepage.css?<?php echo time(); ?>" media="all" />
    <?php else : ?>
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory'); ?>/css/sidepage-test.css?<?php echo time(); ?>" media="all" />
    <?php endif ?>



    <?php if (is_page("serversearch")) {?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/search.css" media="all" />
    <?php } else if (is_page("about") || is_page("recommend_reason") || is_page("choice") || is_page("guide") || is_page("comparison") || is_page("economical") || is_page("info") || is_page("investigation")) {?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/footermenu.css"
        media="all" />
    <?php } elseif (is_page()) {?>
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory'); ?>/css/footermenu.css?<?php echo time(); ?>" media="all" />
    <?php } elseif (is_single()) {?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/single.css" media="all" />
    <?php } ?>
    <?php if (is_mobile()): ?>

    <?php if(is_page('ranking') || is_front_page()) : ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/sp-rank.css?<?php echo time(); ?>" />
    <?php else : ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/sp.css?<?php echo time(); ?>" />
    
    <?php endif ?>
    <?php endif ?>

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/smartrollover.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/favorite.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/storage.js"></script>
    <script type="text/javascript" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/339539da33.js" crossorigin="anonymous"></script>
    <?php
global $template;
$template_name = basename($template, '.php');
?>
    <script type="text/javascript">
    $(function() {
        $("#search_more dt").on("click", function() {
            $(this).next().slideToggle();
        });
        console.log('<?php echo $template_name; ?>');
    });
    </script>
</head>
<?php
$body_id = "top";

if (is_page("natural_water") || is_page("deskserver") || is_page("purifier") || is_page("ranking") || is_page("ranking_p") || is_page("ranking-new") || is_page("ro_water") || is_page("electric_utility_expense") || is_page("cost") || is_page("baby") || is_page("convenience")) {

	$body_id = "side_menu_page";

} else if (is_page("serversearch")) {

	$body_id = "search_result";

} else if ( is_page("about") || is_page("recommend_reason") || is_page("choice") || is_page("guide") || is_page("comparison") || is_page("economical") || is_page("info") || is_page("investigation")) {

	$body_id = "footer_menu_page";
} else if (is_front_page() || is_page("トップページ") || is_page("toptest")) {

	$body_id = "top";

} else if (is_page()) {
	$body_id = "footer_menu_page";

} else if (is_single()) {
	$body_id = "single_campaign";
}
?>

<body id="<?php echo $body_id; ?>">

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NHDMSC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NHDMSC');
    </script>
    <!-- End Google Tag Manager -->

    <div id="entirety">

        <div id="header">
            <?php if(!is_mobile()){ ?>

            <h1><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/img/common/img-header-logo.jpg"
                        alt="ウォーターサーバーガイド　WATER&nbsp;SERVER&nbsp;GUIDE" width="422" height="73" /></a></h1>
            <img src="<?php bloginfo('template_directory'); ?>/img/common/txt-header-copy.png" alt="探し求めていた水サーバーが見つかる！"
                width="295" height="16" id="site_copy" />

            <div id="favorite" onclick="myFavorite();"><img
                    src="<?php bloginfo('template_directory'); ?>/img/common/btn-favorite_off.jpg" alt="お気に入りに登録"
                    width="153" height="37" /></div>

            <?php }else{ ?>
            <h1 class="header__sp">
                <a class="header__title" href="index.html">
                    <div class="header__title__logo">
                        <!-- wk-logo.png -->
                    </div>
                </a>
                <div class="header__toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span>menu</span>
                </div>
            </h1>
            <div class="nav__open">
                <a href="<?php bloginfo('url'); ?>/ranking" class="nav__ranking">
                    人気ランキングBEST10
                    <!-- <img src="<?php bloginfo('template_directory'); ?>/spimg/sprankbanner.png" alt=""> -->
                    <span>利用者の評価が高い<br>優良ウォーターサーバー10社！</span>
                </a>
                <h2>
                    <img src="<?php bloginfo('template_directory'); ?>/spimg/menu.png" alt="" width="30px">
                    特徴別ランキングで選ぶ
                </h2>
                <ul>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/natural_water">
                            <p>天然水</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/ro_water">
                            <p>RO水</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/electric_utility_expense">
                            <p>電気代が安くなる</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/cost">
                            <p>お水の価格が安い</p>
                        </a>
                    </li>

                    <li>
                        <a href="<?php bloginfo('url'); ?>/baby">
                            <p>赤ちゃんのミルク作りに</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/convenience">
                            <p>利便性に優れたサーバー</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/deskserver">
                            <p>卓上型サーバー</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/purifier">
                            <p>水道浄水型サーバー</p>
                        </a>
                    </li>
                </ul>
            </div>

            <!--
<div id="favorite" onclick="myFavorite();">
	<button id="fav_button"></button>
</div>
-->
            <?php } ?>

        </div><!-- / header box -->
        <div id="contents">

            <?php if(!is_mobile()){
	if($template_name == 'page-searchresult' || is_page('page-link')){

	}else{
		get_sidebar();
	}

}?>