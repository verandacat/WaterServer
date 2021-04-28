<?php

/* Template Name: リンククリック用-renewal用 */

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/redirect.css?<?php echo time(); ?>">
</head>

<body>

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

    <?php
    //_GETでデータを取得し、
    //商品データからurl情報を取ってリダイレクトする
    if(isset($_GET['link_id'])) {

        $link_id = $_GET['link_id'];
        $url = "";

        if (is_numeric($link_id)) {

            if (isset($_GET['type'])) {
                if ($_GET['type'] == "electric" or $_GET['type'] == "mama") {
                    $url = get_post_meta( $link_id, 'url2', true );
                } else if ($_GET['type'] == "free") {
                    $url = get_post_meta( $link_id, 'url3', true );
                }else if($_GET['type'] == "pickup"){
                    $url = get_post_meta( $link_id, 'pickup_url', true );
                }
            }
            if ($url == "") {
                $url = get_post_meta( $link_id, 'url', true );
            }
        }
        if ($url !== "") {
            //このページ噛ますように変更
            //header( "location: {$url}");
    ?>


    <?php if($link_id == 57) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
            <!-- <img src="<?php bloginfo('template_directory'); ?>/img/re_cam.jpg" alt=""> -->
        </div>
        <div class="campaign-text">
            <h3>抽選で300名様に調理ができる<span class="ylw">保存容器5点セットをプレゼント</span>！</h3>
            <h3><span class="ylw">最大12,000円相当</span>の豪華２大特典付き！</h3>
        </div>
    </div>

    <?php elseif($link_id == 496) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>
        <!-- <img src="<?php bloginfo('template_directory'); ?>/img/pre_re_cam-ama3000.jpg" alt=""> -->
        <div class="campaign-text">
            <!-- <h3>全員にQUOカード2,000円分プレゼント</h3> -->
            <h3>全員に<span class="ylw">AMAZONギフト券2,000円</span>分プレゼント</h3>
        </div>
    </div>

    <?php elseif($link_id == 60) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>当サイトからのお申し込み限定で<span class="ylw">ボトル4本分無料チケット</span>プレゼント！</h3>
            <h3><span class="ylw">かならずもらえるキャンペーン</span>2021実施中！</h3>
        </div>
    </div>

    <?php elseif($link_id == 59) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>全員もらえる！<span class="ylw">初回の水1箱を無料0円</span>でプレゼント！</h3>
            <h3>さらに今なら<span class="ylw">オリジナルグッズ</span>も数量限定でプレゼント！</h3>
            <h3>他社解約金<span class="ylw">最大16,500円キャッシュバック + 天然水1箱無料</span>！</h3>
        </div>
    </div>


    <?php elseif($link_id == 334) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
        </div>

        <div class="campaign-text">
            <h3>「選べる国産和牛 カタログギフト」など、かならずもらえる選べる特典プレゼント！</h3>
        </div>
    </div>

    <?php elseif($link_id == 330) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <!-- <p>キャンペーン終了まで、残り</p><p id="timer"></p></div> -->
        </div>
        <div class="campaign-text">
            <h3>天然水ボックス2箱、2,500円相当（15.6L）プレゼント！</h3>
        </div>
    </div>


    <?php elseif($link_id == 326) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>もれなく全員に紀州高田果園 ひと雫の絹梅＆アマノフーズ おみそ汁セットをWプレゼント！</h3>
        </div>
    </div>


    <?php elseif($link_id == 782) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>新規ご購入特典で初回ボトル2本プレゼント！</h3>
            <h3>当サイト限定で2回目の注文時のボトル2本分が無料！</h3>
        </div>
    </div>

    <?php elseif($link_id == 1042) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">

        </div>
    </div>

    <?php elseif($link_id == 452) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>真風涼帆さんIwataniイメージキャラクター就任記念キャンペーン実施中！</h3>
        </div>
    </div>

    <?php elseif($link_id == 1304) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">

        </div>

        <div class="campaign-text">
            <h3>新規で定期コースを申し込むと8L天然水8.0ℓ合計4本プレゼント！（2か月分）</h3>
        </div>
    </div>

    <?php else : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.svg" alt="">
            <p>公式サイトに移動します。</p>
        </div>
    </div>
    <?php endif; ?>

    <div class="re-text-box">
        <p><span><?php echo get_post_meta($link_id, "product_name", true); ?></span>の公式サイトに安全に移動中です。</p>
        
        <p>ページが移動しない場合は
            <!--コスモウォーター-->
            <?php if($link_id == 57) : ?> 
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=36">
            <!--プレミアムウォーター-->
            <?php elseif($link_id == 496) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=7">
            <!-- アクアクララ -->
            <?php elseif($link_id == 60) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=30">
            <!-- フレシャス -->
            <?php elseif($link_id == 59) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=33">
            <!-- クリクラ -->
            <?php elseif($link_id == 334) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=19">
            <!-- サントリー天然水サーバー -->
            <?php elseif($link_id == 330) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=21">
            <!-- ワンウェイウォーター -->
            <?php elseif($link_id == 326) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=23">
            <!-- 信濃湧水 -->
            <?php elseif($link_id == 782) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=1">
            <!-- ハミングウォーター -->
            <?php elseif($link_id == 1042) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=1">
            <!-- 富士の湧水 -->
            <?php elseif($link_id == 452) : ?>
            <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=11">
            <!-- 富士の湧水 -->
            <?php elseif($link_id == 1304) : ?>
            <a
            href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/link?link_id=1304">
            <?php endif; ?>
            こちらをクリック</a>してください。
        </p>
    </div>


    <script>
    setTimeout(function() {
        //alert("<?php echo $url; ?>");
        location.replace("<?php echo $url; ?>");
    }, 1000);
    </script>
    <?php
		//リダイレクト
	} else {
		//トップページへリダイレクト
		header( "location: " . home_url() );
	}
} else {
	//トップページへリダイレクト
	header( "location: " . home_url() );
}

