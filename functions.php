<?php
/* begin pages Navi */
function pagenavi($before = '', $after = '') {
	global $wpdb, $wp_query;
	if (!is_single()) {
		$request = $wp_query->request;
		$posts_per_page = intval(get_query_var('posts_per_page'));
		$paged = intval(get_query_var('paged'));
		$pagenavi_options = get_option('pagenavi_options');
		$numposts = $wp_query->found_posts;
		$max_page = $wp_query->max_num_pages;

		if(empty($paged) || $paged == 0) {
			$paged = 1;
		}
		$pages_to_show = intval($pagenavi_options['num_pages']);
		$pages_to_show_minus_1 = $pages_to_show-1;
		$half_page_start = floor($pages_to_show_minus_1/2);
		$half_page_end = ceil($pages_to_show_minus_1/2);
		$start_page = $paged - $half_page_start;
		if($start_page <= 0) {
			$start_page = 1;
		}
		$end_page = $paged + $half_page_end;
		if(($end_page - $start_page) != $pages_to_show_minus_1) {
			$end_page = $start_page + $pages_to_show_minus_1;
		}
		if($end_page > $max_page) {
			$start_page = $max_page - $pages_to_show_minus_1;
			$end_page = $max_page;
		}
		if($start_page <= 0) {
			$start_page = 1;
		}
		if($max_page > 1 || intval($pagenavi_options['always_show']) == 1) {
			$pages_text = str_replace("%CURRENT_PAGE%", $paged, $pagenavi_options['pages_text']);
			$pages_text = str_replace("%TOTAL_PAGES%", $max_page, $pages_text);
			echo $before.'<div class="pageNav">'."\n";
					if(!empty($pages_text)) {
						echo '<span class="pages">'.$pages_text.'</span>';
					}					
					if ($start_page >= 2 && $pages_to_show < $max_page) {
						$first_page_text = str_replace("%TOTAL_PAGES%", $max_page, $pagenavi_options['first_text']);
						echo '<a href="'.clean_url(get_pagenum_link()).'" title="'.首页.'">'.$first_page_text.'</a>';
						if(!empty($pagenavi_options['dotleft_text'])) {
							echo '<span class="extend">'.$pagenavi_options['dotleft_text'].'</span>';
						}
					}
					previous_posts_link($pagenavi_options['prev_text']);
					for($i = $start_page; $i  <= $end_page; $i++) {						
						if($i == $paged) {
							$current_page_text = str_replace("%PAGE_NUMBER%", $i, $pagenavi_options['current_text']);
							echo '<span class="current">'.$current_page_text.'</span>';
						} else {
							$page_text = str_replace("%PAGE_NUMBER%", $i, $pagenavi_options['page_text']);
							echo '<a href="'.clean_url(get_pagenum_link($i)).'" title="'.第.$page_text.页.'">'.$page_text.'</a>';
						}
					}
					next_posts_link($pagenavi_options['next_text'], $max_page);
					if ($end_page < $max_page) {
						if(!empty($pagenavi_options['dotright_text'])) {
							echo '<span class="extend">'.$pagenavi_options['dotright_text'].'</span>';
						}
						$last_page_text = str_replace("%TOTAL_PAGES%", $max_page, $pagenavi_options['last_text']);
						echo '<a href="'.clean_url(get_pagenum_link($max_page)).'" title="'.尾页.'">'.$last_page_text.'</a>';
					}
			echo '</div>'.$after."\n";
		}
	}
}
/* end pages Navi */
?>