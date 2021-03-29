<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/single.css" media="all" />
<div id="main_contents">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="footmark"><a href="<?php bloginfo('url'); ?>/">トップページ</a><span>&nbsp;&gt;&nbsp;<?php the_title(); ?></span></div>
<?php include(TEMPLATEPATH .'/inc/searchform.php'); ?>
 <script type="application/javascript">
 $(window).load(function() {
    $("#btn_search_start").click(function () {
      $('#form1').submit();
    });
    console.log("feature");
 });
</script>
<dl id="single_campaign" class="wp_contents">
		<div class="post" id="post-<?php the_ID(); ?>">
<?php if(!is_mobile()){ ?>
<dl class="ranking pc">
<dt>
			<h2 class="contents_title"><?php the_title(); ?></h2>
</dt>

	
	<dd>
		<div class="ranking_result">
			<div class="server_caption">
								<a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=60" class="prrrr"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/07/125-125-1.jpg" alt="アクアクララ" /></a>
								<p><span style="color: #ff0000; font-size: 100%;"><strong>アクアクララを当サイトからお申込みの方限定でお水ボトル6本分（7,200円相当）を無料プレゼント！！</strong></span></p>
			</div><!-- / server_caption [ranking no1] -->
			<table>
				<tr>
					<th><span>お水の価格（1本）</span></th><td><span>1200円～（12L）</span></td>
					<th><span>お水の種類</span></th><td><span>RO水</span></td>
				</tr>
				<tr>
					<th><span>サーバー代（月）</span></th><td><span>無料 ※別途あんしんサポート費用</span></td>
					<th><span>配送料</span></th><td><span>無料</span></td>
				</tr>
				<tr>
					<th><span>ボトルの種類</span></th><td><span>返却タイプ</span></td>
					<th><span>電気代（月）</span></th><td><span>350円※節電サーバーの場合</span></td>
				</tr>
				<tr class="last_tr">
					<th><span>配送地域</span></th><td colspan="3"><span>全国</span></td>
				</tr>
			</table>

			<a href="<?php bloginfo('url'); ?>/link?link_id=60" rel="external nofollow" class="official_site prrrr"><img src="<?php bloginfo('url'); ?>/wp-content/themes/waterserver/img/common/btn-official-site_off.jpg" alt="公式サイトへ" width="310" height="60" /></a>
		</div><!-- / ranking result [ranking no1] -->
	</dd>

</dl>
<?php }else{ ?>
<dl class="sp">
<dd>
<div class="s_items">
	<div class="s_items_header">
		<div class="upper_left">
			<a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=60" class="prrrr"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/07/125-125-1.jpg" alt="アクアクララ" width="125" height="125" />
			</a>
		</div>
		<h3 class="list_item_title">
			<a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=60" class="prrrr"><?php the_title(); ?></a>
		</h3>
	</div>
	<div class="s_items_body">
		<div class="s_items_upper">
			<div class="upper_right">
				<p><span style="color: #ff0000; font-size: 140%;"><strong>アクアクララを当サイトからお申込みの方限定でお水ボトル6本分（7,200円相当）を無料プレゼント！！</strong></span></p>
			</div>
		</div>
		<div class="s_items_table quad">
			<table>
				<tr>
					<th>配送料</th>
					<td>無料</td>
					<th>お水の種類</th>
					<td>RO水</td>
				</tr>
				<tr>
					<th class="vl">サーバー代/月</th>
					<td>無料 ※別途あんしんサポート費用</td>
					<th>ボトルの種類</th>
					<td>返却タイプ</td>
				</tr>
			</table>
		</div>
		<div class="s_items_table">
			<table>
				<tr>
					<th>お水の価格</th>
					<td>1200円～（12L）</td>
				</tr>
				<tr>
					<th>宅配エリア</th>
					<td>全国</td>
				</tr>
				<tr>
					<th>電気代/月</th>
					<td>350円※節電サーバーの場合</td>
				</tr>
			</table>
		</div>
		<div class="tokoshiki">

			<a href="<?php bloginfo('url'); ?>/link?link_id=60" rel="external nofollow" class="official_site prrrr">
				<span>公式サイトはこちら</span>
			</a>
		</div>
	</div>
</div>
</dd>
</dl>
<?php } ?>


			<div class="entry"<?php if(is_mobile()){ ?> style="padding:0 0 20px"<?php } ?>>



