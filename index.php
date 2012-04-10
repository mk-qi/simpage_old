<?php get_header(); ?>
<div class="clear"></div>
<div id="layout-content">
  <div id="layout-left">
		  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="post">
           <div class="title"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
              <i>Written on <?php the_time('Y.m.d H:i') ?>  <?php the_tags('tags: ', ', ', ''); ?></i>
              <?php the_content(); ?>
      
	        <div class="line"></div>
           </div>
          <?php comments_template(); ?>
        <?php endwhile; else: ?>
             <p>对不起,没有找到符合的文章.<br /></p>
        <?php endif; ?>	
  <div id="pagenav"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
  </div>
  <div id="layout-right"><?php get_sidebar(); ?></div>
</div>
     <?php get_footer(); ?>




