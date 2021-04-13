<?php

/* Template Name: 特徴別リスト用2 */

?>
<?php get_header(); ?>
<script type="application/javascript">
$(window).load(function() {
    $("#btn_search_start").click(function() {
        $('#form1').submit();
    });
    console.log("feature");
});
</script>
<?php

if (is_page("natural_water")) {//天然水
  $sp_top_img = "img-visual-tennensui.png";
  $sp_top_txt = "自宅で毎日美味しい天然水が飲める天然水サーバーは非常に人気があります。その中で特におすすめのウォーターサーバー業者をご紹介します。";
  $top_img = "img-visual-tennensui.jpg";
  $top_text = "大人気の美味しい天然水が飲めるサーバーをご紹介！";
  $description = "自宅で毎日美味しい天然水が飲める天然水サーバーは非常に人気があります。その中で特におすすめのウォーターサーバー業者をご紹介します。";
  $footmark_text = "天然水";
  $title_img = "ttl-ranking-tennensui.gif";
  $value = '1';
  $max_rank = 4;
  $meta_key = 'nature_recommend';
  $key = 'nature_recommend';
  $compare = '>=';//値以上
  $type = 'NUMERIC';

  $left_menu_order = 1;
} else if (is_page("ro_water")) {//RO水
  $sp_top_img = "10000014_set2.png";
  $sp_top_txt = "RO水は不純物をほぼ完全に除去し、ミネラルを添加して製造されたお水です。<br>安心して飲める安全性と天然水の半分近いお値段が人気です。";
  $top_img = "10000014_set2.jpg";
  $top_text = "安心して飲めて美味しく、天然水よりお得なRO水のおすすめサーバー！";
  $description = "RO水は不純物をほぼ完全に除去し、その後ミネラルを添加して製造されたお水です。安心して飲める安全性と天然水の半分近いお値段に人気があります。";
  $footmark_text = "RO水";
  $title_img = "ttl-ranking-rosui.gif";
  $value = "ro";
  $max_rank = 2;


  $meta_key = 'ro_recommend';
  $key = 'ro_recommend';
  $value = '1';
  $compare = '>=';//値以上
  $type = 'NUMERIC';

  $left_menu_order = 2;

} else if (is_page("electric_utility_expense")) {//電気代
  $sp_top_img = "10000014_set3.png";
  $sp_top_txt = "「ウォーターサーバーは通常月約1,000円ぐらいの電気代がかかると言われています。しかし、節電機能がついたサーバーを選ぶことで消費電力が最大30?65％ほど抑えられ、少しでも月のトータルコストを抑えたい方、エコを考えている方におすすめです。」";
  $top_img = "10000014_set3.jpg";
  $top_text = "通常のサーバーよりも電気代がお得な節電機能付きおすすめサーバー！";
  $description = "ウォーターサーバーは通常月約1,000円ぐらいの電気代がかかると言われています。しかし、節電機能が付いたサーバーを選ぶことで消費電力が最大３０～６５％ほど抑えられ、少しでも月のトータルコストを抑えたい方、エコを考えている方におすすめです。";
  $footmark_text = "電気代が安くなる";
  $title_img = "ttl-ranking-denkidai.gif";

  $meta_key = 'save_electricity';
  $key = 'save_electricity';
  $value = '1';
  $compare = '>=';//値以上
  $type = 'NUMERIC';
  $max_rank = 4;

  $left_menu_order = 3;

} else if (is_page("cost")) {//お水の価格が安い
  $sp_top_img = "10000014_set4.png";
  $sp_top_txt = "お水の種類は天然水とRO水の2種類ありますが、お水の値段が安いのはRO水になります。<br>RO水は大家族やよく体を動かしたりとお水を大量に消費される家庭におすすめです。";
  $top_img = "10000014_set4.jpg";
  $top_text = "家計に優しいお水の価格が安いサーバーはこちら！";
  $description = "お水の種類は天然水とRO水の２種類ありますが、お水の値段が安いのはRO水になります。RO水は大家族やよく体を動かしたりとお水を大量に消費される家庭におすすめです。";
  $footmark_text = "お水の価格が安い";
  $title_img = "ttl-ranking-kakakugayasui.gif";

  $meta_key = 'leftmenu_low_price';
  $key = 'leftmenu_low_price';
  $value = '1';
  $compare = '>=';//値以上
  $type = 'NUMERIC';
  $max_rank = 3;

  $left_menu_order = 4;

} else if (is_page("baby")) {//赤ちゃんのミルク作りに
  $sp_top_img = "10000014_set5.png";
  $sp_top_txt = "赤ちゃんはまだ胃や腸が未発達のために消費するのに負担がかからないお水がおすすめです。<br>当サイトでご紹介している業者は全て赤ちゃんの負担にならない軟水ですので安心してお選びください。特におすすめの業者はこちらです。";
  $top_img = "10000014_set5.jpg";
  $top_text = "赤ちゃんのミルク作りに最適なおすすめサーバー！";
  $description = "赤ちゃんはまだ胃や腸が未発達のため消費するのに負担がかからないお水がおすすめです。当サイトでご紹介している業者はすべて赤ちゃんの負担にならない軟水ですので安心してお選び下さい。特におすすめの業者はこちらです。";
  $footmark_text = "赤ちゃんのミルク作りに";
  $title_img = "ttl-ranking-akachan.gif";

  $meta_key = 'milk_recommend';
  $key = 'milk_recommend';
  $value = '1';
  $compare = '>=';//値以上
  $type = 'NUMERIC';
  $max_rank = 4;

  $left_menu_order = 5;

} else if (is_page("convenience")) {//利便性に優れたサーバー
  $sp_top_img = "10000014_set1.png";
  $sp_top_txt = "ウォーターサーバーの良さはやはり生活をより快適で便利にしてくれるところです。<br>サーバーの機能や仕組みがしっかりしていて利便性の高いサーバーをご紹介します。";
  $top_img = "10000014_set1.jpg";
  $top_text = "便利さ重視！高機能なおすすめサーバーをご紹介！";
  $description = "ウォーターサーバーの良さはやはり生活をより快適で便利にしてくれるところです。サーバーの機能や仕組みがしっかりしていて利便性の高いサーバーをご紹介します。";
  $footmark_text = "利便性に優れたサーバー";
  $title_img = "ttl-ranking-ribensei.gif";

  $meta_key = 'useful';
  $key = 'useful';
  $value = '1';
  $compare = '>=';//値以上
  $type = 'NUMERIC';
  $max_rank = 4;

  $left_menu_order = 6;

}else if (is_page("deskserver")) {//卓上型サーバー
	$sp_top_img = "10000014_set6-sp.jpg";
	$sp_top_txt = "卓上型ウォーターサーバーはコンパクトなので、キッチンやリビング等で省スペースで使えて、一人暮らしの方にも人気です。インテリアにもなるようなおしゃれなサーバーも多く登場しています。このページでは、おすすめの卓上型サーバーBEST3をご紹介します。";
	$top_img = "10000014_set6.jpg";
	$top_text = "卓上型ウォーターサーバーをご紹介！";
	$description = "卓上型ウォーターサーバーはコンパクトなので、キッチンやリビング等で省スペースで使えて、一人暮らしの方にも人気です。インテリアにもなるようなおしゃれなサーバーも多く登場しています。このページでは、おすすめの卓上型サーバーBEST3をご紹介します。";
	$footmark_text = "卓上型サーバー";
	$title_img = "ttl-ranking-desk.gif";
	$value = '1';
	$max_rank = 3;
	$meta_key = 'deskserver_recommend';
	$key = 'deskserver_recommend';
	$compare = '>=';//値以上
	$type = 'NUMERIC';
	$left_menu_order = 7;

}else if (is_page("purifier")) {//水道浄水型
	$sp_top_img = "10000014_set7-sp.jpg";
	$sp_top_txt = "水道水をきれいに浄水して、毎月定額でおいしいお水を飲み放題、料理や炊飯等にも好きなだけたっぷり使える浄水型ウォーターサーバーがいま人気急上昇中です。このページでは、おすすめの浄水型サーバーBEST3をご紹介します。";
	$top_img = "10000014_set7.jpg";
	$top_text = "水道水をきれいに浄水するサーバーをご紹介！";
	$description = "水道水をきれいに浄水して、毎月定額でおいしいお水を飲み放題、料理や炊飯等にも好きなだけたっぷり使える浄水型ウォーターサーバーがいま人気急上昇中です。このページでは、おすすめの浄水型サーバーBEST3をご紹介します。";
	$footmark_text = "水道浄水型サーバー";
	$title_img = "ttl-ranking-puri.gif";
	$value = '1';
	$max_rank = 3;
	$meta_key = 'purifier_recommend';
	$key = 'purifier_recommend';
	$compare = '>=';//値以上
	$type = 'NUMERIC';
	$left_menu_order = 8;

}
?>
<div id="main_contents">
    <?php if(!is_mobile()){ ?>
    <?php if ($top_img) : ?>
    <h1><img src="<?php bloginfo('template_directory'); ?>/img/feature/<?php echo $top_img;?>"
            alt="<?php echo $top_text . " " . $description; ?>" width="700" /></h1>

    <?php else : ?>
    <h1><?php echo $top_text;?></h1>
    <?php endif; ?>
    <?php }else{ ?>
    <?php if ($top_img) : ?>
    <h1><img src="<?php bloginfo('template_directory'); ?>/spimg/<?php echo $sp_top_img;?>"
            alt="<?php echo $top_text . " " . $description; ?>" width="700" />
        <p class="sp_top_txt">
            <?php echo $sp_top_txt; ?>
        </p>
    </h1>

    <?php else : ?>
    <h1><?php echo $top_text;?></h1>
    <?php endif; ?>
    <?php } ?>

    <div id="footmark"><a
            href="<?php bloginfo('url'); ?>/">トップページ</a><span>&nbsp;&gt;&nbsp;<?php echo $footmark_text;?></span></div>

    <dl id="rank" class="ranking box">
        <dt class="boxtitle">
            <img src="<?php bloginfo('template_directory'); ?>/img/feature/<?php echo $title_img;?>"
                alt="<?php echo $footmark_text;?>ランキング" height="19" class="contents_title" />
            <?php if(!is_mobile()){ ?>
            <img src="<?php bloginfo('template_directory'); ?>/img/feature/txt-ranking-en.gif" alt="RANKING" width="60"
                height="12" class="contents_title_en" />
            <?php } ?>
        </dt>

        <dd>
            <?php if (!$top_img) : ?>
            <div>
                <p style="margin:20px;font-size:108%"><?php echo $description; ?></p>
            </div>
            <?php endif; ?>

            <?php

  function callback($val){

    global $water_types;
    return $water_types[$val];
  }
  $pst = "publish";
  if($_GET["private"] == "on"){
    $pst = "private";
  }
  $args =  array( 'post_type' => 'waterserver','post_status' => $pst,'orderby' => 'meta_value','meta_key' => $meta_key, 'order' => 'ASC','posts_per_page' => $max_rank);
  $search_custom[] = array("key" => $key, "value"=>$value, "compare"=> $compare, "type"=>$type);
  $args['meta_query'] = $search_custom;


  $count = 0;
  $loop = new WP_Query($args);
  while ( $loop->have_posts() ) : $loop->the_post();
    $fields = get_field_object("bottle");
    $bottles = $fields['choices'];
    $fields = get_field_object("water_type");
    $water_types = $fields['choices'];
    $fields = get_field_object("shipping_area");
    $shipping_areas = $fields['choices'];
  endwhile;

  while ( $loop->have_posts() ) : $loop->the_post();
    $attachment_obj = get_field('banner',$post->ID);
    $attachment_obj2 = get_field('banner2',$post->ID);
    $water_type_array = get_post_meta($post->ID,"water_type",true);
    $water_type_array = array_map('callback',$water_type_array);
    if (count($water_type_array) == 2) {

      $water_type = $water_type_array[0] . '(' . $water_type_array[1] . 'も有り)';
    } else {
      $water_type = implode('、',$water_type_array);
    }

    //コピーと説明を取得
    $catch_name = "leftmenu_catch" . $left_menu_order;
    $description_name = "leftmenu_description" . $left_menu_order;

    $catch = get_post_meta($post->ID, $catch_name, true);
    $item_description = get_post_meta($post->ID, $description_name, true);
    $campaignTitle = get_post_meta($post->ID, "campaign_title", true);
    $campaigndesRed = get_post_meta($post->ID, "campaign_description_red", true);
    $campaigndes = get_post_meta($post->ID, "campaign_description", true);

    $count++; ?>
            <?php if ($count == $max_rank) : ?>
            <div class="<?php if(!is_mobile()){ ?>ranking_result<?php }else{ ?>ranking_resultsp<?php } ?>"
                id="ranking_last">
                <?php else: ?>
                <div class="<?php if(!is_mobile()){ ?>ranking_result<?php }else{ ?>ranking_resultsp<?php } ?>"
                    id="ranking_no<?php echo $count;?>">
                    <?php endif; ?>

                    <?php if(!is_mobile()){ ?>

                    <h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/feature/img-ranking0<?php echo $count;?>.png"
                            alt="第<?php echo $count;?>位" width="86" height="60" />
                        <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow"
                            class="prrrr"><?php echo get_post_meta($post->ID,"product_name", true); ?></a>
                    </h2>

                    <div class="server_caption">
                        <?php if($attachment_obj != ""){ ?>
                        <?php
            $url = get_bloginfo('url')."/link?link_id=".$post->ID;
           ?>
                        <a href="<?php echo $url; ?>" rel="external nofollow" target="_blank" class="prrrr">
                            <?php if($post->ID == 59){ ?>
                            <style>
                            .fre {
                                width: 147px;
                            }
                            </style>
                            <div class="feature_img fre">
                                <?php } else { ?>
                                <div class="feature_img">
                                    <?php } ?>
                                    <img src="<?php echo $attachment_obj; ?>"
                                        alt="<?php echo get_post_meta($post->ID,"product_name", true); ?>" />
                                    <?php if($post->ID == 57){ ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/gd.png" alt="">
                                    <?php }else if($post->ID == 496){ ?>
                                    <!-- <img class="no1" src="<?php bloginfo('template_directory'); ?>/img/pre-summer-120120.png" alt=""> -->
                                    <?php }else if($post->ID == 59){ ?>
                                    <!-- </a><a target="_blank" href="<?php echo $url; ?>&type=mama" rel="external nofollow" class="prrrr">
                <img src="<?php the_field('banner2'); ?>" alt=""> -->
                                    <?php }else if($post->ID == 334){ ?>
                                    <!-- <div class="hidari"><img  class="no1" src="<?php bloginfo('template_directory'); ?>/img/cokyaku_s.jpg" alt=""></div> -->
                                    <?php }else if($post->ID == 60){ ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/g_type2018_b.jpg" alt="">

                                    <?php if(0){ ?>
                                    <a href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/new.php?id=37"
                                        target="_blank">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/akuaclara_akb20181129_125.jpg"
                                            alt=""></a>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                        </a>

                        <div class="floatright <?php if($post->ID == 57 || $post->ID == 59 ){ ?>isim <?php } ?>">
                            <strong>

                                <?php if($post->ID == 57){ ?>
                                <div class="no1imgwrap">
                                    <img class="no1" src="<?php bloginfo('template_directory'); ?>/img/no1.png" alt="">
                                </div>
                                <?php } ?>

                                <?php if($post->ID == 496){ ?>
                                <style>
                                .height125 {
                                    height: 125px;
                                    width: auto;
                                }

                                .newwrap {
                                    top: 0 !important;
                                }

                                .deco-none {
                                    text-decoration: none !important;
                                }

                                .sign {
                                    width: 95px;
                                    font-size: 11px;
                                    color: #444;
                                    position: relative;
                                    top: 110px;
                                    right: 63px;
                                    transform: translateX(-50%);
                                }
                                </style>
                                <div class="no1imgwrap newwrap">
                                    <a target="_blank" href="<?php echo $url; ?>" rel="external nofollow"
                                        class="prrrr deco-none">
                                        <img class="no1 height125"
                                            src="<?php bloginfo('template_directory'); ?>/img/bn_02_125×125.jpg" alt=""
                                            style="width: 125px">
                                    </a>
                                    <img class="no1 height125"
                                        src="<?php bloginfo('template_directory'); ?>/img/customerno1.png" alt=""
                                        style="width: 100px">
                                    <img class="no1" src="<?php bloginfo('template_directory'); ?>/img/g_type2018_c.jpg"
                                        alt="" style="width: 90px">
                                    <img class="no1"
                                        src="<?php bloginfo('template_directory'); ?>/img/tamahiyo-2020new.jpg" alt=""
                                        style="width: 95px">
                                    <span class="sign">※</span>
                                </div>
                                <?php } ?>

                                <!--フレシャスバナー-->
                                <?php if($post->ID == 59){ ?>
                                <style>
                                .height125 {
                                    width: 125px !important;
                                    height: 125px;
                                    width: auto;
                                }
                                </style>
                                <div class="no1imgwrap">
                                    <a target="_blank" href="<?php echo $url; ?>"
                                        rel="external nofollow" class="prrrr"><img src="<?php the_field('banner2'); ?>"
                                            class="height125" style="display:inline-block"></a>
                                    <a href="<?php echo $url; ?>&type=free" target="_blank" class="prrrr"><img
                                            class="vert height125"
                                            src="<?php bloginfo('template_directory'); ?>/img/201214_fre.png"
                                            style="display:inline-block"></a>
                                    <a target="_blank" href="<?php echo $url; ?>&type=mama" rel="external nofollow"
                                        class="prrrr"><img
                                            src="<?php bloginfo('template_directory'); ?>/img/mamapapa_125_125_labo.jpg"
                                            class="height125" style="display:inline-block"></a>
                                    <a href="javascript:void(0);" style="cursor:inherit;"><img class="vert"
                                            src="<?php bloginfo('template_directory'); ?>/img/logo.jpg"
                                            style="display:inline-block"></a>
                                </div>
                                <?php } ?>
                                <?php if($post->ID == 60){ ?>
                                <style>
                                .height125 {
                                    height: 125px !important;
                                    width: auto;
                                    margin: 0 5px 20px 0 !important;
                                }

                                .newwrap {
                                    position: relative;
                                    top: 0 !important;
                                    left: -15px;
                                    width: 110%;
                                }

                                .deco-none {
                                    text-decoration: none !important;
                                }
                                </style>
                                <div class="no1imgwrap newwrap">
                                    <a target="_blank" href="<?php echo $url; ?>" rel="external nofollow"
                                        class="prrrr deco-none">
                                        <img class="no1 height125"
                                            src="<?php bloginfo('template_directory'); ?>/img/aqua_250_250.jpg"
                                            alt="" style="width: 125px"></a>
                                    <a href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/new.php?id=31" target="_blank"
                                        class="prrrr">
                                        <img class="no1 height125"
                                            src="<?php bloginfo('template_directory'); ?>/img/kosodate_150-150.gif" alt=""
                                            style="width: 125px"></a>
                                    <a target="_blank" href="<?php echo $url; ?>" rel="external nofollow"
                                        class="prrrr deco-none">
                                        <img class="no1 height125"
                                            src="<?php bloginfo('template_directory'); ?>/img/fab.gif" alt=""
                                            style="width: 125px">
                                        <img class="no1 height125"
                                            src="<?php bloginfo('template_directory'); ?>/img/with.gif" alt=""
                                            style="width: 125px">
                                    </a>
                                </div>
                                <?php } ?>
                                <?php if($post->ID == 334){ ?>
                                <style>
                                .m20 {
                                    margin: 0 5px 20px 0 !important;
                                }

                                .width125 {
                                    width: 125px !important;
                                }

                                .heightauto {
                                    height: auto !important;
                                }

                                .deco-none {
                                    text-decoration: none !important;
                                }
                                </style>
                                <div class="no1imgwrap">
                                    <a target="_blank"
                                        href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/link?link_id=334"
                                        rel="external nofollow" class="prrrr deco-none">
                                        <img class="no1 width125 m20"
                                            src="<?php bloginfo('template_directory'); ?>/img/creclafit2_300.png"
                                            alt="">
                                    </a>
                                    <img class="no1 m20 heightauto"
                                        src="<?php bloginfo('template_directory'); ?>/img/no1_small.jpg" alt="">
                                    <img class="no1 m20 heightauto"
                                        src="<?php bloginfo('template_directory'); ?>/img/2021_tamahiyo.jpg" alt="">
                                    <!-- <div class="no1imgwrap">
							<img class="no1" src="<?php bloginfo('template_directory'); ?>/img/coisi_s.jpg" alt="">
							<img class="no1" src="<?php bloginfo('template_directory'); ?>/img/tama0.jpg" alt="">
							<img class="no1" src="<?php bloginfo('template_directory'); ?>/img/tama2.jpg" alt=""> -->

                                </div>
                                <?php } ?>
                                <?php if($post->ID == 496){ ?>
                                <?php } else if($post->ID == 59){ ?>
                                <?php } else { ?>
                                <div class="catch">
                                    <?php echo $catch; ?>
                                </div>
                                <? } ?>
                            </strong>
                            <?php if($post->ID == 496){ ?>

                            <div class="catch" style="color:#d83300; margin-bottom:20px"><?php echo $catch; ?></div>
                            <?php } else if($post->ID == 59){ ?>
                            <div class="catch" style="color:#d83300; margin-bottom:20px"><?php echo $catch; ?></div>
                            <?php } ?>

                            <?php if($post->ID == 496){ ?>
                            <p><?php echo $item_description; ?></p>
                            <p style="font-size:11px;line-height: 1.4; margin: 10px 0;margin: 10px 0;background: #5b9bd5;color: white;border-radius: 10px;padding:10px">
                                ※たまひよ赤ちゃんグッズ大賞とは、たまごクラブ・ひよこクラブ2021年3月号に掲載のランキング結果です。【調査方法】web調査【対象者】全国の生後０カ月～１才6カ月のお子さまを持つ、たまひよ読者2,000人</p>

                            <?php } else { ?>
                            <p><?php echo $item_description; ?></p>
                            <?php } ?>
                        </div>
                    </div><!-- / server_caption [ranking no1] -->

                    <?if ($campaigndesRed|| $campaigndes) : ?>
                    <div class="cam-box">
                        <div class="left-con">
                            <h4 style="text-align: center"><?php echo $campaignTitle; ?><br>キャンペーン</h4>
                            <img src="<?php bloginfo('template_directory'); ?>/img/present.png" alt="">
                        </div>
                        <div class="right-con">
                            <p class="cam-descript">
                                <span class="red"><?php echo $campaigndesRed; ?></span><?php echo $campaigndes; ?>
                            </p>
                        </div>
                    </div>
                    <? endif; ?>


                    <table>
                        <tr>
                            <th><span>お水の価格（1本）</span></th>
                            <td><span>
                                    <?php 
                if (is_page("cost") && get_post_meta($post->ID,"product_name", true) == "コスモウォーター") : echo "1197円～(12L) <br />※RO水の場合"; 
                else:
                echo number_format(get_post_meta($post->ID,"water_cost", true)).'円'; 
                echo get_post_meta($post->ID,"water_cost2", true); 
                 endif; ?></span></td>
                            <th><span>お水の種類</span></th>
                            <td><span><?php echo $water_type; ?></span></td>
                        </tr>
                        <tr>
                            <th><span>サーバー代（月）</span></th>
                            <td><span>
                            <?php if(!preg_match("/[0-9]{4}/",get_post_meta($post->ID, "server_cost", true))) : ?>
                                <?php echo get_post_meta($post->ID, "server_cost", true); ?>
                                <?php echo get_post_meta($post->ID, "server_cost2", true); ?>
                                <?php else : ?>
                                <?php echo number_format(get_post_meta($post->ID, "server_cost", true)); ?>円
                                <?php echo get_post_meta($post->ID, "server_cost2", true); ?>
                            <?php endif; ?>
                            </span></td>
                            <th><span>配送料</span></th>
                            <td><span><?php echo get_post_meta($post->ID,"shipping_cost", true);?></span></td>
                        </tr>
                        <tr>
                            <th><span>ボトルの種類</span></th>
                            <td><span><?php echo $bottles[get_field("bottle",$post->ID)];?>タイプ</span></td>
                            <th><span>電気代（月）</span></th>
                            <td><span>
                            <?php if(!preg_match("/[0-9]{4}/",get_post_meta($post->ID, "electricity_cost", true))) : ?>
                                <?php echo get_post_meta($post->ID, "electricity_cost", true); ?>
                                <?php echo get_post_meta($post->ID, "electricity_cost2", true); ?>
                                <?php else : ?>
                                <?php echo number_format(get_post_meta($post->ID, "electricity_cost", true)); ?>円
                                <?php echo get_post_meta($post->ID, "electricity_cost2", true); ?>
                            <?php endif; ?>
                            </span></td>
                        </tr>
                        <tr class="last_tr">
                            <th><span>配送地域</span></th>
                            <td colspan="3">
                                <span><?php echo $shipping_areas[get_field("shipping_area",$post->ID)];?></span>
                            </td>
                        </tr>
                    </table>

                    <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                        class="official_site prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/common/btn-official-site_off.jpg"
                            alt="公式サイトへ" width="310" height="60" /></a>
                    <?php } ?>
                    <?php } else { ?>

                    <h2 class="rank_item_title">
                        <img src="<?php bloginfo('template_directory'); ?>/img/feature/img-ranking0<?php echo $count;?>.png"
                            alt="第<?php echo $count;?>位" width="86" height="60" />
                        <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow"
                            class="prrrr"><?php echo get_post_meta($post->ID,"product_name", true); ?></a>
                    </h2>

                    <div class="rank_caption">
                        <?php if($attachment_obj != ""): ?>
                        <?php if($post->ID == 59){ ?>
                            <style>
                                .fre {
                                    width: 125px;
                                    display: inline-block;
                                    margin-bottom: 5px;
                                }
                                .fre img {
                                    width: 125px
                                }
                                </style>
                            <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr fre">
                            <img src="<?php echo $attachment_obj; ?>"
                                alt="<?php echo get_post_meta($post->ID, "product_name", true); ?>" />
                        </a>
                        <?php } else { ?>
                        <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr">
                            <img src="<?php echo $attachment_obj; ?>"
                                alt="<?php echo get_post_meta($post->ID, "product_name", true); ?>" />
                        </a>
                        <?php } ?>
                        <?php endif; ?>
                        <?php if($post->ID == 57){ ?>
                        <a class="gd" target="_blank"
                            href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr">
                            <img src="<?php bloginfo('template_directory'); ?>/img/gd.png" alt="">
                        </a>
                        <?php }else if($post->ID == 496){ ?>
                        
                        <a class="gd" target="_blank"
                            href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr">
                            <img class="no1" src="<?php bloginfo('template_directory'); ?>/img/tamahiyo-2020new.jpg"
                                alt="">
                        </a>

                        <style>
                        .sign {
                            text-align: center;
                            width: 80px;
                        }
                        </style>
                        <p class="sign">※</p>

                        <?php }else if($post->ID == 59){ ?>
                        <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr"><img src="<?php the_field('banner2'); ?>" class="sign"
                                style="display:inline-block"></a>
                        <?php }else if($post->ID == 334){ ?>
                        <!-- <div class="hidari"><img  class="no1 sp spimg" src="<?php bloginfo('template_directory'); ?>/img/cokyaku_s.jpg" alt=""></div> -->
                        <?php }else if($post->ID == 60){ ?>
                        <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr">
                            <img src="<?php bloginfo('template_directory'); ?>/img/fab.gif" alt=""
                                style="margin-top:5px;">
                        </a>
                        <br><img src="<?php bloginfo('template_directory'); ?>/img/g_type2018_b.jpg" alt="">
                        <?php if(0){ ?>
                        <a class="gd" target="_blank" href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/new.php?id=37"
                            rel="external nofollow">
                            <img src="<?php bloginfo('template_directory'); ?>/img/akuaclara_akb20181129_125.jpg"
                                alt="">
                        </a>
                        <?php } ?>
                        <?php } ?>
                        <div class="rankright"><strong>
                                <?php if($post->ID == 57){ ?>
                                <div class="spimbox">
                                    <img class="no1 sp" src="<?php bloginfo('template_directory'); ?>/img/no1.png"
                                        alt="">
                                </div>
                                <?php } ?>
                                <?php if($post->ID == 496){ ?>
                                <style>
                                .po-top8 {
                                    position: relative;
                                    top: -8px;
                                }

                                .tsuika {
                                    margin-top: 8px;
                                }
                                </style>
                                <div class="spimbox tsuika w100">
                                    <!-- <img class="no1 sp no1_2" src="<?php bloginfo('template_directory'); ?>/img/no1_2.png" alt=""> -->


                                    <a target="_blank"
                                        href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                                        rel="external nofollow" class="prrrr">
                                        <img class="no1 sp no1_2 po-top8"
                                            src="<?php bloginfo('template_directory'); ?>/img/bn_02_125×125.jpg"
                                            alt=""></a>
                                    <img class="no1 sp no1_2 po-top8"
                                        src="<?php bloginfo('template_directory'); ?>/img/customerno1.png" alt=""
                                        style="margin-left: 5px!important; width: 65px!important;">
                                    <img class="no1 sp no1_2 po-top8"
                                        src="<?php bloginfo('template_directory'); ?>/img/g_type2018_c.jpg" alt=""
                                        style="margin-left: 5px!important; width: 60px!important;">

                                </div>
                                <?php } ?>
                                <?php if($post->ID == 59){ ?>
                                <style>
                                a {
                                    text-decoration: none;
                                }
                                .w100 {
                                    display: flex;
                                }
                                .frebox {
                                    margin-left: 5px;
                                }
                                </style>
                                <div class="spimbox w100 frebox">
                                    <a href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/new.php?id=41"
                                        target="_blank">
                                        <img class="no1 vert sp"
                                            src="<?php bloginfo('template_directory'); ?>/img/201214_fre.png" alt=""
                                            style="display:inline-block; margin-right:5px!important;"></a>
                                    <a class="" target="_blank"
                                        href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>?type=mama"
                                        rel="external nofollow" class="prrrr">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/mamapapa_125_125_labo.jpg" >
                                    </a>
                                    <img class="no1 vert sp" src="<?php bloginfo('template_directory'); ?>/img/logo.jpg"
                                        alt="" style="width: 50px!important;">
                                </div>
                                <!-- <div class="spimbox2">
            <a href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/new.php?id=41" target="_blank" class="prrrr">
            <img class="no1 sp vert" src="<?php bloginfo('template_directory'); ?>/img/201214_fre.png" alt=""></a>
            <img class="no1 sp vert" src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt="">
            
          </div> -->
                                <?php } ?>
                                <?php if($post->ID == 60){ ?>
                                <style>
                                .w100 {
                                    position: relative;
                                    left: -7px;
                                }
                                </style>
                                <div class="spimbox w100">
                                    <a target="_blank"
                                        href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                                        rel="external nofollow" class="prrrr">
                                        <img class="no1 sp no1_2"
                                            src="<?php bloginfo('template_directory'); ?>/img/aqua_250_250.jpg"
                                            alt=""></a>
                                    <a href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/new.php?id=31" target="_blank"
                                        class="prrrr">
                                        <img class="no1 sp no1_2"
                                            src="<?php bloginfo('template_directory'); ?>/img/kosodate_150-150.gif" alt=""
                                            style="margin-left: 5px;"></a>
                                    <a target="_blank"
                                        href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                                        rel="external nofollow" class="prrrr">
                                        <img class="no1 sp no1_2"
                                            src="<?php bloginfo('template_directory'); ?>/img/with.gif" alt=""
                                            style="margin-left: 5px;">
                                    </a>
                                </div>
                                <?php } ?>
                                <?php if($post->ID == 334){ ?>
                                <div class="spimbox">
                                    <a target="_blank"
                                        href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/link?link_id=334"
                                        rel="external nofollow" class="prrrr deco-none">
                                        <img class="no1 width125 m20"
                                            src="<?php bloginfo('template_directory'); ?>/img/creclafit2_300.png"
                                            alt="">
                                    </a>
                                    <img class="no1 sp" src="<?php bloginfo('template_directory'); ?>/img/no1_small.jpg"
                                        alt="">

                                    <img class="no1 sp"
                                        src="<?php bloginfo('template_directory'); ?>/img/2021_tamahiyo.jpg" alt="">
                                    <!--<img class="no1 sp" src="<?php bloginfo('template_directory'); ?>/img/coisi_s.jpg" alt="">
              <img class="no1" src="<?php bloginfo('template_directory'); ?>/img/tama0.jpg" alt="">
                            <img class="no1" src="<?php bloginfo('template_directory'); ?>/img/tama2.jpg" alt="">
              -->
                                </div>
                                <?php } ?>
                                <?php echo $catch; ?>
                            </strong></div>
                    </div>
                    <table>
                        <tr>
                            <th><span>お水の価格（1本）</span></th>
                            <td><span><?php echo number_format(get_post_meta($post->ID, "water_cost", true)); ?>円<?php echo get_post_meta($post->ID, "water_cost2", true); ?></span></td>
                        </tr>
                        <tr>
                            <th><span>お水の種類</span></th>
                            <td><span><?php echo $water_type; ?></span></td>
                        </tr>
                        <tr>
                            <th><span>サーバー代（月）</span></th>
                            <td><span>
                            <?php if(!preg_match("/[0-9]{4}/",get_post_meta($post->ID, "server_cost", true))) : ?>
                                <?php echo get_post_meta($post->ID, "server_cost", true); ?>
                                <?php echo get_post_meta($post->ID, "server_cost2", true); ?>
                                <?php else : ?>
                                <?php echo number_format(get_post_meta($post->ID, "server_cost", true)); ?>円
                                <?php echo get_post_meta($post->ID, "server_cost2", true); ?>
                                <?php endif; ?>
                            </span></td>
                        </tr>
                        <tr>
                            <th><span>配送料</span></th>
                            <td><span><?php echo get_post_meta($post->ID,"shipping_cost", true);?></span></td>
                        </tr>
                        <tr>
                            <th><span>ボトルの種類</span></th>
                            <td><span><?php echo $bottles[get_field("bottle",$post->ID)];?>タイプ</span></td>
                        </tr>
                        <tr>
                            <th><span>電気代（月）</span></th>
                            <td><span>
                            <?php if(!preg_match("/[0-9]{4}/",get_post_meta($post->ID, "electricity_cost", true))) : ?>
                                <?php echo get_post_meta($post->ID, "electricity_cost", true); ?>
                                <?php echo get_post_meta($post->ID, "electricity_cost2", true); ?>
                                <?php else : ?>
                                <?php echo number_format(get_post_meta($post->ID, "electricity_cost", true)); ?>円
                                <?php echo get_post_meta($post->ID, "electricity_cost2", true); ?>
                            <?php endif; ?>
                            </span></td>
                        </tr>
                        <tr class="last_tr">
                            <th><span>配送地域</span></th>
                            <td colspan="3">
                                <span><?php echo $shipping_areas[get_field("shipping_area",$post->ID)];?></span>
                            </td>
                        </tr>
                    </table>
                    <?php if($post->ID == 334) : ?>
                        <p><?php echo $item_description; ?></p>
                        
                    <?php elseif($post->ID == 496) : ?>
                        <p><?php echo $item_description; ?></p>
                        <p style="font-size:10px;line-height: 1.4; margin: 10px 0;background: #5b9bd5;color: white;border-radius: 10px;padding:10px">
                                ※たまひよ赤ちゃんグッズ大賞とは、たまごクラブ・ひよこクラブ2021年3月号に掲載のランキング結果です。【調査方法】web調査【対象者】全国の生後０カ月～１才6カ月のお子さまを持つ、たまひよ読者2,000人</p>
                        <?php else : ?>
                    <p><?php echo $item_description; ?></p>
                    <!-- <p style="font-size:10px;line-height: 1.2; margin: 10px 0;">
                        ※たまひよ赤ちゃんグッズ大賞とは、たまごクラブ・ひよこクラブ2020年3月号に掲載のランキング結果です。
                        　【調査方法】web調査 【対象者】全国の生後０カ月～１才6カ月のお子さまを持つ、たまひよ読者2,000人</p> -->
                    <?php endif; ?>
                    <?if ($campaigndesRed|| $campaigndes) : ?>
                    <div class="cam-box">
                        <div class="left-con">
                            <h4 style="text-align: center"><?php echo $campaignTitle; ?>キャンペーン</h4>
                            <img src="<?php bloginfo('template_directory'); ?>/img/present.png" alt="">
                        </div>
                        <div class="right-con">
                            <p class="cam-descript">
                                <span class="red"><?php echo $campaigndesRed; ?></span><?php echo $campaigndes; ?>
                            </p>
                        </div>
                    </div>
                    <? endif; ?>

                    <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                        class="official_site prrrr">
                        <span>公式サイトはこちら</span>
                    </a>

                    <?php } ?>

                </div><!-- / ranking result [ranking no1] -->

                <?php endwhile; ?>

        </dd>
    </dl>
    <p id="ranking_notice">※ランキングは<a href="<?php bloginfo('url'); ?>/investigation
">調査概要</a>に基づき決定させていただいております。</p>

    <?php include('inc/searchform.php'); ?>

</div><!-- / main contents box -->
<?php if(is_mobile()){
  get_sidebar();
} ?>
</div><!-- / contents box -->

<?php get_footer(); ?>