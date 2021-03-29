<div class="s_items">
	<div class="s_items_header">
			<div class="upper_left">
			
				<a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $pickup_id;?>&type=pickup" target="_blank" class="prrrr">
					<img src="<?php echo get_field('banner',$pickup_id); ?>" alt="<?php echo get_post_meta($pickup_id,"product_name", true); ?>" width="125" height="125" />
				</a>
			
			</div>
		<h2 class="list_item_title">
			
			<a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $pickup_id;?>&type=pickup" target="_blank" class="prrrr"><?php echo get_post_meta($pickup_id,"product_name", true); ?></a>
			
		</h2>
	</div>
	<div class="s_items_body">
		<div class="s_items_upper">
			<div class="upper_right">
					<strong><?php echo get_post_meta($pickup_id,"recommend_headline", true);?></strong>
					<p><?php echo get_post_meta($pickup_id,"recommend_description", true);?></p>
			</div>
		</div>


				<?php
					$water_type_array_pic = get_post_meta($pickup_id,"water_type",true);
					$water_type_array_pic = array_map('callback',$water_type_array_pic);
				?>
		


		 <div class="s_items_table">

            <table>
                <tr>
                    <th>配送料</th>
                    <td><?php echo get_post_meta($pickup_id,"shipping_cost", true);?></td>
                </tr>
                <tr>
                    <th>お水の種類</th>
                    <td><?php echo implode('、',$water_type_array_pic);?></td>
                </tr>
                <tr>
                    <th>サーバー代</th>
                    <td><?php echo get_post_meta($pickup_id,"server_cost", true);?></td>
                </tr>
                <tr>
                    <th>ボトル</th>
                    <td><?php echo $bottles[get_field("bottle",$pickup_id)];?>タイプ</td>
                </tr>
                <tr>
                    <th>お水の価格</th>
                    <td><?php echo get_post_meta($pickup_id,"water_cost", true);?></td>
                </tr>
                <tr>
                    <th>電気代/月</th>
                    <td><?php echo get_post_meta($pickup_id,"electricity_cost", true);?></td>
                </tr>
                <tr>
                    <th>宅配エリア</th>
                    <td colspan="3"><?php echo $shipping_areas[get_field("shipping_area",$pickup_id)];?></td>
                </tr>
            </table>

        </div>
		<div class="tokoshiki">
		
			<a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $pickup_id;?>&type=pickup" rel="external nofollow" class="official_site prrrr">
				<span>公式サイトはこちら</span>
			</a>
	
			
		</div>
	</div>
</div>