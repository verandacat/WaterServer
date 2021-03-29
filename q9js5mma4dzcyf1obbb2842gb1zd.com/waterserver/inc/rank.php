<dl id="rank" class="ranking box">
    <dt class="boxtitle">
        ウォーターサーバーランキング
    </dt>

    <dd>
        <div>
            <p class="titlecap">実際にウォーターサーバー利用者の評価が高い優良ウォーターサーバー10社をご紹介します！</p>
        </div>

        <?php
	global $is_top;
	if(!isset($is_top)){ $is_top = false; }
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

	$max_rank = 5;
	if(!$is_top){
		$max_rank = 10;
	}

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
        <div class="ranking_resultsp" id="ranking_last">
            <?php else: ?>
            <div class="ranking_resultsp" id="ranking_no<?php echo $count;?>">
                <?php endif; ?>
                <h2 class="rank_item_title">
                    <img src="<?php bloginfo('template_directory'); ?>/spimg/r<?php echo $count;?>.png"
                        alt="第<?php echo $count;?>位" width="86" height="60" />
                    <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                        class="prrrr"><?php echo get_post_meta($post->ID,"product_name", true); ?></a>
                </h2>

                <div class="rank_caption">
                    <?php if($attachment_obj != ""): ?>
                    <div class="rank_left_img">
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
                        <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr">
                            <img src="<?php echo $attachment_obj; ?>"
                                alt="<?php echo get_post_meta($post->ID,"product_name", true); ?>" />
                        </a>
                        <?php } ?>
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
                            <img src="<?php bloginfo('template_directory'); ?>/img/tamahiyo-2020new.jpg" alt="">

                        </a>
                        <?php }else if($post->ID == 59){ ?>
                        <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                        rel="external nofollow" class="prrrr"><img src="<?php the_field('banner2'); ?>" class="sign"
                            style="display:inline-block"></a>
                        <?php }else if($post->ID == 334){ ?>
                        <!-- <img class="no1 sp" src="<?php bloginfo('template_directory'); ?>/img/cokyaku_s.jpg" alt=""> -->
                        <?php }else if($post->ID == 60){ ?>
                        <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr">
                            <img src="<?php bloginfo('template_directory'); ?>/img/fab.gif" alt=""
                                style="margin-top:5px;"></a>
                        <br><img src="<?php bloginfo('template_directory'); ?>/img/g_type2018_b.jpg" alt="">
                        <?php if(0){ ?>
                        <a class="gd" target="_blank"
                            href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=37"
                            rel="external nofollow">
                            <img src="<?php bloginfo('template_directory'); ?>/img/akuaclara_akb20181129_125.jpg"
                                alt="">
                        </a>
                        <?php } ?>
                        <?php } ?>
                        <?php if($post->ID == 496){ ?>
                        <style>
                        .sign {
                            text-align: center;
                            width: 80px;
                        }
                        </style>
                        <p class="sign">※</p>

                        <?php } ?>
                    </div>
                    <?php endif ?>
                    <div class="rankright"><strong>
                            <?php if($post->ID == 496){ ?>

                            <div class="spimbox w100">
                                <?php } else if($post->ID == 59) { ?>

                                <div class="spimbox w100">
                                    <?php } else if($post->ID == 60) { ?>
                                    <style>
                                    .w100 {
                                        position: relative;
                                        left: -7px;
                                    }
                                    </style>
                                    <div class="spimbox w100">
                                        <?php } else { ?>
                                        <div class="spimbox">
                                            <?php } ?>
                                            <?php if($post->ID == 57){ ?>
                                            <img class="no1 sp"
                                                src="<?php bloginfo('template_directory'); ?>/img/no1.png" alt="">
                                            <?php } ?>
                                            <?php if($post->ID == 496){ ?>
                                            <style>

                                            </style>
                                            <a target="_blank"
                                                href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                                                rel="external nofollow" class="prrrr">
                                                <img class="no1 sp no1_2 po-top8"
                                                    src="<?php bloginfo('template_directory'); ?>/img/bn_02_125×125.jpg"
                                                    alt=""></a>
                                            <img class="no1 sp no1_2 po-top8"
                                                src="<?php bloginfo('template_directory'); ?>/img/customerno1.png"
                                                alt="" style="margin-left: 10px; width: 65px!important;">
                                            <img class="no1 sp no1_2 po-top8"
                                                src="<?php bloginfo('template_directory'); ?>/img/g_type2018_c.jpg"
                                                alt="" style="margin-left: 10px; width: 60px!important;">
                                            <?php } ?>
                                            <?php if($post->ID == 59){ ?>
                                            <style>
                                            a {
                                                text-decoration: none;
                                            }
                                            .frebox {
                                                display: flex;
                                                margin-left: 18px;
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
                                            <?php } ?>
                                            <?php if($post->ID == 60){ ?>

                                            <a target="_blank"
                                                href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                                                rel="external nofollow" class="prrrr">
                                                <img class="no1 sp no1_2"
                                                    src="<?php bloginfo('template_directory'); ?>/img/aqua_250_250.jpg"
                                                    alt=""></a>
                                            <a href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/new.php?id=31"
                                                target="_blank" class="prrrr">
                                                <img class="no1 sp no1_2"
                                                    src="<?php bloginfo('template_directory'); ?>/img/kosodate_150-150.gif"
                                                    alt="" style="margin-left: 5px;"></a>
                                            <a target="_blank"
                                                href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                                                rel="external nofollow" class="prrrr">
                                                <img class="no1 sp no1_2"
                                                    src="<?php bloginfo('template_directory'); ?>/img/with.gif" alt=""
                                                    style="margin-left: 5px;">
                                            </a>
                                            <?php } ?>
                                            <?php if($post->ID == 334){ ?>
                                            <a target="_blank"
                                                href="https://xn--q9js5mma4dzcyg1obbb2842gb1zd.com/link?link_id=334"
                                                rel="external nofollow" class="prrrr deco-none">
                                                <img class="no1 width125 m20"
                                                    src="<?php bloginfo('template_directory'); ?>/img/creclafit2_300.png"
                                                    alt="">
                                            </a>
                                            <img class="no1 sp"
                                                src="<?php bloginfo('template_directory'); ?>/img/no1_small.jpg" alt="">

                                            <img class="no1 sp"
                                                src="<?php bloginfo('template_directory'); ?>/img/2020_small.jpg"
                                                alt="">
                                            <!--<img class="no1 sp" src="<?php bloginfo('template_directory'); ?>/img/tama0.jpg" alt="">
						-->
                                            <?php } ?>
                                        </div>
                                        <?php echo $catch; ?>
                        </strong></div>
                </div>

                <div class="s_items_table quad">
                    <table>
                        <tr>
                            <th>配送料</th>
                            <td><?php echo get_post_meta($post->ID,"shipping_cost", true);?></td>
                            <th>お水の種類</th>
                            <td><?php echo $water_type; ?></td>
                        </tr>
                        <tr>
                            <th class="vl">サーバー代/月</th>
                            <td><?php echo get_post_meta($post->ID,"server_cost", true);?></td>
                            <th>ボトルの種類</th>
                            <td><?php echo $bottles[get_field("bottle",$post->ID)];?>タイプ</td>
                        </tr>
                    </table>
                </div>
                <div class="s_items_table">
                    <table>
                        <tr>
                            <th>お水の価格</th>
                            <td><?php echo get_post_meta($post->ID,"water_cost", true);?></td>
                        </tr>
                        <tr>
                            <th>電気代/月</th>
                            <td><?php echo get_post_meta($post->ID,"electricity_cost", true);?></td>
                        </tr>
                        <tr class="last_tr">
                            <th>配送地域</th>
                            <td colspan="3"><?php echo $shipping_areas[get_field("shipping_area",$post->ID)];?></td>
                        </tr>
                    </table>
                </div>
                
                <p><?php echo $description; ?></p>
                <?php if($post->ID == 496) : ?>
                    <p style="font-size:10px;line-height: 1.4; margin: 10px 0;background: #5b9bd5;color: white;border-radius: 10px;padding:10px">
                        ※たまひよ赤ちゃんグッズ大賞とは、たまごクラブ・ひよこクラブ2021年3月号に掲載のランキング結果です。【調査方法】web調査【対象者】全国の生後０カ月～１才6カ月のお子さまを持つ、たまひよ読者2,000人</p>
                <?php endif; ?>
                        
                <?if ($campaignTitle || $campaigndesRed|| $campaigndes) : ?>
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

                <?php if(!is_mobile()){ ?>

                <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                    class="official_site prrrr"><img
                        src="<?php bloginfo('template_directory'); ?>/img/common/btn-official-site_off.jpg" alt="公式サイトへ"
                        width="310" height="60" /></a>
                <?php }else{ ?>

                <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                    class="official_site prrrr">
                    <span>公式サイトはこちら</span>
                </a>
                <?php } ?>
            </div><!-- / ranking result [ranking no1] -->
            <?php
	endwhile;
?>

    </dd>
</dl>
<?php if($is_top){ ?>
<a href="/ranking/" class="moreranklink">ランキング6位以下はこちら</a>
<?php } ?>