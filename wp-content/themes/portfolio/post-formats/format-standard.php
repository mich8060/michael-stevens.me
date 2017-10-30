<?php get_template_part('head'); ?>
<?php get_template_part('header'); ?>
<main role="main">
	<div class="main-container">
		<div class="article">
			<div class="col-lg-12">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		    		<?php 
		    		    if(has_post_thumbnail()){
		    		        $image = get_the_post_thumbnail();
		                    $image = preg_replace('/(<[^>]+) class=".*?"/i', '$1', $image);
		                    $image = preg_replace('/(<[^>]+) width=".*?"/i', '$1', $image);
		                    $image = preg_replace('/(<[^>]+) height=".*?"/i', '$1', $image);
		                    echo $image;
		    		    } 
		    		?>
					<div class="container-md">
						<div class="article-title">
							<span class="article-date"><?php the_time('F j, Y'); ?></span>
				    		<h1><?php the_title(); ?></h1>
							<p><?php the_subtitle(); ?></p>
						</div>
					</div>
		    		<div class="container-sm">
		    			<div class="article-content">
		    				<?php the_content(); ?>
		    			</div>
		    		</div>

		    	<?php endwhile; ?>
		    	<?php else: ?>
		            <h1><?php _e('Sorry, nothing to display.',''); ?></h1>
		    	<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>