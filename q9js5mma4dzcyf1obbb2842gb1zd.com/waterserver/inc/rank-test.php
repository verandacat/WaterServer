<dl id="rank" class="ranking box">

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

         $max_rank = 5;
         if(!$is_top){
         $max_rank = 10;
        }

        $pst = "publish";
        if ($_GET["private"] == "on") {
            $pst = "private";
        }
        $args =  array('post_type' => 'waterserver', 'post_status' => $pst, 'orderby' => 'meta_value_num', 'meta_key' => 'recommend_order_new', 'order' => 'ASC', 'posts_per_page' => $max_rank);

        
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
            <div class="ranking_resultsp" id="ranking_last">
        <?php else : ?>
            <div class="ranking_resultsp" id="ranking_no<?php echo $count; ?>">
        <?php endif; ?>

            <h2 class="rank_item_title">
                <img src="<?php bloginfo('template_directory'); ?>/spimg/icons/badge_<?php echo $count; ?>.svg"
                    alt="第<?php echo $count; ?>位" width="86" height="60" />

                <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                    class="prrrr"><?php echo get_post_meta($post->ID, "product_name", true); ?></a>
            </h2>

            <?php if ($score_rank != "") : ?>
            <div class="star_box">
                <img src="<?php echo $rStar; ?>" alt="">
                <div class="score">
                <span class="sougo">総合評価</span><span class="tensu"><?php echo $score_rank; ?></span><span class="manten">点/5.0点</span>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="rank_caption">

            <?php if(!empty($rCatch)) : ?>
            <div class="rank_catch">
                <p><?php echo $rCatch; ?></p>
            </div>
            <?php endif; ?>
                
            <?php if ($main_thum != "") : ?>


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
    <?php endif ?>

    

    <div class="newBtn">
        <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" class="prrrr" target="_blank">
            <p>申し込みはこちら</p>
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

    <?php $points = array($osu_point1, $osu_point2, $osu_point3, $osu_point4, $osu_point5, $osu_point6); ?>
    <?php if(!empty($osu_point1)) : ?>
    <ul class="rank_point">
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

        
        <?php if($post->ID == 496) : ?>
        <p style="font-size:10px!important;line-height: 1.4; ;margin: 0 10px 10px;background: #5b9bd5;color: white;border-radius: 10px;padding:10px">
                        ※たまひよ赤ちゃんグッズ大賞とは、たまごクラブ・ひよこクラブ2021年3月号に掲載のランキング結果です。【調査方法】web調査【対象者】全国の生後０カ月～１才6カ月のお子さまを持つ、たまひよ読者2,000人</p>
        <?php endif; ?>


        <div class="n_table_wrap table02">
            <table>
                <tr>
                    <th>デザイン</th>
                    <th>機能性</th>
                    <th>サポート体制</th>
                    <th>口コミ評価</th>
                </tr>
                <tr>
                    
                    <td>
                        <?php if($rDesign == 1)  {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_01.svg'>";
                        } elseif($rDesign == 2) {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_02.svg'>";
                        } elseif($rDesign == 3)  {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_03.svg'>";
                        }
                        ?>
                    </td>
                    <td>
                        <?php if($rFunc == 1)  {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_01.svg'>";
                        } elseif($rFunc == 2) {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_02.svg'>";
                        } elseif($rFunc == 3) {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_03.svg'>";
                        }
                        ?>
                    </td>
                    <td>
                    <?php if($rSupport == 1)  {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_01.svg'>";
                        } elseif($rSupport == 2) {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_02.svg'>";
                        } elseif($rSupport == 3) {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_03.svg'>";
                        }
                        ?>
                    </td>
                    <td>
                    <?php if($rReview == 1)  {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_01.svg'>";
                        } elseif($rReview == 2) {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_02.svg'>";
                        } elseif($rReview == 3) {
                            echo "<img src='https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/wp-content/themes/waterserver/img/icons/maru_03.svg'>";
                        } 
                        ?>
                    </td>
                </tr>
            </table>
        </div>


        <div class="keyword_box">
            <ul class="keyword">
                    <?php 
                            $rTagsList = array("一人暮らし向き", "子育て向き", "省エネ設計");
                            
                            if(!empty($rTags)) {
                                $rTagInter = array_intersect($rTagsList, $rTags);
                                $rTagDiff = array_diff($rTagsList, $rTags);
                                foreach ($rTagInter as $val) {
                                    echo '<li>'.$val.'</li>';
                                }
                                foreach ($rTagDiff as $val) {
                                    echo '<li class="grey">'.$val.'</li>';
                                }
                                
                            } else {
                                foreach ($rTagsList as $val) {
                                    echo '<li class="grey">'.$val.'</li>';
                                }
                            }
                            
                        ?>
            </ul>
        </div>

        <?if (!empty($campaigndesRed)) : ?>
        <div class="cam-box">
            <div class="left-con">
                <img src="<?php bloginfo('template_directory'); ?>/spimg/icons/icon-camp.svg" alt="">
                <h4>
                    <?php if(!empty($camD)) : ?>
                    <?php echo date('Y')."年"; ?><span><?php echo $camD; ?></span>まで
                    <?php endif; ?>
                    <?php echo $campaignTitle; ?>キャンペーン</h4>
                
            </div>
            <div class="right-con">
                <p class="cam-descript">
                    <span class="red"><?php echo $campaigndesRed; ?></span>
                </p>
            </div>
        </div>
        <? endif; ?>


        <div class="newBtn">
            <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" class="prrrr" target="_blank">
                <p>公式サイトで<br>お得に申し込む</p>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

       
    </div><!-- / ranking result [ranking no1] -->



    <?php endwhile; ?>



