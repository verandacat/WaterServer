<div id="footer">

<div id="footer_inner">

<div id="footer_item01">

<a href="#entirety" id="btn_pagetop"><img src="<?php bloginfo('template_directory'); ?>/img/common/btn-pagetop_off.jpg" alt="Page&nbsp;Top" width="192" height="30" /></a>

		<!-- テスト用CSS -->
		<style>
		@media screen and (max-width: 670px) {
			.folist {
				margin:0;
			}

			.fot-list-wrap {
				margin: 10px 0;
			}

			.fot-list-wrap h2 {
				font-weight: bold;
				color: #4e4e4e;
				background: #fefefe;
				background: -webkit-linear-gradient(top, #fefefe , #ccc); /* For Safari 5.1 to 6.0 */
				background: -o-linear-gradient(bottom, #fefefe, #ccc); /* For Opera 11.1 to 12.0 */
				background: -moz-linear-gradient(bottom, #fefefe, #ccc); /* For Firefox 3.6 to 15 */
				background: linear-gradient(to bottom, #fefefe , #ccc); /* Standard syntax */
				padding:15px;
				
			}


			.arc-button span {
				margin-right: 10px;
				margin-top: 10px;
				position: relative;
			}

			.new-item-box{
				display: none;
			}

			.folist li {
				margin:0!important;
			}
			.folist li a {
				padding: 10px 0 10px 30px!important;
				height:auto;
				font-size:0.8em;
			}

			#footer_inner {
				background: #0059b2 url(../img/common/bg-footer.jpg) repeat-x left -10px;
			}

			#footer_inner #footer_item01 {
				
				margin: -10px auto;
			}


		}

		@media screen and (min-width: 671px) {
			#footer_inner #footer_item01{
				width: 930px!important;
				margin: 0 auto;
			}
			.folist {
				margin-top: 10px;
			}
			/* リストボックス */
			.fot-list-wrap {
				float: left;
			}

			.fot-list-wrap:nth-child(2) {
				float: right;
			}
			
			/* 1番目のリストは幅せまく */
			.fot-list-wrap:nth-child(1) {
				width: 170px;
				
    			margin-right: 10px;
			}

			/* リスト見出し */
			.fot-list-wrap h2 {
				font-weight: bold;
				color: #ffd600;
				margin-bottom:10px;
			}


			.fot-list-wrap:nth-child(1) h2:before {
				content:"";
				display: inline-block;
				background:url(<?php bloginfo('template_directory'); ?>/img/icon001.png) left top no-repeat ;
				background-size: 12px;
				width:12px;
				height:12px;
				line-height:19px;
				margin-right:5px;
			}

			.fot-list-wrap:nth-child(2) h2:before {
				content:"";
				display: inline-block;
				background:url(<?php bloginfo('template_directory'); ?>/img/icon002.png) left top no-repeat ;
				background-size: 12px;
				width:12px;
				height:12px;
				line-height:19px;
				margin-right:5px;
			}

			/* 共通CSS */
			ul.new-item-box li a {
				font-size: 0.7em;
				color: white!important;
				text-decoration: none;
			}

			ul.new-item-box li a:hover {
				text-decoration: underline;
			}

			ul.new-item-box li a:before {
				content:"▶";
				color:#ffd600;
				font-size:0.5em;
				margin-right:3px;
			}


			/* 2番目リストCSS */
			
			.fot-list-wrap:nth-child(2) {
				width: 700px;
			}
			
			.flex-box {			
				-o-display: flex;
				-webkit-display: flex;
				-moz-display: flex;
				-ms-display: flex;
				display: flex;
				justify-content: space-around;
			}

			.fot-list-wrap ul li {
				margin: 0px 6px 6px 0px!important;
			}

			.fot-list-wrap:nth-child(2) ul li {
				display: block;
				width: 334px!important;
				margin-bottom:8px!important;
			}

			/* .fot-list-wrap:nth-child(2) ul.left-list:nth-child(2) li:nth-last-child(1) {
				text-align: right!important;
			} */
			.fot-list-wrap:nth-child(2) ul.left-list:nth-child(2) li:nth-last-child(1) a:before{
				content:"";
			}

			#footer_inner a#btn_pagetop {
				
				top: -60px;
				
			}

			.left-list {
				
			}

			
		}


	</style>


<?php if (is_page('ranking')) { ?>
	<style>
	#footer_inner {
	background: #0059b3;
	}
	#footer #footer_item02 ul#footer_navi02 li a{
		color:white;
	}
</style>
	<dl id="footer_navi01">
