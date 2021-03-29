<dl id="rank" class="ranking box">
    <p class="rank__title__descript">ウォーターサーバー利用者の評価が高い優良ウォーターサーバー10社をご紹介します！</p>

    <dd>
        

        <?php
        global $is_top;
        if (!isset($is_top)) {
            $is_top = false;
        }
        $copy_array = array(
            array(
                "catch" => "美味しい４種類の天然水から選べる!<br />赤ちゃんや小さなお子さんがいても安心して使えるサーバー<br />エコモデルは消費電力最大６０％OFF",
                "description" => "<em>今年No1</em>に選ばれたのはコスモウォーター！ミネラル豊富な４種類の天然水からお選びいただけます。新登場の<em>らく楽スタイル ウォーターサーバー</em>はボトルを下部にセットできるから持ち上げ不要でお子さんや女性でも楽に使えて大好評です。"
            ),
            array(
                "catch" => "４種類の天然水から目的別にチョイス出来る！<br />初回ボトル２本プレゼント中で初期費用０円！<br/>新サーバー導入で人気急上昇中！",
                "description" => "目的別に４種類の天然水からお選びいただけます。<em>サーバー代、配送料、メンテナンス代すべて０円</em>で今なら<span style='color:red;font-weight:bold;'>無料</span>でスタート出来ます。節電機能付き＆衛生面◎、ボトル交換らくらくのサーバーを導入し、非常におすすめです。"
            ),
            array(
                "catch" => "まろやかな味わいの富士山のバナジウム天然水！<br/>いまなら２パック無料＆サーバー代初月無料！",
                "description" => "天然水としては<span style='color:red;font-weight:bold;'>当サイト最安</span>で<em>天然水をたくさん飲みたいけど家計にも優しいサーバーを選びたい</em>という方におすすめ。節電機能や温度２段階調節機能、高温循環モードなどが付いた高機能サーバーです。"
            ),

            array(
                "catch" => "３年連続モンドセレクション金賞受賞<br />おしゃれさが売りのウォーターサーバー",
                "description" => "富士山のバナジウム天然水の中では唯一モンドセレクション金賞を受賞している天然水です。おしゃれなサーバーはインテリアとしてもGOODで、購入orレンタル（無料）どちらかを選べます。"
            ),
            array("catch" => "富士山の標高1000mから採水したバナジウム天然水！<br />自動クリーンシステムや省エネ設計の高機能サーバー
", "description" => "富士山の地下より採水したお水を山道の湧き水のような美味しさを保つために希少な非加熱処理。ほのかに甘い後味が人気です。１パックが軽量なため、女性やお子さんでも楽に取り付け可能。"),
            array("catch" => "モンドセレクション最高金賞２年連続受賞の美味しいお水！<br />節電サーバーやキャラクターサーバーなど選べる種類が豊富", "description" => "ROろ過したきれいなお水に独自の比率でミネラルを添加して生まれた美味しいお水です。サーバー代は有料ですがしっかりとした定期メンテナンスが有り、お水の値段も天然水より安く経済的です。"),
        );

        function callback($val)
        {
            global $water_types;
            return $water_types[$val];
        }

        // $max_rank = 5;
        // if(!$is_top){
        $max_rank = 10;
        // }

        $pst = "publish";
        if ($_GET["private"] == "on") {
            $pst = "private";
        }
        $args =  array('post_type' => 'waterserver', 'post_status' => $pst, 'orderby' => 'meta_value', 'meta_key' => 'recommend_order', 'order' => 'ASC', 'posts_per_page' => $max_rank);

        
        $count = 0;
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $fields = get_field_object("bottle");
            $bottles = $fields['choices'];
            $fields = get_field_object("water_type");
            $water_types = $fields['choices'];
            $fields = get_field_object("shipping_area");
            $shipping_areas = $fields['choices'];
        endwhile;

        while ($loop->have_posts()) : $loop->the_post();

            $attachment_obj = get_field('banner', $post->ID);
            $water_type_array = get_post_meta($post->ID, "water_type", true);
            $water_type_array = array_map('callback', $water_type_array);
            if (count($water_type_array) == 2) {

                $water_type = $water_type_array[0] . '(' . $water_type_array[1] . 'も有り)';
            } else {
                $water_type = implode('、', $water_type_array);
            }

            $catch = get_post_meta($post->ID, "ranking_catch", true);
            $description = get_post_meta($post->ID, "ranking_description", true);
            $campaignTitle = get_post_meta($post->ID, "campaign_title", true);
            $campaigndesRed = get_post_meta($post->ID, "campaign_description_red", true);
            $campaigndes = get_post_meta($post->ID, "campaign_description", true);
            $osu_point1 = get_post_meta($post->ID, "osu_point1", true);
            $osu_point2 = get_post_meta($post->ID, "osu_point2", true);
            $osu_point3 = get_post_meta($post->ID, "osu_point3", true);
            $osu_point4 = get_post_meta($post->ID, "osu_point4", true);
            $osu_point5 = get_post_meta($post->ID, "osu_point5", true);
            $main_thum = get_field('main_thum', $post->ID);
            $star_rank = get_field('star_rank', $post->ID);
            $score_rank = get_field('score_rank', $post->ID);

            $count++;
        ?>

        <?php if ($max_rank == $count) : ?>
            <div class="ranking_resultsp" id="ranking_last">
        <?php else : ?>
            <div class="ranking_resultsp" id="ranking_no<?php echo $count; ?>">
        <?php endif; ?>

            <h2 class="rank_item_title">
                <img src="<?php bloginfo('template_directory'); ?>/spimg/n_badge_<?php echo $count; ?>.png"
                    alt="第<?php echo $count; ?>位" width="86" height="60" />

                <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                    class="prrrr"><?php echo get_post_meta($post->ID, "product_name", true); ?></a>
            </h2>

            <?php if ($score_rank != "") : ?>
            <div class="star_box">
                <img src="<?php echo $star_rank; ?>" alt="">
                <div class="score">
                総合評価：<span class="tensu"><?php echo $score_rank; ?></span><span class="manten">点/5.0点</span>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="rank_caption">

            <!-- 追加で入る場合？ -->
            <?php if ($post->ID == 57) : ?>
                <!-- <div class="plus_banner">
                    <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                                    rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/spimg/cosmo_t_bn.jpg" />
                    </a>
                </div> -->
            <?php endif ; ?>
                
            <?php if ($main_thum != "") : ?>


                <div class="rank_left_img">
                   
                        <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr first_img">
                            <img src="<?php echo $main_thum; ?>" alt="<?php echo get_post_meta($post->ID, "product_name", true); ?>" />
                        </a>
                
                        
                       

            <!-- コスモウォーター -->        
            <?php if ($post->ID == 57) { ?>

                    <!-- <a class="" target="_blank"
                        href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                        rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/gd.png" alt="">
                        
                    </a>
                    <a class="" target="_blank"
                        href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                        rel="external nofollow" class="prrrr">
                    <img class="" src="<?php bloginfo('template_directory'); ?>/img/no1.png" alt="">
                    </a> -->

            <!-- プレミアムウォーター -->        
            <?php } else if ($post->ID == 496) { ?>
               
                    <!-- <a target="_blank"
                        href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                        rel="external nofollow" class="prrrr">
                        
                        <img src="<?php bloginfo('template_directory'); ?>/img/pre-summer-120120.png"
                            alt="">
                    </a>
                    <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow" class="prrrr" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/img/bn_02_125×125.jpg" alt="">
                    </a>
                    <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                        rel="external nofollow" class="prrrr" target="_blank" class="jyusyou">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tamahiyo-2020new.jpg" alt="">
                    </a>
                   
                    <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow" class="prrrr" class="jyusyou">
                        <img src="<?php bloginfo('template_directory'); ?>/img/customerno1.png" alt="">
                    </a>
                    <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow" class="prrrr" class="jyusyou">
                        <img src="<?php bloginfo('template_directory'); ?>/img/g_type2018_c.jpg">
                    </a> -->
                    

            <!-- フレシャス -->
            <?php } else if ($post->ID == 59) { ?>
                    
                    <!-- <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=39" target="_blank" class="prrrr" >
                        <img src="<?php bloginfo('template_directory'); ?>/img/frecious_starcraft_0626_400_400_ranking.jpg" alt="">
                    </a>

                    <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>&type=mama" rel="external nofollow" class="prrrr">
                        <img src="<?php the_field('banner2'); ?>" alt="">
                    </a>

                    <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>&type=free" target="_blank" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/frecious_norikae.png" alt="">
                    </a>

                    <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>&type=mama" rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt="" width="70">
                    </a> -->
                   
            <?php } else if ($post->ID == 334) { ?>
                
                    <!-- <img class="no1 sp" src="<?php bloginfo('template_directory'); ?>/img/cokyaku_s.jpg" alt="">
                    <a target="_blank" href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/link?link_id=334" rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/creclafit2_300.png" alt="">
                    </a>
                    
                    <a target="_blank" href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/link?link_id=334" rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/no1_small.jpg" alt="">
                    </a>

                    <a target="_blank" href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/link?link_id=334" rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/2020_small.jpg" alt="">
                    </a> -->

            <?php } else if ($post->ID == 60) { ?>

                    <!-- <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                        rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/fab.gif" alt="" >
                    </a>
                    
                    <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/aqua125_202005.gif" alt="">
                    </a>

                    <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=31" target="_blank" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/kosodate.gif" alt="">
                    </a>

                    <a target="_blank" href="<?php bloginfo('url'); ?>/linkaqua?link_id=<?php echo $post->ID; ?>" rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/with.gif" alt="">
                    </a>

                    <a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                        rel="external nofollow" class="prrrr">
                        <img src="<?php bloginfo('template_directory'); ?>/img/g_type2018_b.jpg" alt="">
                    </a> -->
                    
            
            

            <?php if (0) { ?>

                    <!-- <a class="gd" target="_blank" href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=37" rel="external nofollow">
                        <img src="<?php bloginfo('template_directory'); ?>/img/akuaclara_akb20181129_125.jpg" alt=""> -->

            <?php } ?>
                    </a>
        <?php } ?>
        
        <?php if ($post->ID == 496) { ?>
            <style>
            .sign {
                text-align: center;
                width: 80px;
            }
            </style>
            <!-- <p class="sign">※</p> -->

        <?php } ?>
        </div>
    <?php endif ?>

    <!-- <div class="rankright">
        <?php //echo $catch; ?>
        
    </div> -->

    <?php $points = array($osu_point1, $osu_point2, $osu_point3, $osu_point4, $osu_point5); ?>
    <?php if(empty($osu_point1)) : ?>

    <?php else: ?>
    <ul class="rank_point">
    <h3 class="point_title"></h3>
    <?php
        
        foreach ($points as $value) {
            if($value == true) {
            echo "<li>".$value."</li>";
            }
        }
    ?>
    </ul>
    
    <?php endif; ?>
        </div>

        <div class="s_items_table">

            <table>
                <tr>
                    <th>配送料</th>
                    <td><?php echo get_post_meta($post->ID, "shipping_cost", true); ?></td>
                </tr>
                <tr>
                    <th>お水の種類</th>
                    <td><?php echo $water_type; ?></td>
                </tr>
                <tr>
                    <th>サーバー代/月</th>
                    <td><?php echo get_post_meta($post->ID, "server_cost", true); ?></td>
                </tr>
                <tr>
                    <th>ボトルの種類</th>
                    <td><?php echo $bottles[get_field("bottle", $post->ID)]; ?>タイプ</td>
                </tr>
                <tr>
                    <th>お水の価格</th>
                    <td><?php echo get_post_meta($post->ID, "water_cost", true); ?></td>
                </tr>
                <tr>
                    <th>電気代/月</th>
                    <td><?php echo get_post_meta($post->ID, "electricity_cost", true); ?></td>
                </tr>
                <tr class="last_tr">
                    <th>配送地域</th>
                    <td colspan="3"><?php echo $shipping_areas[get_field("shipping_area", $post->ID)]; ?></td>
                </tr>
            </table>

        </div>

        <!-- <div class="s_items_table quad">
            <table>
                <tr>
                    <th>配送料</th>
                    <td><?php echo get_post_meta($post->ID, "shipping_cost", true); ?></td>
                    <th>お水の種類</th>
                    <td><?php echo $water_type; ?></td>
                </tr>
                <tr>
                    <th class="vl">サーバー代/月</th>
                    <td><?php echo get_post_meta($post->ID, "server_cost", true); ?></td>
                    <th>ボトルの種類</th>
                    <td><?php echo $bottles[get_field("bottle", $post->ID)]; ?>タイプ</td>
                </tr>
            </table>
        </div>
        <div class="s_items_table">
            <table>
                <tr>
                    <th>お水の価格</th>
                    <td><?php echo get_post_meta($post->ID, "water_cost", true); ?></td>
                </tr>
                <tr>
                    <th>電気代/月</th>
                    <td><?php echo get_post_meta($post->ID, "electricity_cost", true); ?></td>
                </tr>
                <tr class="last_tr">
                    <th>配送地域</th>
                    <td colspan="3"><?php echo $shipping_areas[get_field("shipping_area", $post->ID)]; ?></td>
                </tr>
            </table>

        </div> -->
        <?php //if($post->ID == 496){ 
            ?>
        <p class="rank_descript"><?php echo $description; ?></p>
        <!-- <p style="font-size:10px; line-height: 1.2; margin: 10px 0;">
            ※たまひよ赤ちゃんグッズ大賞とは、たまごクラブ・ひよこクラブ2020年3月号に掲載のランキング結果です。
            調査方法】web調査 【対象者】全国の生後０カ月～１才6カ月のお子さまを持つ、たまひよ読者2,000人</p> -->

        <?if ( $campaigndesRed == true || $campaigndes == true) : ?>
        <div class="cam-box">
            <div class="left-con">
                <h4 style="text-align:center"><?php echo $campaignTitle; ?>キャンペーン</h4>
                <img src="<?php bloginfo('template_directory'); ?>/img/present.png" alt="">
            </div>
            <div class="right-con">
                <p class="cam-descript">
                    <span class="red"><?php echo $campaigndesRed; ?></span><?php echo $campaigndes; ?>
                </p>
            </div>
        </div>
        <? else :?>
        <? endif; ?>


        <?php if (!is_mobile()) { ?>

        <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
            class="official_site prrrr">
            <img src="<?php bloginfo('template_directory'); ?>/img/common/btn-official-site_off.jpg"
                alt="公式サイトへ" width="310" height="60" />
        </a>

        <?php } else { ?>

        <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
            class="official_site prrrr">
            <span>公式サイトはこちら</span>
            <ion-icon name="arrow-forward-circle"></ion-icon>
        </a>

        <?php } ?>
    </div><!-- / ranking result [ranking no1] -->
    <?php
    endwhile;
        ?>

    </dd>
</dl>

<script>

// $('#ranking_no5 .rank_left_img a').css({
//     width:'24%'
// });
// $('#ranking_no6 .rank_left_img a').addClass('active');
// $('#ranking_no7 .rank_left_img a').addClass('active');
// $('#ranking_no8 .rank_left_img a').addClass('active');
// $('#ranking_no9 .rank_left_img a').addClass('active');
// $('#ranking_last .rank_left_img a').addClass('active');

</script>
