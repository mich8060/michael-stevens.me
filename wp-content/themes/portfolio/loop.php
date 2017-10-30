<?php if(have_posts()): while (have_posts()) : the_post(); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="listing" slug="<?php echo str_replace(home_url(),'',get_permalink()); ?>">
		<?php 
		    if(has_post_thumbnail()){
		        $image = get_the_post_thumbnail();
                $image = preg_replace('/(<[^>]+) class=".*?"/i', '$1', $image);
                $image = preg_replace('/(<[^>]+) width=".*?"/i', '$1', $image);
                $image = preg_replace('/(<[^>]+) height=".*?"/i', '$1', $image);
                echo $image;
		    } 
		?>
		<span class="date"><?php the_time('F j, Y'); ?></span>
		<h1><?php the_title(); ?></h1>
		<p><?php the_excerpt(); ?></p>
	</a>
<?php endwhile; ?>
<?php else: ?>
    <h2><?php _e('Sorry, nothing to display.',''); ?></h2>
<?php endif; ?>