<p><a href="<?php bloginfo('url'); ?>/wp-content/themes/waterserver/img/IMG_8674.JPG"><img class="aligncenter wp-image-607" src="<?php bloginfo('url'); ?>/wp-content/themes/waterserver/img//IMG_8674.JPG" width="100%"></a></p>

<h2>アクアクララのおすすめポイント</h2>

<p><strong style="font-size:12pt;color:#f00;">・人気No.1のアクアファブはグッドデザイン賞受賞のおしゃれサーバー！</strong></p>
<p><strong style="font-size:12pt;color:#f00;">・日本初！コーヒーマシン一体型アクアウィズはコーヒー愛飲家に便利！</strong></p>
<p><strong style="font-size:12pt;color:#f00;">・もらって嬉しいご褒美キャンペーン実施中でお得！</strong></p>


<h2 style="margin:30px 15px 20px;">編集部からのコメント</h2>

<p>アクアクララは<span style="color: #ff0000; background-color: #ffff00; font-size: 12pt;"><strong>8年連続モンドセレクション「優秀品質最高金賞」受賞</strong></span>の安心安全なおいしいお水が飲めるウォーターサーバーです。</p>
<p>お水は、ROろ過システムにより徹底的に不純物を除去したきれいなピュアウォーターに4種類のミネラルを加えたお水です。</p>
<p>軟水なので口当たりがとてもまろやかでおいしく飲みやすいのが特徴です。炊飯やお料理にも合い、赤ちゃんのミルクつくりにも最適な安心・安全な優しいお水です。</p>

<p>サーバーの種類も豊富。<strong>人気No.1のグッドデザイン賞受賞のアクアファブ</strong>はボトルがサーバー内に格納されるためおしゃれ、さらに給水口を従来よりも約8cm高くしたことでお水が楽に注げて細部にこだわって設計されています。</p>
<p><strong>日本初のコーヒーマシン一体型ウォーターサーバー「アクアウィズ」</strong>はお水を補充する手間が省け、「忙しい朝やゆっくりしたい時に便利で助かる」とコーヒー愛飲家に大好評です。</p>

<p>アクアクララは自社配送で配送コストが抑えられるため12Lボトル1本1,200円とお水代が他のウォーターサーバーと比較して格安であり、購入ノルマもないため、ご自身のペースで注文できるのが嬉しいです。</p>

<p>アクアクララポーターと呼ばれる自社の専門スタッフがウォーターサーバーの設置作業、お水の配送、故障対応、定期メンテナンスまですべて行ってくれるため、何かあったときでも安心してご利用いただけます。</p>

<p>今ならエアーオーブンかソーダストリームのどちらかがもれなくもらえる「かならずもらえるキャンペーン2020夏」を実施中（2020年9月30日まで）です。</p>
<p><span style="color: #ff0000; background-color: #ffff00; font-size: 12pt;"><strong>加えて、当サイトからのお申込み限定でボトルチケット4枚、はじめてセット分の無料2本と合わせて、計6本のボトルを無料（7,200円相当）プレゼント</strong></span>してます。</p>

<p>アクアクララのお申込みを検討している方は、ぜひお得なチャンスを逃すことがないよう、今のうちにお申込み手続きを済ませておいてくださいね！</p>

<p><a href="<?php bloginfo('url'); ?>/link?link_id=60" target="_blank" rel="noopener noreferrer" class="prrrr but"><img class="aligncenter wp-image-599" src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/08/aquabutton.png" alt="premiumbutton" width="360" height="84" srcset="<?php bloginfo('url'); ?>/wp-content/uploads/2019/08/aquabutton.png 360w, <?php bloginfo('url'); ?>/wp-content/uploads/2019/08/aquabutton.png 300w" sizes="(max-width: 360px) 100vw, 360px" /></a></p>