?>

    <script type="text/javascript" language="javascript">
    /* <![CDATA[ */
    var yahoo_retargeting_id = 'WWZH9Z0GMN';
    var yahoo_retargeting_label = '';
    /* ]]> */
    </script>
    <script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>
    <script type="text/javascript">
    window.nex_rt_queue = window.nex_rt_queue || [];
    window.nex_rt_queue.push({
        advertiser_id: 276
    });
    </script>
    <script type="text/javascript" src="//st.nex8.net/js/nexRt.js" async="async"></script>
    <script>
    const countDownTimer = function(id, date) {
        var _vDate = new Date(date);
        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;
       

        function showRemaining() {
            var now = new Date();
            var distDt = _vDate - now;
            if (distDt < 0) {
                clearInterval(timer);
                document.getElementById(id).textContent = 'キャンペーン終了しました。';
                return;
            }
            var days = Math.floor(distDt / _day);
            var hours = Math.floor((distDt % _day) / _hour);
            var minutes = Math.floor((distDt % _hour) / _minute);
            var seconds = Math.floor((distDt % _minute) / _second);

            
            document.getElementById(id).textContent = days + '日';
            document.getElementById(id).textContent += hours + '時間';
            document.getElementById(id).textContent += minutes + '分';
            document.getElementById(id).textContent += seconds + '秒';

        }

        timer = setInterval(showRemaining, 0);
    }

    

    var dateObj = new Date();
    dateObj.setDate(dateObj.getDate() + 1);

    <?php if($link_id == 496 ) : ?> // Premium
    countDownTimer('timer', '07/01/2021');
    <?php elseif($link_id == 60) : ?> // Aqua
    countDownTimer('timer', '05/13/2021');
    <?php elseif($link_id == 782) : ?> // shinano
    countDownTimer('timer', '01/01/2021');
    <?php elseif($link_id == 57) : ?>　// Cosmo 
    countDownTimer('timer', '05/01/2021');
    <?php elseif($link_id == 326) : ?> // oneWay
    countDownTimer('timer', '05/01/2021');
    <?php elseif($link_id == 59) : ?> // Frecious
    countDownTimer('timer', '05/10/2021');
    
    <?php else : ?>
    <?php endif; ?>
    </script>
</body>

</html>