<header role="banner">
    <logo><a href="<?php echo home_url(); ?>">M<span>_</span></a></logo>
	<a href="#" class="menu">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</a>
</header>
<nav class="nav" role="navigation">
	<div class="container-xs">
		<search>
	        <?php get_template_part('mainsearch'); ?>
	    </search>
		<menu>
			<h6>Explore</h6>
		    <?php 

				$nav = wp_get_nav_menu_items('primary-menu');
				foreach($nav as $n){
					$url = $n->url;
					$slug = str_replace(home_url(),'',$url);
					$title = $n->title;
					echo '<a href="'.$url.'" title="'.$title.'" slug="'.$slug.'"><span>'.$title.'</span></a>';
				}

		    ?>
			<h6>Categories</h6>
		    <?php 
		
				$categories = get_categories();
				foreach($categories as $c){
					// http://localhost:8888/wordpress/category/random/
					$slug = $c->slug;
					$url = home_url().'/category/'.$slug;
					$title = $c->name;
					echo '<a href="'.$url.'" title="'.$title.'" slug="'.$slug.'"><span>'.$title.'</span></a>';
				} 
			?>
		</menu>
	</div>
</nav>