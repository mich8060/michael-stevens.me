<?php get_template_part('head'); ?>
<?php get_template_part('header'); ?>
<?php //get_sidebar(); ?>
<main role="main">
	<div class="container-xs">
		<h1>
		<?php 
			echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); 
			echo "&ldquo;";
			echo get_search_query(); 
			echo "&rdquo;";
		?>
		</h1>
		<?php get_template_part('loop'); ?>
		<?php get_template_part('pagination'); ?>
	</div>
</main>
<?php get_footer(); ?>

