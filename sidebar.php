<div class="sidebar">
	<div class="widget">
		<h3>关于</h3>
		<ul>		
	   		 <li> <a href="https://plus.google.com/104681476128112056022/posts">G+</a> 
				 | <a href="http://weibo.com/mkrss"> Weibo </a>
				 | <a href="http://www.flickr.com/photos/realqi/"> Flicker </a> 
				 | <a href="http://www.linode.com/?r=beb4d36208574945aaa7f243053a2e6f63645337">Linode VPS</a>
			 </li> 
	   		 <li> Linux | WEB | Ruby | MAC | OpenSource </li> 
	   		 <li> 了解已完成的兼职项目 | 运维兼职或咨询  </li> 
	   		 <li> 技术交流群:10663686  </li></ul>	
	</div>
	
	
  
	
	 <?php the_widget('WP_Widget_Recent_Posts', 'number=5&title='.__('最新文章','dot-b'), 'before_title=<h3 class="widget_title">&after_title=</h3>&widget_id=1000'); ?>
	 
	 <div class="widget cloud">
 		<h3>标签云</h3>
		 <?php wp_tag_cloud('smallest=11&largest=13'); ?></div>
	 
	<div class="widget">
		<?php $args = array( 
		'orderby'          => 'name',   
		'order'            => 'ASC',    
		'limit'            => -1,    
		'category'         =>'' ,    
		'category_name'    =>'' ,    
		'hide_invisible'   => 1,    
		'show_updated'     => 0,    
		'echo'             => 1,    
		'categorize'       => 1,    
		'title_li'         => __('Bookmarks'),    
		'title_before'     => '<h3>',    
		'title_after'      => '</h3>',    
		'category_orderby' => 'name',    
		'category_order'   => 'ASC',    
		'class'            => 'linkcat' ); 
	?> 
	<?php wp_list_bookmarks( $args ); ?> 
      
 </div>
</div>
