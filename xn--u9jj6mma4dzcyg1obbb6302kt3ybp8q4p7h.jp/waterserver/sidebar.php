<?php if(!is_mobile()){ ?>

<div id="sub_contents">

    <a href="<?php bloginfo('url'); ?>/ranking" id="banner_ranking_sub">
        <!-- <img src="<?php bloginfo('template_directory'); ?>/img/common/bnr-ranking-side_on.jpg" alt="2019年版人気ランキング　今年No.1のおすすめウォーターサーバーは？　ランキング詳細はこちら" 
width="230" height="234" /> -->
        <img src="<?php bloginfo('template_directory'); ?>/img/common/bnr-ranking-side_on.jpg"
            onmouseover="this.src='<?php bloginfo('template_directory'); ?>/img/common/bnr-ranking-side_off.jpg'"
            onmouseout="this.src='<?php bloginfo('template_directory'); ?>/img/common/bnr-ranking-side_on.jpg'">

    </a>
    <?php

$nat_img = 'off';
$ro_img  = 'off';
$ele_img  = 'off';
$cost_img  = 'off';
$milk_img  = 'off';
$conv_img  = 'off';
$desk_img  = 'off';
$puri_img  = 'off';


if (is_page('天然水')) {
	$nat_img = 'on';
} else if (is_page('RO水')) {
	$ro_img  = 'on';
} else if (is_page('電気代が安くなる')) {
	$ele_img  = 'on';
} else if (is_page('お水の価格が安い')) {
	$cost_img  = 'on';
} else if (is_page('赤ちゃんのミルク作りに')) {
	$milk_img  = 'on';
} else if (is_page('利便性に優れたサーバー')) {
	$conv_img  = 'on';
} else if (is_page('卓上型サーバー')) {
	$desk_img  = 'on';
} else if (is_page('水道浄水型サーバー')) {
	$puri_img  = 'on';
}

?>
    <dl id="side_menu">
        <dt><img src="<?php bloginfo('template_directory'); ?>/img/common/ttl-side-navi.jpg" alt="特徴で選ぶ" width="230"
                height="50" /></dt>
        <dd>
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/natural_water"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-sub-navi01_<?php echo $nat_img; ?>.gif"
                            alt="天然水" width="230" height="50" /></a></li>
                <li><a href="<?php bloginfo('url'); ?>/ro_water"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-sub-navi02_<?php echo $ro_img; ?>.gif"
                            alt="RO水" width="230" height="50" /></a></li>

                <li><a href="<?php bloginfo('url'); ?>/electric_utility_expense"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-sub-navi03_<?php echo $ele_img; ?>.gif"
                            alt="電気代が安くなる" width="230" height="50" /></a></li>

                <li><a href="<?php bloginfo('url'); ?>/cost"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-sub-navi04_<?php echo $cost_img; ?>.gif"
                            alt="お水の価格が安い" width="230" height="50" /></a></li>

                <li><a href="<?php bloginfo('url'); ?>/baby"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-sub-navi05_<?php echo $milk_img; ?>.gif"
                            alt="赤ちゃんのミルク作りに" width="230" height="50" /></a></li>

                <li><a href="<?php bloginfo('url'); ?>/convenience"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-sub-navi06_<?php echo $conv_img; ?>.gif"
                            alt="利便性に優れたサーバー" width="230" height="50" /></a></li>

                <li><a href="<?php bloginfo('url'); ?>/deskserver"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-sub-navi07_<?php echo $desk_img; ?>.gif"
                            alt="卓上型サーバー" width="230" height="50" /></a></li>

                <li><a href="<?php bloginfo('url'); ?>/purifier"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-sub-navi08_<?php echo $puri_img; ?>.gif"
                            alt="水道浄水型サーバー" width="230" height="50" /></a></li>


            </ul>
        </dd>
    </dl><br><br>
    <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=40" target="_blank" id="banner_ranking_sub"
        class="prrrr" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/img/frecious_slatcafe_f1box_600_500.jpg" alt="" width="230"
            height="auto" />
    </a>
   
    <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/link?link_id=60" id="banner_ranking_sub" class="prrrr"
        target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/aqua_210511-600_600.jpg"
            alt="アクアクララ AQUA FAB" width="230" height="auto" /></a>

    <a href="<?php bloginfo('url'); ?>/premium-water/" id="banner_ranking_sub" target="_blank"><img
    src="<?php bloginfo('template_directory'); ?>/img/waterserver-b_pc.png"
    alt="2014年版人気ランキング　今年No.1のおすすめウォーターサーバーは？　ランキング詳細はこちら" width="230" height="auto" /></a>

    <?php
if (function_exists('dynamic_sidebar')) {
	//ウィジェットを使う場合はこちらのコメントアウトを取る。
	//dynamic_sidebar('Sidebar Widgets');
}
 ?>

</div><!-- / sub contents box -->

<?php }else{ ?>

<?php include(TEMPLATEPATH .'/inc/spside.php'); ?>
<?php } ?>


