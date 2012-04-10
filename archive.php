<?php get_header(); ?>
	<div id="layout-content">
		<div id="layout-left">
		
			 <?php $posts = query_posts($query_string . '&posts_per_page=20'); if (have_posts()) : ?>
				  <?php $post = $posts[0]; ?>
				  <?php if (is_category()) { ?>
					<h2> 相关分类： <?php single_cat_title(); ?></h2>
				  <?php } elseif( is_tag() ) { ?>
					<h2> Archived By Tags:  <?php single_tag_title(); ?></h2>
				  <?php} elseif (is_day()) { ?>
				
				  <?php } ?>

			<?php while (have_posts()) : the_post(); ?>
        
     	 <div class="post">
     	  <div class="title"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
     	   <i><a src="#"><?php the_author() ?></a>&nbsp written on <?php the_time('Y.m.d H:i') ?>  <?php the_tags('tags: ', ', ', ''); ?>  <?php comments_popup_link('no comments', '1 comments', '% comments'); ?> </i>
     		<?php the_content(); ?>
      	  <div class="line"></div>
           <?php comments_template(); ?>
     	   </div>
				       <?php endwhile; else: ?>
				                                <p>对不起,没有找到符合的文章.<br /></p>
				        <?php endif; ?>		
					
						</div>
						<div id="layout-right"><?php get_sidebar(); ?></div>
				</div>
						
<?php get_footer(); ?>