</dl>
<?php } else { ?>

<dl id="footer_navi01">
	<!-- <dt>
		<?php if(!is_mobile()){ ?>
		<img src="<?php bloginfo('template_directory'); ?>/img/common/ttl-about-column.png" alt="当サイトについてとウォーターサーバー選びのお役立ちコラム" width="557" height="19" id="about_column" />
		<img src="<?php bloginfo('template_directory'); ?>/img/common/txt-about-column-en.png" alt="ABOUT&nbsp;THIS&nbsp;SITE&nbsp;&amp;&nbsp;USEFUL&nbsp;COLUMN" width="241" height="12" id="about_column_en" />

		<?php }else{ ?>
			当サイトについてとお役立ちコラム
		<?php } ?>
	</dt> -->
	<dd>

	<ul class="folist">

			<?php if(!is_mobile()){ ?>

			
				<div class="fot-list-wrap">

					<h2>ウォーターサーバー一覧</h2>
						<ul class="new-item-box">

						
							<li>
								<a href="<?php bloginfo('url'); ?>/cosmowater">コスモウォーター</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/premiumwater">プレミアムウォーター</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/aquaclara">アクアクララ</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/crecla">クリクラ</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/shinanoyusui">信濃湧水</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/onewaywater">ワンウェイウォーター</a>
							</li>

							<!-- <li>
								<a href="<?php bloginfo('url'); ?>/suntory">サントリー天然水サーバー</a>
							</li> -->

							<li>
								<a href="<?php bloginfo('url'); ?>/frecious">フレシャス</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/amadana">amadanaウォーターサーバー</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/waterstand">ウォータースタンド</a>
							</li>

						</ul>

						</div>


						<div class="fot-list-wrap">

						<h2>ウォーターサーバーコラム</h2>

						<ul class="new-item-box flex-box">

							<ul class="left-list">

								<li>
									<a href="<?php bloginfo('url'); ?>/about">当サイトが初めての方へ</a>
								</li>
								<li>
									<a href="<?php bloginfo('url'); ?>/column-01">ウォーターサーバーのお水が余ったらどうすればいい？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-02">ウォーターサーバーのお水でご飯を炊くと美味しいって本当？</a>
								</li>
								<li>
									<a href="<?php bloginfo('url'); ?>/column-03">ウォーターサーバーのお水はどこで採水されている？水源地を紹介！</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-04">ウォーターサーバーのお水を持ち歩くのに便利な水筒5選</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-05">ウォーターサーバーの契約期間は？解約金がかかる？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-06">ウォーターサーバーは衛生面は大丈夫？安心・安全に飲める？</a>
								</li>
								<li>
									<a href="<?php bloginfo('url'); ?>/column-07">お酒は飲めば飲むほど喉が渇く？飲酒時に水分補給が大切な理由</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-08">コーヒーを淹れるお水でコーヒーの味が変わるって本当？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-09">コンビニで買える！美味しいジュース9選</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-10">そもそも水とは？軟水・硬水の違いを解説！</a>
								</li>
								

							</ul>

							<ul class="left-list">
															

								<li>
									<a href="<?php bloginfo('url'); ?>/column-11">なぜウォーターサーバーはいま人気がある？その秘密を解説！</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-12">市販の人気ミネラルウォーター5選</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-13">二日酔いにならない水分補給のコツ</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-14">湧水がそのまま飲める！お水が美味しい日本の地域5選</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-15">流行りの機能性表示食品飲料とは？効果は期待できる？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-16">天然水とRO水だと、天然水の方がいいの？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-17">ウォーターサーバーのご家庭への設置をおすすめする理由</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-18">ウォーターサーバー業者はどうやって選べばいいの？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-19">利用目的に合ったサーバーがすぐに選べる！簡単ガイド</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-20">サーバーレンタル料は無料がほんとにお得？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/category/column">コラム一覧</a>
								</li>

							</ul>

						
						</div>
					



			<?php }else{ ?>

				<!--スマホ-->

				<div class="fot-list-wrap">

					<h2 class="arc-button"><span>▼</span>ウォーターサーバー 一覧</h2>
					
					<ul class="new-item-box arc-contents">

							<li>
								<a href="<?php bloginfo('url'); ?>/cosmowater">コスモウォーター</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/premiumwater">プレミアムウォーター</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/aquaclara">アクアクララ</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/crecla">クリクラ</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/shinanoyusui">信濃湧水</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/onewaywater">ワンウェイウォーター</a>
							</li>

							<!-- <li>
								<a href="<?php bloginfo('url'); ?>/suntory">サントリー天然水サーバー</a>
							</li> -->

							<li>
								<a href="<?php bloginfo('url'); ?>/frecious">フレシャス</a>
							</li>

							<li>
								<a href="<?php bloginfo('url'); ?>/amadana">amadanaウォーターサーバー</a>
							</li>
							
							<li>
								<a href="<?php bloginfo('url'); ?>/waterstand">ウォータースタンド</a>
							</li>

						</ul>

						</div>


						<div class="fot-list-wrap">

						<h2 class="arc-button"><span>▼</span>ウォーターサーバー コラム</h2>

						<ul class="new-item-box arc-contents">

							<ul class="left-list">

								<li>
									<a href="<?php bloginfo('url'); ?>/about">当サイトが初めての方へ</a>
								</li>
								<li>
									<a href="<?php bloginfo('url'); ?>/column-01">ウォーターサーバーのお水が余ったらどうすればいい？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-02">ウォーターサーバーのお水でご飯を炊くと美味しいって本当？</a>
								</li>
								<li>
									<a href="<?php bloginfo('url'); ?>/column-03">ウォーターサーバーのお水はどこで採水されている？<br>水源地を紹介！</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-04">ウォーターサーバーのお水を持ち歩くのに便利な水筒5選</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-05">ウォーターサーバーの契約期間は？解約金がかかる？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-06">ウォーターサーバーは衛生面は大丈夫？<br>安心・安全に飲める？</a>
								</li>
								<li>
									<a href="<?php bloginfo('url'); ?>/column-07">お酒は飲めば飲むほど喉が渇く？<br>飲酒時に水分補給が大切な理由</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-08">コーヒーを淹れるお水でコーヒーの味が変わるって本当？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-09">コンビニで買える！美味しいジュース9選</a>
								</li>

								

							</ul>

							<ul class="left-list">
															
								<li>
									<a href="<?php bloginfo('url'); ?>/column-10">そもそも水とは？軟水・硬水の違いを解説！</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-11">なぜウォーターサーバーはいま人気がある？<br>その秘密を解説！</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-12">市販の人気ミネラルウォーター5選</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-13">二日酔いにならない水分補給のコツ</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-14">湧水がそのまま飲める！お水が美味しい日本の地域5選</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-15">流行りの機能性表示食品飲料とは？効果は期待できる？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-16">天然水とRO水だと、天然水の方がいいの？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-17">ウォーターサーバーのご家庭への設置をおすすめする理由</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-18">ウォーターサーバー業者はどうやって選べばいいの？</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-19">利用目的に合ったサーバーがすぐに選べる！簡単ガイド</a>
								</li>

								<li>
									<a href="<?php bloginfo('url'); ?>/column-20">サーバーレンタル料は無料がほんとにお得？</a>
								</li>

							</ul>

						</div>

			<?php } ?>
		</ul>
	</dd>
</dl>

</div><!-- / footer item01 box -->
<?php } ?>
</div><!-- / footer inner box -->

