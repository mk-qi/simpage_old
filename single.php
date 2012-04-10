<?php get_header(); ?>
<div class="clear"></div>
<div id="layout-content">
  	<div id="layout-left">
	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

