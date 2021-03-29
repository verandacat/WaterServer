<?php

/* Template Name: トップページ用 */

?>
<?php get_header(); ?>
 <script type="application/javascript">
 $(window).load(function() {
		$("#btn_search_start").click(function () {
			$('#form1').submit();
		});
 });
</script>
<?php get_sidebar(); ?>

<div id="main_contents">

<h2><img src="<?php bloginfo('template_directory'); ?>/img/top/img-main-visual.jpg" alt="ウォーターサーバー選びでお困りなら　あなたにぴったりのウォーターサーバーをラクラク3秒検索でご紹介" width="700" height="234" /></h2>

<?php include(TEMPLATEPATH .'/inc/searchform.php'); ?>

<a href="<?php bloginfo('url'); ?>/ranking/" id="banner_ranking"><img src="<?php bloginfo('template_directory'); ?>/img/top/bnr-ranking_off.jpg" alt="2013年版　本気でオススメできる優良ウォーターサーバー人気ランキング" width="700" height="99" /></a>

<dl id="campaign_info">
	<dt>
		<img src="<?php bloginfo('template_directory'); ?>/img/top/ttl-campaign-info.gif" alt="最新のお得キャンペーン情報" width="267" height="19" class="contents_title" />
		<img src="<?php bloginfo('template_directory'); ?>/img/top/txt-ttl-campaign-info-en.gif" alt="CAMPAIGN&nbsp;INFORMATION" width="163" height="12" class="contents_title_en" />
	</dt>
	<dd>
		<ul>
<?php
$category_id = get_cat_ID('キャンペーン');
$posts = get_posts("numberposts=2&category=$category_id");
?>
<?php
if($posts): foreach($posts as $post): setup_postdata($post);

 ?>
<li><span><a href="<?php the_permalink(); ?>"><?php 	if ($post->post_excerpt) : echo $post->post_excerpt; else: the_title(); endif;?></a></span></li>
<?php endforeach; endif;
?>
		</ul>
	</dd>
</dl>

<dl id="direct_search">
	<dt><img src="<?php bloginfo('template_directory'); ?>/img/top/ttl-direct-search.gif" alt="各都道府県にお届け可能な業者を一発検索！　DIRECT&nbsp;SEARCH" width="314" height="61" class="contents_title" /></dt>
	<dd>
		<div id="japanese_map">

			<table id="map_hokkaido">
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=hokkaido">北海道</a></td>
				</tr>
			</table>

			<table id="map_tohoku">
				<tr class="border_bottom">
					<th rowspan="3">東北</th>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=aomori">青森</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=iwate">岩手</a></td>
				</tr>
				<tr class="border_bottom">
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=akita">秋田</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=miyagi">宮城</a></td>
				</tr>
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=yamagata">山形</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=fukushima">福島</a></td>
				</tr>
			</table>

			<table id="map_shinetsu">
				<tr class="border_bottom">
					<th rowspan="3">信越<br />・<br />北陸</th>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=toyama">富山</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=niigata">新潟</a></td>
				</tr>
				<tr class="border_bottom">
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=ishikawa">石川</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=nagano">長野</a></td>
				</tr>
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=fukui">福井</a></td>
					<td class="border_left">&nbsp;</td>
				</tr>
			</table>

			<table id="map_kanto">
				<tr class="border_bottom">
					<th rowspan="3">関東</th>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=gunma">群馬</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=tochigi">栃木</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=ibaraki">茨城</a></td>
				</tr>
				<tr class="border_bottom">
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=yamanashi">山梨</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=saitama">埼玉</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=chiba">千葉</a></td>
				</tr>
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=kanagawa">神奈川</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=tokyo">東京</a></td>
					<td class="border_left">&nbsp;</td>
				</tr>
			</table>

			<table id="map_tokai">
				<tr class="border_bottom">
					<th rowspan="2">東海</th>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=gifu">岐阜</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=aichi">愛知</a></td>
				</tr>
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=mie">三重</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=shizuoka">静岡</a></td>
				</tr>
			</table>

			<table id="map_kinki">
				<tr class="border_bottom">
					<th rowspan="3">近畿</th>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=kyoto">京都</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=shiga">滋賀</a></td>
				</tr>
				<tr class="border_bottom">
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=osaka">大阪</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=nara">奈良</a></td>
				</tr>
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=hyogo">兵庫</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=wakayama">和歌山</a></td>
				</tr>
			</table>

			<table id="map_chugoku">
				<tr class="border_bottom">
					<th rowspan="3">中国</th>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=shimane">島根</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=tottori">鳥取</a></td>
				</tr>
				<tr class="border_bottom">
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=hiroshima">広島</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=okayama">岡山</a></td>
				</tr>
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=yamaguchi">山口</a></td>
					<td class="border_left">&nbsp;</td>
				</tr>
			</table>

			<table id="map_shikoku">
				<tr class="border_bottom">
					<th rowspan="2">四国</th>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=ehime">愛媛</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=kagawa">香川</a></td>
				</tr>
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=kochi">高知</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=tokushima">徳島</a></td>
				</tr>
			</table>

			<table id="map_kyushu">
				<tr class="border_bottom">
					<th rowspan="4">九州</th>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=saga">佐賀</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=fukuoka">福岡</a></td>
				</tr>
				<tr class="border_bottom">
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=nagasaki">長崎</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=oita">大分</a></td>
				</tr>
				<tr class="border_bottom">
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=kumamoto">熊本</a></td>
					<td class="border_left"><a href="<?php bloginfo('url'); ?>/serversearch/?pref=miyazaki">宮崎</a></td>
				</tr>
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=kagoshima">鹿児島</a></td>
					<td class="border_left">&nbsp;</td>
				</tr>
			</table>

			<table id="map_okinawa">
				<tr>
					<td><a href="<?php bloginfo('url'); ?>/serversearch/?pref=okinawa">沖縄</a></td>
				</tr>
			</table>

		</div><!-- / japanese map box -->
	</dd>
</dl>

</div><!-- / main contents box -->
</div><!-- / contents box -->
<?php get_footer(); ?>