<div id="footer_item02">

<ul id="footer_navi02">
	<li><a href="<?php bloginfo('url'); ?>/investigation">調査概要</a></li>
	<li><a href="<?php bloginfo('url'); ?>/privacy">プライバシーポリシー</a></li>
	<li><a href="<?php bloginfo('url'); ?>/info">運営者情報</a></li>
</ul>

<address>Copyright&nbsp;&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;ザンワーズ&nbsp;All&nbsp;Rights&nbsp;Reserved.</address>

</div><!-- / footer item02 box -->

</div><!-- / footer box -->


</div><!-- / entirety box -->
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
<script type="text/javascript" src="//st.nex8.net/js/nexRt.js"
async="async"></script>


<script type="text/javascript" language="javascript">

$('.arc-button').on('click', function () {

if ($(this).hasClass('on')) {
	slideUp();
	$(this).find('span').text('▼');
} else {
	slideUp();
	$(this).addClass('on').next().slideDown('slow');
	$(this).find('span').text('▲');
}
function slideUp() {
	$('.arc-button').removeClass('on').next().slideUp('slow');
	
};
})
</script>

<?php if(is_front_page() || is_page('ranking') || is_page('natural_water') || is_page('ro_water') || is_page('electric_utility_expense')|| is_page('cost') || is_page('baby') || is_page('convenience') || is_page('deskserver') || is_page('purifier') || is_page('serversearch') ) : ?>
	<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-rmliqwpb.js"></script>
<?php endif; ?>

</body>
</html>