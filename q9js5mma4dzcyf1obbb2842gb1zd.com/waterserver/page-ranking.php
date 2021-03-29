<?php

/* Template Name: ランキング用 */

?>
<?php get_header(); ?>

<script type="application/javascript">
$(window).load(function() {
    $("#btn_search_start").click(function() {
        $('#form1').submit();
    });
});
</script>

<div id="main_contents">
    <?php if(!is_mobile()){ ?>

    <h1><img src="<?php bloginfo('template_directory'); ?>/img/top/bnr-ranking_off.jpg"
            alt="2014年版　本気でオススメできる優良ウォーターサーバー人気ランキング" width="700" height="99" /></h1>
    <div id="footmark"><a href="<?php bloginfo('url'); ?>/">トップページ</a><span>&nbsp;&gt;&nbsp;人気ランキング</span></div>

    <dl class="ranking">
        <dt>
            <img src="<?php bloginfo('template_directory'); ?>/img/feature/ttl-ranking-ranking.gif" alt="人気ランキング"
                width="173" height="19" class="contents_title" />
            <img src="<?php bloginfo('template_directory'); ?>/img/feature/txt-ranking-en.gif" alt="RANKING" width="60"
                height="12" class="contents_title_en" />
        </dt>

        <dd>
            <div>
                <p style="margin:20px;">
                    実際にウォーターサーバー利用者の評価が高い優良ウォーターサーバー10社をご紹介します！<br />各項目において高ポイントを得た選び抜かれた優秀なウォーターサーバーです。</p>
            </div>

            <?php

	$copy_array = array(
							array("catch" => "美味しい４種類の天然水から選べる!<br />赤ちゃんや小さなお子さんがいても安心して使えるサーバー<br />エコモデルは消費電力最大６０％OFF",
							"description" =>"<em>今年No1</em>に選ばれたのはコスモウォーター！ミネラル豊富な４種類の天然水からお選びいただけます。新登場の<em>らく楽スタイル ウォーターサーバー</em>はボトルを下部にセットできるから持ち上げ不要でお子さんや女性でも楽に使えて大好評です。"),
							array("catch" => "４種類の天然水から目的別にチョイス出来る！<br />初回ボトル２本プレゼント中で初期費用０円！<br/>新サーバー導入で人気急上昇中！",
							"description" =>"目的別に４種類の天然水からお選びいただけます。<em>サーバー代、配送料、メンテナンス代すべて０円</em>で今なら<span style='color:red;font-weight:bold;'>無料</span>でスタート出来ます。節電機能付き＆衛生面◎、ボトル交換らくらくのサーバーを導入し、非常におすすめです。"),
							array("catch" => "まろやかな味わいの富士山のバナジウム天然水！<br/>いまなら２パック無料＆サーバー代初月無料！",
							"description" =>"天然水としては<span style='color:red;font-weight:bold;'>当サイト最安</span>で<em>天然水をたくさん飲みたいけど家計にも優しいサーバーを選びたい</em>という方におすすめ。節電機能や温度２段階調節機能、高温循環モードなどが付いた高機能サーバーです。"),

							array("catch" => "３年連続モンドセレクション金賞受賞<br />おしゃれさが売りのウォーターサーバー",
							"description" =>"富士山のバナジウム天然水の中では唯一モンドセレクション金賞を受賞している天然水です。おしゃれなサーバーはインテリアとしてもGOODで、購入orレンタル（無料）どちらかを選べます。"),
							array("catch" => "富士山の標高1000mから採水したバナジウム天然水！<br />自動クリーンシステムや省エネ設計の高機能サーバー
", "description" =>"富士山の地下より採水したお水を山道の湧き水のような美味しさを保つために希少な非加熱処理。ほのかに甘い後味が人気です。１パックが軽量なため、女性やお子さんでも楽に取り付け可能。"),
							array("catch" => "モンドセレクション最高金賞２年連続受賞の美味しいお水！<br />節電サーバーやキャラクターサーバーなど選べる種類が豊富", "description" =>"ROろ過したきれいなお水に独自の比率でミネラルを添加して生まれた美味しいお水です。サーバー代は有料ですがしっかりとした定期メンテナンスが有り、お水の値段も天然水より安く経済的です。"),
	);

	function callback($val){

		global $water_types;
		return $water_types[$val];
	}
	$max_rank = 10;

	$pst = "publish";
	if($_GET["private"] == "on"){
		$pst = "private";
	}
	$args =  array( 'post_type' => 'waterserver','post_status' => $pst,'orderby' => 'meta_value_num', 'meta_key' => 'recommend_order_new', 'order' => 'ASC', 'posts_per_page' => $max_rank);


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
		$water_type_array = get_post_meta($post->ID,"water_type",true);
		$water_type_array = array_map('callback',$water_type_array);
		if (count($water_type_array) == 2) {

			$water_type = $water_type_array[0] . '(' . $water_type_array[1] . 'も有り)';
		} else {
			$water_type = implode('、',$water_type_array);
		}

		$catch = get_post_meta($post->ID, "ranking_catch", true);
		$description = get_post_meta($post->ID, "ranking_description", true);
        $campaignTitle = get_post_meta($post->ID, "campaign_title", true);
        $campaigndesRed = get_post_meta($post->ID, "campaign_description_red", true);
		$campaigndes = get_post_meta($post->ID, "campaign_description", true);
		$count++;
?>

            <?php if ($max_rank == $count) : ?>
            <div class="ranking_result" id="ranking_last">
                <?php else: ?>
                <div class="ranking_result" id="ranking_no<?php echo $count;?>">
                    <?php endif; ?>
                    <h2>
                        <img src="<?php bloginfo('template_directory'); ?>/img/feature/img-ranking0<?php echo $count;?>.png"
                            alt="第<?php echo $count;?>位" width="86" height="60" />
                        <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow"
                            class="prrrr"><?php echo get_post_meta($post->ID,"product_name", true); ?></a>
                    </h2>

                    <div class="server_caption">
                        <?php if($attachment_obj != ""): ?>
                        <?php
				$url = get_bloginfo('url')."/link?link_id=".$post->ID;
				if($post->ID == 60){
					$url = "https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/link?link_id=60";
				}
				 ?>
                        <a target="_blank" href="<?php echo $url; ?>" rel="external nofollow" class="prrrr">
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

                                <?php }else if($post->ID == 334){ ?>
                                <!-- <div class="hidari"><img  class="no1" src="<?php bloginfo('template_directory'); ?>/img/cokyaku_s.jpg" alt=""></div> -->
                                <?php }else if($post->ID == 60){ ?>
                                <img src="<?php bloginfo('template_directory'); ?>/img/g_type2018_b.jpg" alt="">
                                <?php if(0){ ?>
                                <a href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/new.php?id=37" target="_blank">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/akuaclara_akb20181129_125.jpg"
                                        alt=""></a>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </a>
                        <?php endif ?>
                        <div class="floatright <?php if($post->ID == 57 ||  $post->ID == 59){ ?>isim <?php } ?>">

                            <?php if($post->ID != 59){ ?>
                            <strong>
                                <?php } ?>
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
                                    height: 125px;
                                    width: auto;
                                }
                                </style>
                                <div class="no1imgwrap">
                                <a target="_blank" href="<?php echo $url; ?>" rel="external nofollow"
                                            class="prrrr"><img src="<?php the_field('banner2'); ?>" class="height125"
                                                style="display:inline-block"></a>
                                    <a href="<?php echo $url; ?>&type=free" target="_blank" class="prrrr"><img
                                            class="vert height125"
                                            src="<?php bloginfo('template_directory'); ?>/img/201214_fre.png"
                                            style="display:inline-block"></a>

                                    <a target="_blank" href="<?php echo $url; ?>&type=mama" rel="external nofollow"
                                        class="prrrr"><img src="<?php bloginfo('template_directory'); ?>/img/mamapapa_125_125_labo.jpg" class="height125" style="display:inline-block"></a>
                                    <a href="javascript:void(0);" style="cursor:inherit;"><img class="vert height125"
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
                                        class="prrrr deco-none">
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
                                        src="<?php bloginfo('template_directory'); ?>/img/2020_small.jpg" alt="">
                                    <!-- <img class="no1" src="<?php bloginfo('template_directory'); ?>/img/tama2.jpg" alt="">
 -->
                                </div>
                                <?php } ?>


                                <?php if($post->ID == 496){ ?>

                                <?php } else { ?>

                                <div class="catch" <?php if($post->ID == 59){ ?> style="color:#d83300;margin:0 0 20px;"
                                    <?php } ?>>
                                    <?php echo $catch; ?>
                                </div>
                                <?php } ?>
                                <?php if($post->ID != 59){ ?>
                            </strong>
                            <?php } ?>

                            <?php if($post->ID == 496){ ?>
                            <div class="catch" style="color:#d83300; margin-bottom:20px"><?php echo $catch; ?></div>
                            <?php } ?>
                            <?php if($post->ID == 496){ ?>
                            <p><?php echo $description; ?></p>
                            <p style="font-size:11px;line-height: 1.4; margin: 10px 0;margin: 10px 0;background: #5b9bd5;color: white;border-radius: 10px;padding:10px">
                                ※たまひよ赤ちゃんグッズ大賞とは、たまごクラブ・ひよこクラブ2021年3月号に掲載のランキング結果です。【調査方法】web調査【対象者】全国の生後０カ月～１才6カ月のお子さまを持つ、たまひよ読者2,000人</p>

                            <?php } else { ?>
                            <p><?php echo $description; ?></p>
                            <?php } ?>
                        </div>
                    </div><!-- / server_caption [ranking no1] -->

                    <?if ($campaignTitle || $campaigndesRed|| $campaigndes) : ?>
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
                            <td><span><?php echo get_post_meta($post->ID,"water_cost", true);?></span></td>
                            <th><span>お水の種類</span></th>
                            <td><span><?php echo $water_type; ?></span></td>
                        </tr>
                        <tr>
                            <th><span>サーバー代（月）</span></th>
                            <td><span><?php echo get_post_meta($post->ID,"server_cost", true);?></span></td>
                            <th><span>配送料</span></th>
                            <td><span><?php echo get_post_meta($post->ID,"shipping_cost", true);?></span></td>
                        </tr>
                        <tr>
                            <th><span>ボトルの種類</span></th>
                            <td><span><?php echo $bottles[get_field("bottle",$post->ID)];?>タイプ</span></td>
                            <th><span>電気代（月）</span></th>
                            <td><span><?php echo get_post_meta($post->ID,"electricity_cost", true);?></span></td>
                        </tr>
                        <tr class="last_tr">
                            <th><span>配送地域</span></th>
                            <td colspan="3">
                                <span><?php echo $shipping_areas[get_field("shipping_area",$post->ID)];?></span>
                            </td>
                        </tr>
                    </table>



                    <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                        class="official_site prrrr"><img
                            src="<?php bloginfo('template_directory'); ?>/img/common/btn-official-site_off.jpg"
                            alt="公式サイトへ" width="310" height="60" /></a>
                </div><!-- / ranking result [ranking no1] -->
                <?php
	endwhile;
?>

        </dd>
    </dl>
    <p id="ranking_notice">※ランキングは<a href="<?php bloginfo('url'); ?>/investigation
">調査概要</a>に基づき決定させていただいております。</p>

    <?php include(TEMPLATEPATH .'/inc/searchform.php'); ?>

    <?php }else{?>


    <h1><img src="<?php bloginfo('template_directory'); ?>/spimg/sprankbanner.png"
            alt="2014年版　本気でオススメできる優良ウォーターサーバー人気ランキング" class="sprankbanner" /></h1>
    <div id="footmark"><a href="<?php bloginfo('url'); ?>/">トップページ</a><span>&nbsp;&gt;&nbsp;人気ランキング</span></div>

    <?php
include(TEMPLATEPATH .'/inc/rank.php');
include(TEMPLATEPATH .'/inc/searchform.php');
} ?>
</div><!-- / main contents box -->

<?php if(is_mobile()){
	get_sidebar();
} ?>
</div><!-- / contents box -->

<?php get_footer(); ?>