<h2>アクアクララ愛用者の口コミ</h2>

<p><a href="<?php bloginfo('url'); ?>/wp-content/themes/waterserver/img/IMG_8676.JPG"><img class="aligncenter wp-image-607" src="<?php bloginfo('url'); ?>/wp-content/themes/waterserver/img/IMG_8676.JPG" width="100%"></a></p>

<style>
h3{margin:30px 15px 20px;}
</style>
<h3>太郎　男性　46歳　自営業　評価<span style="color:#FFBF00">★★★★</span></h3>

<p>友人に誘われてアクアクララを使い始めました。個人的には水道の水を浄化して、ミネラル成分を添加しているという人工の水という印象があるために、どうかなと思うところがあったのですが、リーズナブルな価格と、天然水はチェック機能が弱く、本当に安全かどうかという点では、水道の水をさらに逆浸透膜で菌を徹底的に取り除いているという安全性が証明された水の方が良いし、実際に飲んでみてすっきりしておいしいので満足しています。熱いお湯と冷たい水が同時に出るのが魅力で、コーヒーやインスタントみそ汁にも使っています。卓上用のサーバーは狭い我が家でもそれほど場所を取らないメリットを感じていますが、ややデメリットとしては、電気代がそれなりにかかるのと、ボトルの置き場で少し苦労しています。でも安心して水が飲めること、ボトルを挿している状態がきれいな水槽を見ているようでとてもいい感じなので、総合的に満足しています。</p>

<h3>Yuzumasya 女性 51歳 会社員 評価<span style="color:#FFBF00">★★★★</span></h3>

<p>水が美味しかったです。不純物がなくて軽い感じ。喉が渇いていたらゴクゴクいけちゃう。特に子供達は、食事の途中に振り返って手を伸ばしておかわりして飲んでいました。また、お湯がちょこっと欲しい時もありがたいです。アイスココアのココアの粉を少量のお湯で先に溶かしたい時や、カップスープのお湯もわざわざ沸かさなくても済みます。困った事は、水が終わってしまい足りなくなってしまう事。定期便なのでもう少しで来るからと、ガマンしていましたが、そのうち追加で頼むようになりました。余分にあると災害時の備えとして安心です。ボトルは回収してくれるのでゴミが出ないのが良かったです。空きボトルもストックもがさばりますが、美味しさと便利さで致し方ないかなあと思っています。</p>

<h3>さな 女性 30代 専業主婦 評価<span style="color:#FFBF00">★★★★★</span></h3>

<p>出産後ミルクを作るために、アクアクララを使いはじめました。狭いマンションだったので、幅を取らないアクアスリムを選びました。お水の美味しさも素晴らしくて、ミルクを作るだけではなく、飲料水や料理にも使うようになりました。ウォーターサーバーと言うと、場所を取るイメージも強いかもしれませんが、アクアクララには場所を取らないデザインもあるので、使いやすいと思います。アクアクララを使い始めて、より良い暮らしになりました。</p>

<h3>Kei 男性 30代 会社員 評価<span style="color:#FFBF00">★★★★</span></h3>

<p>アクアクララを使って良かった点は、どのウォーターサーバーも共通だと思いますが、お湯が使える事です。タンクにお湯をためていると思いますが、カップラーメン2杯程度は一気に使用できるので、普段の生活でお湯が必要な状況にはすべて対応できると思います。又、消音な事もメリットです。常時コンセントに繋いで電源ON状態ですが、機械音がなっている事も気づかない程度の消音です。私が使っているタイプはボトルを上にさすので残量の確認が目視でしやすいです。ただし12Lのボトルを入れ替えるのは女性には厳しいと思う点が少しマイナスな所ですが、全体としては非常に満足いくものです。</p>

<h3>ココア 女性 35歳 在宅ワーク 評価<span style="color:#FFBF00">★★★★</span></h3>