<?php if($is_top){ ?>
<button class="morerank">ランキング6位以下はこちら</button>
<?php } ?>

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

        $pst = "publish";
        if ($_GET["private"] == "on") {
            $pst = "private";
        }
        $args =  array('post_type' => 'waterserver', 'post_status' => $pst,'orderby' => 'meta_value_num', 'meta_key' => 'recommend_order_new', 'order' => 'ASC', 'posts_per_page' => 5, 'offset' => 5);

        
        $count = 5;
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
            $osu_point6 = get_post_meta($post->ID, "osu_point6", true);

            $main_thum = get_field('main_thum', $post->ID);
            $star_rank = get_field('star_rank', $post->ID);
            $score_rank = get_field('score_rank', $post->ID);

            $count++;
        ?>
        <?php if ($max_rank == $count) : ?>
            <div class="ranking_resultsp ranking_second_wrap" id="ranking_last">
        <?php else : ?>
            <div class="ranking_resultsp ranking_second_wrap" id="ranking_no<?php echo $count; ?>">
        <?php endif; ?>

            <h2 class="rank_item_title">
                <img src="<?php bloginfo('template_directory'); ?>/spimg/n_badge_<?php echo $count; ?>.png"
                    alt="第<?php echo $count; ?>位" width="86" height="60" />

                <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
                    class="prrrr"><?php echo get_post_meta($post->ID, "product_name", true); ?></a>
            </h2>

            <?php if ($score_rank != "") : ?>
            <div class="star_box">
                <!--  -->
                <img src="<?php echo $star_rank2; ?>" alt="">
                <div class="score">
                総合評価：<span class="tensu"><?php echo $score_rank; ?></span><span class="manten">点/5.0点</span>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="rank_caption">

           
                
            <?php if ($main_thum != "") : ?>


                <div class="rank_contents">
                   
                        <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>"
                            rel="external nofollow" class="prrrr first_img">
                            <img src="<?php echo $main_thum; ?>" alt="<?php echo get_post_meta($post->ID, "product_name", true); ?>" />
                        </a>
                
           
        
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

    <?php $points = array($osu_point1, $osu_point2, $osu_point3, $osu_point4, $osu_point5, $osu_point6); ?>
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
                    <td>
                    <?php if(!preg_match("/[0-9]{4}/",get_post_meta($post->ID, "server_cost", true))) : ?>
					<?php echo get_post_meta($post->ID, "server_cost", true); ?>
					<?php echo get_post_meta($post->ID, "server_cost2", true); ?>
					<?php else : ?>
					<?php echo number_format(get_post_meta($post->ID, "server_cost", true)); ?>円
					<?php echo get_post_meta($post->ID, "server_cost2", true); ?>
					<?php endif; ?>
                    
                    </td>
                </tr>
                <tr>
                    <th>ボトルの種類</th>
                    <td><?php echo $bottles[get_field("bottle", $post->ID)]; ?>タイプ</td>
                </tr>
                <tr>
                    <th>お水の価格</th>
                    <td><?php echo number_format(get_post_meta($post->ID, "water_cost", true)); ?><?php echo get_post_meta($post->ID, "water_cost2", true); ?>
                    </td>
                </tr>
                <tr>
                    <th>電気代/月</th>
                    <td>
                    <?php if(!preg_match("/[0-9]{4}/",get_post_meta($post->ID, "electricity_cost", true))) : ?>
                    <?php echo get_post_meta($post->ID, "electricity_cost", true); ?>
                    <?php echo get_post_meta($post->ID, "electricity_cost2", true); ?>
                    <?php else : ?>
                    <?php echo number_format(get_post_meta($post->ID, "electricity_cost", true)); ?>円
                    <?php echo get_post_meta($post->ID, "electricity_cost2", true); ?>
                    <?php endif; ?>
                    </td>
                </tr>
                <tr class="last_tr">
                    <th>配送地域</th>
                    <td colspan="3"><?php echo $shipping_areas[get_field("shipping_area", $post->ID)]; ?></td>
                </tr>
            </table>

        </div>

        <a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post->ID; ?>" rel="external nofollow"
            class="official_site prrrr">
            <span>公式サイトはこちら</span>
            <ion-icon name="arrow-forward-circle"></ion-icon>
        </a>

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
        
        <p class="rank_descript"><?php echo $description; ?></p>
        <?php if($post->ID == 496) : ?>
            <p style="font-size:11px;line-height: 1.4; margin: 10px 0;margin: 10px 0;background: #5b9bd5;color: white;border-radius: 10px;padding:10px">
                        ※たまひよ赤ちゃんグッズ大賞とは、たまごクラブ・ひよこクラブ2021年3月号に掲載のランキング結果です。【調査方法】web調査【対象者】全国の生後０カ月～１才6カ月のお子さまを持つ、たまひよ読者2,000人</p>
        <?php endif; ?>
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

    
    <?php endwhile; ?>

    </dd>
</dl>

<script>
function openRank() {
            let ViewBtn = $('.morerank');
            let ViewBtnArrow = $('.morerank span')
            let BottomRank = $('.ranking_second_wrap');
            ViewBtn.on('click', function() {
                BottomRank.toggleClass('open');
                ViewBtn.text('ランキング6位以下はこちら');
                if(BottomRank.hasClass('open')) {
                    ViewBtn.text('ランキング6位以下を見ない');
                }
            });
        };
        openRank();
</script>