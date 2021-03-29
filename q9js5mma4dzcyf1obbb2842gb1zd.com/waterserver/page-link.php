<?php

/* Template Name: リンククリック用 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-script-type" content="text/javascript" />

</head>
<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NHDMSC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NHDMSC');</script>
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
公式サイトに移動します。
<script>
	setTimeout(function(){
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
<script type="text/javascript" src="//st.nex8.net/js/nexRt.js"
async="async"></script>
</body>
</html>