<p>こちらのウォーターサーバーのお水は大変美味しく、毎日ごくごくと飲む事ができました。もちろん、体にも大変優しいです。水道水と異なり、塩素系の脱臭剤等は使用されていないため乳児～幼児のアレルギー体質のお子様にも大変おすすめです。ただ、ウォーターサーバー本体の汚れが溜まりやすいため、雑巾などで丁寧にお手入れをしなければなりません。水を入れるボトルは毎月、新しい物と交換するため大変衛生的です。又、本体へのボトルの取り付けも一回覚えてしまえば誰でもする事が可能です。毎日、美味しいお水を飲む事が出来て美容にも良いので大変おすすめです。</p>

<h3>ともたろう 男性 30代 自営業 評価<span style="color:#FFBF00">★★★★★</span></h3>

<p>現在も使用しているのがアクアクララで、美味しい水を飲むことができているので満足です。そこまで大きなサイズになっていないので、普段の日常生活をする上で邪魔になることはほとんどありません。また水だけではなく、お湯も快適に使用できるのが嬉しい部分になります。個人的にカップラーメンやお茶が好きなのですがお湯を簡単に使用することができるので、助かっています。更にお湯で火傷を使用しないように配慮されているのも個人的に気に入っている部分です。上手くコックを使わないとお湯が出ないようになっており、子供がいたずらで使用できないように工夫されています。このように色んな部分で、メリットや魅力を実感できているので今後も使い続けていきたいと思っています。</p>

<h3>りおん　女性　34歳　会社員　評価<span style="color:#FFBF00">★★★★</span></h3>

<p>子どもが産まれた頃から設置しています。ミルクを作る時にはケトルよりも素早くお湯が準備できるので助かりました。水が出てくる所が子どもが触れる位置にありますが、ロックしておけばやけどのリスクは減らせると思います。少し水分補給したいときにも気軽に使えるところも気に入っています。ただ、今設置しているものが上にタンクを付けるタイプなので、水のタンク交換の時には重くて少し大変だなと思うことはありますが、女性でも交換は問題なくできますよ。</p>

<h3>ポーズ 男性 33歳 測量関連 評価<span style="color:#FFBF00">★★★★★</span></h3>

<p>卓上型のシンプルなもの（アクアスリムS）を利用したのですが、結構置き場所に苦労しないで設置できますので、台所でもどこでも利用しやすかったのが大きな利点です。安心サポート料も月１０００円とかなり安く、負担もそこまで大きくなかったのはとても有用だったと思います。ボトルが少々重くても、注文したタイプならそこまで高く上げなくても設置可能なので、安心でした。これからもウォーターサーバーの安全なお水を利用していきたいと思っています。</p>

<h3>モモカ 女性 30代 会社員 評価<span style="color:#FFBF00">★★★★★</span></h3>

<p>アクアクララのウォーターサーバーを利用していますが、私にとって嬉しいのは安心・安全なお水というところです。毎日口にするものなので、安全性は重視して選ぼうと思っていたところ、アクアクララにたどり着きました。また、見た目の選択肢が豊富なところも気に入っており、設置場所の雰囲気に合わせて種類を選べるところも良いなと思いました。そして、やはり美味しさにこだわりがあって、飲み口がすっきりしているところも良かったです。これからも愛用したいです。</p>


<p><a href="<?php bloginfo('url'); ?>/link?link_id=60" target="_blank" rel="noopener noreferrer" class="prrrr but"><img class="aligncenter wp-image-599" src="<?php bloginfo('url'); ?>/uploads/2019/08/premiumbutton.png" alt="premiumbutton" width="360" height="84" srcset="<?php bloginfo('url'); ?>/wp-content/uploads/2019/08/aquabutton.png 360w, <?php bloginfo('url'); ?>/wp-content/uploads/2019/08/aquabutton.png 300w" sizes="(max-width: 360px) 100vw, 360px" /></a></p>


<style>
.but{
display:block;
margin:20px 0;
}
</style>




				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('編集.', '<p>', '</p>'); ?>

		</div>

		<?php comments_template(); ?>
<dd>
</dd>
</dl>
		<?php endwhile; endif; ?>
</div><!-- / main contents box -->
</div><!-- / contents box -->
<?php get_footer(); ?>
