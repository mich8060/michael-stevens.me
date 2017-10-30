<?php get_template_part('head'); ?>
<?php get_template_part('header'); ?>
<main role="main">
	<div class="main-container">
		<div class="container-xs">
	        <h1><?php single_cat_title(); ?></h1>
			<?php 
		        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
		        $args = array(
	                'post_type' => 'post',
	                'posts_per_page' => 5,
	                'paged' => $page,
	            );
		        query_posts($args);
		        get_template_part('loop');
		        get_template_part('pagination');
		        wp_reset_query();
		    ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>