
	<dl class="result search_result_items box">
	<dd>
<div class="s_items">
	<div class="s_items_header">
		<div class="upper_left">
				
				<?php if($post['id'] == 59){ ?>
						  <a href="https://xn--u9jj6mma4dzcyg1obbb6302kt3ybp8q4p7h.jp/new.php?id=39" target="_blank" class="prrrr"><img class="vert height125" style="display:inline-block;margin:8px 0 0;" src="<?php bloginfo('template_directory'); ?>/img/fre20191030.jpg" alt=""></a>
				
				<?php } else { ?>
							
							<a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post['id'];?>" class="prrrr"><img src="<?php echo $post['banner']; ?>" alt="<?php echo $post["product_name"]; ?>" width="125" height="125" />
							</a>
				<?php } ?>
			</a>
							
		</div>
		<h3 class="list_item_title">
			
				<a target="_blank" href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post['id'];?>" class="prrrr"><?php echo $post["product_name"]; ?></a>
			
		</h3>
	</div>
	<div class="s_items_body">
		<div class="s_items_upper">
			<div class="upper_right">
					<strong><?php echo $post["recommend_headline"];?></strong>
					<p><?php echo $post["recommend_description"];?></p>
			</div>
		</div>
		




		 <div class="s_items_table">

            <table>
                <tr>
                    <th>配送料</th>
                    <td><?php echo $post["shipping_cost"];?></td>
                </tr>
                <tr>
                    <th>お水の種類</th>
                    <td><?php echo implode('、',$post['water_types']);?></td>
                </tr>
                <tr>
                    <th>サーバー代</th>
                    <td><?php echo $post["server_cost"];?></td>
                </tr>
                <tr>
                    <th>ボトル</th>
                    <td><?php echo $post["bottle"];?>タイプ</td>
                </tr>
                <tr>
                    <th>お水の価格</th>
                    <td><?php echo $post["water_cost"];?></td>
				</tr>
				<tr>
                    <th>宅配エリア</th>
                    <td><?php echo $post["shipping_area"];?></td>
                </tr>
                <tr>
                    <th>電気代/月</th>
                    <td><?php echo $post["electricity_cost"];?></td>
                </tr>
                
            </table>

		</div>
		


		<div class="tokoshiki">
		
			<a href="<?php bloginfo('url'); ?>/link?link_id=<?php echo $post['id'];?>" rel="external nofollow" class="official_site prrrr">
				<span>公式サイトはこちら</span>
			</a>
		</div>
	</div>
</div>
</dd>
</dl>