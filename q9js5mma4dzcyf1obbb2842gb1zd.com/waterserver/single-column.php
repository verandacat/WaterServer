<?php get_header(); ?>
 <script type="application/javascript">
 $(window).load(function() {
		$("#btn_search_start").click(function () {
			$('#form1').submit();
		});
 });
</script>

<div id="main_contents">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$image = get_field('header_img');
		$waterserver_id = get_field('id');
	?>
	<?php $t = get_the_title(); ?>



<div id="footmark">
	<a href="<?php bloginfo('url'); ?>/">トップページ</a><span>&nbsp;&gt;&nbsp;<?php the_category('column'); ?></span><span>&nbsp;&gt;&nbsp;<?php the_title(); ?></span>
</div>

<dl class="ranking column">
	
	<dt>
		<h2 class="contents_title"><?php the_title(); ?></h2>
	</dt>

	<?php
		if ($image) :
	?>
	
	<h1><img src="<?php echo $image; ?>" alt="" /></h1>
	<?php endif; ?>

	
	<?php if (is_mobile()): ?>
	<div style="margin:15px;">
	<?php else : ?>
	<div style="margin:20px;">
		<?php endif; ?>

		<?php the_content(); ?>

	</div>

	<?php endwhile; endif; ?>
<dd>
</dd>


	
</dl>

<?php include(TEMPLATEPATH .'/inc/searchform.php'); ?>
</div><!-- / main contents box -->
<?php if(is_mobile()){
	get_sidebar();
} ?>
</div><!-- / contents box -->
<?php get_footer(); ?>