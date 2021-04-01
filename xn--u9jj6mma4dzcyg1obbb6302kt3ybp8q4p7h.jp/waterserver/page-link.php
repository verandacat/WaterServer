<?php

/* Template Name: リンククリック用 */

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <?php if(is_mobile()) : ?>
    <style>
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100vh;
        font-family: 'メイリオ', 'Meiryo', sans-serif;
    }

    .re-campaign-box {
        margin: 30px auto 0;
        width: 95%;
        padding: 5px 10px;
        box-sizing: border-box;
        background: #e8f7f9;
        text-align: center;
    }

    .re-campaign-box img {
        width: 90%;
        box-sizing: border-box;
        margin: 40px 0;
    }

    .re-campaign-box .timer-box {
        text-align: center;
        padding: 10px;
        /* background: #fff; */
    }

    .re-campaign-box .timer-box p {
        color: #444;
        font-weight: bold;
        margin: 5px;
        font-size: 3rem;
    }

    .re-campaign-box .timer-box #timer {
        background-color: #fff;
        border-radius: 10px;
        display: inline-block;
        padding: 10px 20px;
        color: rgb(246, 50, 50);
        /* border: 1px solid #444; */
        box-shadow: 0 2px 0 2px rgba(0, 0, 0, 0.1);
    }

    .re-campaign-box .campaign-text {
        padding: 20px;
        text-align: center;
        border-bottom: 15px solid skyblue;
        border-top: 15px solid skyblue;
        margin-top: 80px;
        background: #fff;
    }

    .re-campaign-box .campaign-text h3 {
        font-size: 2.6em;
        font-weight: bold;
        color: red;
        text-align: left;
    }

    .re-campaign-box .campaign-text h3:before {
        content: '';
        display: inline-block;
        width: 20px;
        height: 20px;
        background: skyblue;
        margin-right: 20px;
    }

    .arrow-box {
        text-align: center;
        margin: 0 auto;
        position: relative;
        width: 30px;
        height: 30px;
    }

    .arrow-box:after {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, -50%) rotate(-45deg);
        width: 64px;
        height: 64px;
        background: #e8f7f9;
        z-index: -1;
    }

    .re-text-box {
        margin: 60px auto;
        box-sizing: border-box;
        padding: 30px;
        background: #fff;
        width: 95%;
        text-align: center;
        z-index: -1;
        box-shadow: 2px 2px 0 2px rgba(0, 0, 0, 0.1);
    }

    .re-text-box p {
        font-size: 2rem;
        text-align: left;
    }
    </style>
    <?php else : ?>
    <style>
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100vh;
        font-family: 'メイリオ', 'Meiryo', sans-serif;
    }

    .re-campaign-box {
        margin: 30px auto;
        width: 500px;
        padding: 15px 20px;
        box-sizing: border-box;
        background: #e8f7f9;
        text-align: center;
    }

    .re-campaign-box img {
        width: 90%;
        box-sizing: border-box;
        margin: 40px 0;
    }

    .re-campaign-box .timer-box {
        text-align: center;
        padding: 10px;
        /* background: #fff; */
    }

    .re-campaign-box .timer-box p {
        color: #444;
        font-weight: bold;
        margin: 5px;
        font-size: 1.2em;
    }

    .re-campaign-box .timer-box #timer {
        background-color: #fff;
        border-radius: 10px;
        display: inline-block;
        padding: 10px 20px;
        color: rgb(246, 50, 50);
        /* border: 1px solid #444; */
        box-shadow: 0 2px 0 2px rgba(0, 0, 0, 0.1);
    }

    .re-campaign-box .campaign-text {
        padding: 20px;
        text-align: center;
        border-bottom: 10px solid skyblue;
        border-top: 10px solid skyblue;
        margin-top: 20px;
        background: #fff;
    }

    .re-campaign-box .campaign-text h3 {
        font-size: 1.2em;
        font-weight: bold;
        color: red;
        text-align: left;
    }

    .re-campaign-box .campaign-text h3:before {
        content: '';
        display: inline-block;
        width: 4px;
        height: 4px;
        background: skyblue;
        margin-right: 10px;
    }

    .arrow-box {
        text-align: center;
        margin: 0 auto;
        position: relative;
        width: 30px;
        height: 30px;
    }

    .arrow-box:after {
        content: '';
        position: absolute;
        left: 50%;
        top: -29px;
        transform: translate(-50%, -50%) rotate(-45deg);
        width: 20px;
        height: 20px;
        background: #e8f7f9;
    }

    .re-text-box {
        margin: 20px auto;
        padding: 20px 0;
        background: #fff;
        width: 100%;
        text-align: center;
        z-index: -1;
        box-shadow: 2px 2px 0 2px rgba(0, 0, 0, 0.1);
    }
    </style>
    <?php endif; ?>
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
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
            <!-- <img src="<?php bloginfo('template_directory'); ?>/img/re_cam.jpg" alt=""> -->
        </div>
        <div class="campaign-text">
            <h3>抽選で300名様に調理ができる保存容器5点セットをプレゼント！</h3>
            <h3>最大10,000円相当の豪華２大特典付き！</h3>
        </div>
    </div>


    <div class="arrow-box">
        <span></span>
        <span></span>
    </div>

    <div class="re-text-box">
        <p>コスモウォーターの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=36">こちらをクリック</a>してください。
        </p>
    </div>



    <?php elseif($link_id == 496) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>
        <!-- <img src="<?php bloginfo('template_directory'); ?>/img/pre_re_cam-ama3000.jpg" alt=""> -->
        <div class="campaign-text">
            <!-- <h3>全員にQUOカード2,000円分プレゼント</h3> -->
            <h3>全員にAMAZONギフト券2,000円分プレゼント</h3>
        </div>
    </div>

    <div class="arrow-box">
        <span></span>
        <span></span>
    </div>


    <div class="re-text-box">
        <p>プレミアムウォーターの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=7">こちらをクリック</a>してください。</p>
    </div>



    <?php elseif($link_id == 60) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>当サイトからのお申し込み限定でボトル4本分無料チケットプレゼント！</h3>
            <h3>かならずもらえるキャンペーン2021実施中！</h3>
        </div>
    </div>

    <div class="arrow-box">
        <span></span>
        <span></span>
    </div>

    <div class="re-text-box">
        <p>アクアクララの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=30">こちらをクリック</a>してください。
        </p>
    </div>



    <?php elseif($link_id == 59) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>全員もらえる！初回の水1箱を無料0円でプレゼント！</h3>
            <h3>さらに今ならオリジナルグッズも数量限定でプレゼント！</h3>
            <h3>他社解約金最大16,500円キャッシュバック + 天然水1箱無料！</h3>
        </div>
    </div>

    <div class="arrow-box">
        <span></span>
        <span></span>
    </div>

    <div class="re-text-box">
        <p>フレシャスの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=33">こちらをクリック</a>してください。
        </p>
    </div>



    <?php elseif($link_id == 334) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
        </div>

        <div class="campaign-text">
            <h3>Quoカード5,000円+ボトル1本分など必ずもらえる、選べる特典付き！</h3>
        </div>
    </div>

    <div class="re-text-box">
        <p>クリクラの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=19">こちらをクリック</a>してください。
        </p>
    </div>
    <?php elseif($link_id == 330) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <!-- <p>キャンペーン終了まで、残り</p><p id="timer"></p></div> -->
        </div>
        <div class="campaign-text">
            <h3>天然水ボックス2箱、2,500円相当（15.6L）プレゼント！</h3>
        </div>
    </div>


    <div class="re-text-box">
        <p>サントリー天然水サーバーの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=21">こちらをクリック</a>してください。
        </p>
    </div>



    <?php elseif($link_id == 326) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>もれなく全員に祇園さゝ木パウンドケーキ＆アマノフーズ おみそ汁セットをWプレゼント！</h3>
        </div>
    </div>

    <div class="re-text-box">
        <p>ワンウェイウォーターの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=23">こちらをクリック</a>してください。
        </p>
    </div>



    <?php elseif($link_id == 782) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>新規ご購入特典で初回ボトル2本プレゼント！</h3>
            <h3>当サイト限定で2回目の注文時のボトル2本分が無料！</h3>
        </div>
    </div>

    <div class="re-text-box">
        <p>信濃湧水の公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=1">こちらをクリック</a>してください。</p>
    </div>



    <?php elseif($link_id == 1042) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">

        </div>
    </div>

    <div class="re-text-box">
        <p>ハミングウォーターの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=1">こちらをクリック</a>してください。</p>
    </div>



    <?php elseif($link_id == 452) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <p>キャンペーン終了まで、残り</p>
            <p id="timer"></p>
        </div>

        <div class="campaign-text">
            <h3>真風涼帆さんIwataniイメージキャラクター就任記念キャンペーン実施中！</h3>
        </div>
    </div>

    <div class="re-text-box">
        <p>富士の湧水の公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=11">こちらをクリック</a>してください。
        </p>
    </div>

    <?php elseif($link_id == 1304) : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">

        </div>

        <div class="campaign-text">
            <h3>新規で定期コースを申し込むと8L天然水8.0ℓ合計4本プレゼント！（2か月分）</h3>
        </div>
    </div>

    <div class="re-text-box">
        <p>リセットタイムの公式サイトに安全に移動中です。</p>
        <p>ページが移動しない場合は<a
                href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/link?link_id=1304">こちらをクリック</a>してください。
        </p>
    </div>


    <?php else : ?>
    <div class="re-campaign-box">
        <div class="timer-box">
            <img src="<?php bloginfo('template_directory'); ?>/img/wk-logo.png" alt="">
            <p>公式サイトに移動します。</p>
        </div>
    </div>
    <?php endif; ?>


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

    <?php if($link_id == 496 ) : ?> // Premiun
    countDownTimer('timer', '04/15/2021');
    <?php elseif($link_id == 60) : ?> // Aqua
    countDownTimer('timer', '05/13/2021');
    <?php elseif($link_id == 782) : ?> // shinano
    countDownTimer('timer', '01/01/2021');
    <?php elseif($link_id == 57) : ?>　// Cosmo 
    countDownTimer('timer', '05/01/2021');
    <?php elseif($link_id == 326) : ?> // oneWay
    countDownTimer('timer', '03/01/2021');
    <?php elseif($link_id == 59) : ?> // Frecious
    countDownTimer('timer', '04/12/2021');
    
    <?php else : ?>
    <?php endif; ?>
    </script>
</body>

</html>