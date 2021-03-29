<?php

	// Add RSS links to <head> section
	automatic_feed_links();

	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

	require_once("functions/post_type.php");


/*function custom_posts_join($join, $query) {
	global $wpdb;
	$join .= " INNER JOIN $wpdb->postmeta AS m1 ON m1.post_id = $wpdb->posts.ID AND m1.meta_key = 'recommend_order'";
	return $join;
}

function custom_posts_orderby($orderby, $query) {
	$orderby .= ",m1.meta_value ASC";
	return $orderby;
}*/
//スマートフォンを判別
function is_mobile(){
	$useragents = array(
		'iPhone', // iPhone
		'iPod', // iPod touch
		'Android.*Mobile', // 1.5+ Android *** Only mobile
		'Windows.*Phone', // *** Windows Phone
		'dream', // Pre 1.5 Android
		'CUPCAKE', // 1.5+ Android
		'blackberry9500', // Storm
		'blackberry9530', // Storm
		'blackberry9520', // Storm v2
		'blackberry9550', // Storm v2
		'blackberry9800', // Torch
		'webOS', // Palm Pre Experimental
		'incognito', // Other iPhone browser
		'webmate' // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//ACF管理画面CSS
function custom_acf_css() {
    echo '<style>
        .acf-field{
          overflow: hidden;
        }
        /* clearfix */
        .acf-field:before,
        .acf-field:after {
            content: "";
            display: table;
        }
        .acf-field:after {
            clear: both;
        }
        .acf-field .acf-label,
        .acf-field-true-false .acf-label {
        	float: left;
        	vertical-align: middle;
        	width: 28%;
        	margin: 0;
        	white-space: normal;
        }
        ul.acf-radio-list,
        ul.acf-checkbox-list{
          width: 100% !important;
        }
        .acf-field .acf-input,
        .acf-field-true-false .acf-input,
        ul.acf-radio-list, 
        ul.acf-checkbox-list{
        	float: left;
        	width: 72%;
        	margin: 0;
        }
         #acf-group_5af241599f1b1 .acf-field-true-false{
				 display: inline-block;
				 border-top: none !important;
				 padding: 8px 5px !important;}
        
        .acf-field-group .acf-input,
        .acf-field-repeater .acf-input,
        .headline .acf-input,
        .setumei .acf-input,
        .setumei2 .acf-input{
          width: 100%;
        }
        #acf-group_5af241599f1b1 .acf-field-true-false .acf-label,
        #acf-group_5af241599f1b1 .acf-field-true-false .acf-input {
        	width: auto !important;
        	display: inline-block !important;}
        #acf-group_5af241599f1b1 .acf-field-true-false .acf-label {
        	float: right !important;}
        #acf-group_5af241599f1b1 .acf-field-true-false .acf-input .acf-true-false {
        	float: left !important;
        	max-width: 30px;}
        .acf-fields.-top {
        	margin-top: 30px;}
        .headline .wp-editor-area{
          height: 4em !important;}
        .setumei .wp-editor-area{
          height: 8em !important;}
        .setumei2 .wp-editor-area{
          height: 8em !important;}
        .acf-image-uploader {
          min-height: 60px;}
    </style>';

}
add_action('admin_head', 'custom_acf_css');
//ウィジェットタイトル非表示 表示したくないタイトルの前に！
add_filter( 'widget_title', 'remove_widget_title' );
function remove_widget_title( $widget_title ) {
  if ( substr ( $widget_title, 0, 1 ) == '!' )
    return;
  else 
    return ( $widget_title );
}
// 管理画面のCSS
function wp_custom_admin_css() {
	echo "\n" . '<link rel="stylesheet" type="text/css" href="' .get_bloginfo('stylesheet_directory'). '/custom-admin.css' . '" />' . "\n";
}
add_action('admin_head', 'wp_custom_admin_css', 100);
// HTMLエディタにオリジナルボタンを追加
function add_my_quicktag() {
?>
<script type="text/javascript">
//QTags.addButton('ID', 'ボタンのラベル', '開始タグ', '終了タグ');
QTags.addButton('akaji', '赤文字', '<span class="aka">', '</span>');
QTags.addButton('akaki', '赤文字・黄色背景', '<span class="byel">', '</span>');
QTags.addButton('ftoji', '太字', '<span class="futo">', '</span>');
</script>
<?php
}
add_action('admin_print_footer_scripts',  'add_my_quicktag');
// テキストディタのボタン削除
function default_quicktags($qtInit) {
//$qtInit['buttons'] = 'strong,em,link,block,del,ins,img,ul,ol,li,code,more,close';//復活させるための予備
$qtInit['buttons'] = 'close';//表示するボタンのIDをカンマ区切りで記述
return $qtInit;
}
add_filter('quicktags_settings', 'default_quicktags', 10, 1);
// 管理画面にランキング順位表示
function my_add_columns($columns) {
  $columns['my_column_name'] = 'ランキング';
  return $columns;
}
add_filter( 'manage_edit-waterserver_columns', 'my_add_columns' );
function my_add_columns_content($column_name, $post_id) {
  if( $column_name == 'my_column_name' ) {
    $metas = get_post_meta($post_id);
    $stitle = $metas['recommend_order'][0];
  }
 
  if ( isset($stitle) && $stitle ) {
    echo esc_attr($stitle);
  }
}
add_action( 'manage_waterserver_posts_custom_column', 'my_add_columns_content', 10, 2 );


//アイキャッチ画像

add_theme_support('post-thumbnails');

add_image_size('column_thumbnail', 90, 90, true);

//抜粋文

function custom_excerpt_length( $length ) {
  return 99;	
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

  $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

  //表示テキスト
  $text_first   = "« 最初へ";
  $text_before  = "‹ 前へ";
  $text_next    = "次へ ›";
  $text_last    = "最後へ »";

  if ( $show_only && $pages === 1 ) {
      // １ページのみで表示設定が true の時
      echo '<div class="pagination"><span class="current pager">1</span></div>';
      return;
  }

  if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

  if ( 1 !== $pages ) {
      //２ページ以上の時
      echo '<div class="pagination"><span class="page_num">Page ', $paged ,' of ', $pages ,'</span>';
      if ( $paged > $range + 1 ) {
          // 「最初へ」 の表示
          echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
      }
      if ( $paged > 1 ) {
          // 「前へ」 の表示
          echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
      }
      for ( $i = 1; $i <= $pages; $i++ ) {

          if ( $i <= $paged + $range && $i >= $paged - $range ) {
              // $paged +- $range 以内であればページ番号を出力
              if ( $paged === $i ) {
                  echo '<span class="current pager">', $i ,'</span>';
              } else {
                  echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
              }
          }

      }
      if ( $paged < $pages ) {
          // 「次へ」 の表示
          echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
      }
      if ( $paged + $range < $pages ) {
          // 「最後へ」 の表示
          echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
      }
      echo '</div>';
  }
}
function my_custom_revision()
{
add_post_type_support( 'waterserver', 'revisions' );
}
add_action('init', 'my_custom_revision');
?>


