<?php get_template_part('head'); ?>
<?php get_template_part('header'); ?>
<main role="main">
	<div class="main-container">
		<?php 

        if(has_nav_menu( 'primary-menu' )){
            wp_nav_menu(array(
                'theme_location'    =>  'primary-menu',
                'container'         =>  false,
                'echo'              =>  true,
                'items_wrap'        =>  '<ul>%3$s</ul>',
                'depth'             =>  0,
            )); 
        }

        ?>
	</div>
</main>
<?php get_footer(); ?>
