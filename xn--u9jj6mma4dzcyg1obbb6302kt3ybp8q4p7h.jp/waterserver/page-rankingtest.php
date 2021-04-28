<?php

/* Template Name: ランキング-renewal用 */

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
        
    <h1>
        <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_directory'); ?>/img/water__fv--pc.webp" width="100%">
            
            <img src="<?php bloginfo('template_directory'); ?>/img/water__fv--pc.jpg" alt="2021年版本気でオススメできる優良ウォーターサーバー人気ランキング" width="100%" />
        </picture>
        
    </h1>

    <!-- <div id="footmark"><a href="<?php bloginfo('url'); ?>/">トップページ</a><span>&nbsp;&gt;&nbsp;人気ランキング</span></div> -->

    <dl class="ranking">
        <div class="rank__title__descript">
            <p>
            このページでは<span class="aka">月額費用、デザイン、機能性、口コミ</span>などを基準に選ばれた<span class="ylw aka">人気のウォーターサーバーをランキングでご紹介</span>しています。
            どのサーバーもおすすめですが、<span class="bold">それぞれに特徴があります</span>ので、あなたにぴったりの1台を見つけてくださいね！
            </p>
        </div>

        <div class="rank__sub__descript">
            <small>※月額費用は、配送スキップ機能を使った場合の最低月額費用（水代+レンタル料+サポート料+配送料）です。</small>
        </div>

        <div class="title__wrap">

            <div class="rank__title">
                <h2>最新ランキングBEST10！</h2>
            </div>
            <p><i class="fas fa-caret-right"></i><?php echo date('Y'); ?>年<?php echo date('n'); ?>月</p>
        </div>

        <dd>
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
                    // $max_rank = 10;

                $pst = "publish";
                if($_GET["private"] == "on"){
                    $pst = "private";
                }
                $args =  array( 'post_type' => 'waterserver','post_status' => $pst,'orderby' => 'meta_value_num', 'meta_key' => 'recommend_order_new', 'order' => 'ASC', 'posts_per_page' => 10, 'meta_compare' => '!=');


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


                    $description = get_post_meta($post->ID, "ranking_description", true);
                    $campaignTitle = get_post_meta($post->ID, "campaign_title", true);
                    $campaigndesRed = get_post_meta($post->ID, "campaign_description_red", true);
                    $campaigndes = get_post_meta($post->ID, "campaign_description", true);
                    $osu_point1 = get_post_meta($post->ID, "osu_point1", true);
                    $osu_point2 = get_post_meta($post->ID, "osu_point2", true);
                    $osu_point3 = get_post_meta($post->ID, "osu_point3", true);
                    $osu_point4 = get_post_meta($post->ID, "osu_point4", true);
                    $osu_point5 = get_post_meta($post->ID, "osu_point5", true);
                    $osu_point6 = get_post_meta($post->ID, "osu_point6", true);
        
                    $main_thum = get_field('main_thum', $post->ID);
                    $star_rank = get_field('star_rank', $post->ID);
                    $score_rank = get_field('score_rank', $post->ID);

                    // 追加

                    $rStar = get_field('ranking_star', $post->ID);
                    $rCatch = get_field('ranking_catchcopy', $post->ID);
                    $rTags = get_field('ranking_tags', $post->ID);
                    $camK = get_field('campaign_kinds', $post->ID);
                    $camD = get_field('campaign_date', $post->ID);

                    $rPrice = get_field('ranking_t1_price', $post->ID);
                    $rRent = get_field('ranking_t1_rent', $post->ID);
                    $rRentTxt = get_field('ranking_t1_rent-txt', $post->ID);
                    $rWater = get_field('ranking_t1_water', $post->ID);
                    $rType = get_field('ranking_t1_type', $post->ID);

                    $rDesign = get_field('ranking_t2_design', $post->ID);
                    $rFunc = get_field('ranking_t2_func', $post->ID);
                    $rSupport = get_field('ranking_t2_support', $post->ID);
                    $rReview = get_field('ranking_t2_review', $post->ID);

                    $count++;
            ?>

            <?php if ($max_rank == $count) : ?>
            <div class="ranking_result" id="ranking_last">
                <?php else: ?>
                <div class="ranking_result" id="ranking_no<?php echo $count;?>">
                    <?php endif; ?>
                    <h2 class="rank_item_title">
                        <img src="<?php bloginfo('template_directory'); ?>/spimg/icons/badge_<?php echo $count; ?>.svg"
                            alt="第<?php echo $count; ?>位" width="116" height="80" />

                        <?php if($post->ID == 57) : ?>
                            <a href="<?php bloginfo('url'); ?>/linktest?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                            class="prrrr"><?php echo get_post_meta($post->ID, "product_name", true); ?></a>
                            <?php else : ?>
                        <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                            class="prrrr"><?php echo get_post_meta($post->ID, "product_name", true); ?></a>
                            <?php endif; ?>
                    </h2>

                    <div class="star_box">
                        <img src="<?php echo $rStar; ?>" alt="">
                        <div class="score">
                        <span class="sougo">総合評価</span><span class="tensu"><?php echo $score_rank; ?></span><span class="manten">点/5.0点</span>
                    </div>
                </div>

                <div class="rank_caption">

                <div class="rank_contents">
                   
                   <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                       rel="external nofollow" class="prrrr first_img">
                       <img src="<?php echo $main_thum; ?>" alt="<?php echo get_post_meta($post->ID, "product_name", true); ?>" />
                   </a>

                   <div class="n_table_wrap table01">
                       <table>
                           <tr>
                               <th>月額費用※</th>
                               <td>
                               <?php if(!empty($rPrice)) : ?>
                               <?php echo number_format($rPrice); ?>円
                               <?php endif; ?>
                               <span>（税込）</span></td>
                           </tr>
                           <tr>
                               <th>レンタル料</th>
                               <td>
                               <?php if($rRent > 999 ) {
                                   echo number_format($rRent).'円';
                               } else {
                               echo $rRent.'円';
                               }
                               ?>
                               <?php if(!empty($rRentTxt)) : ?>
                               <?php echo $rTentTxt; ?> 
                               <?php endif; ?>
                               </td>
                           </tr>
                           <tr>
                               <th>お水の種類</th>
                               <td><?php echo $rWater; ?></td>
                           </tr>
                           <tr>
                               <th>サーバータイプ</th>
                               <td><?php echo $rType; ?></td>
                           </tr>
                       </table>
                   </div>  
                   
                   <?php if ($post->ID == 496) { ?>
                    <style>
                    .sign {
                        text-align: center;
                        width: 80px;
                    }
                    </style>

                    <?php } ?>
                </div>

                </div>

                    

                   






                </div><!-- / ranking result [ranking no1] -->
                <?php
	endwhile; wp_reset_postdata();
?>

        </dd>
    </dl>
    <p id="ranking_notice">※ランキングは<a href="<?php bloginfo('url'); ?>/investigation
">調査概要</a>に基づき決定させていただいております。</p>

    <?php include(TEMPLATEPATH .'/inc/searchform.php'); ?>

    <?php }else{?>
       
    <h1>
        <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_directory'); ?>/spimg/water__fv--sp.webp" width="100%">
            
            <img src="<?php bloginfo('template_directory'); ?>/spimg/water__fv--sp.jpg" alt="2021年版本気でオススメできる優良ウォーターサーバー人気ランキング" class="sprankbanner" />
        </picture>
    </h1>

    <!-- <div id="footmark"><a href="<?php bloginfo('url'); ?>/">トップページ</a><span>&nbsp;&gt;&nbsp;人気ランキング</span></div> -->

    <?php
    include(TEMPLATEPATH .'/inc/rank-test.php');
    include(TEMPLATEPATH .'/inc/searchform.php');
    } ?>
</div><!-- / main contents box -->

<?php if(is_mobile()){
	get_sidebar();
} ?>
</div><!-- / contents box -->

<?php get_footer(); ?>