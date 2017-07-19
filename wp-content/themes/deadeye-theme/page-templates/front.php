<?php
/*
Template Name: Front
*/
get_header(); ?>
<!-- this is the orbit area -->
<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
  <ul class="orbit-container">
    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
   	<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
    
    <?php 

		$posts = get_posts('category_name=slider-images');
		foreach ($posts as $post ){
		$post_title = $post -> post_title;
		$post_url = get_permalink($post->post_ID);
		$post_content = $post -> post_content;

		echo'<li class="is-active orbit-slide"><div class="docs-example-orbit-slide">';
		echo $post_content;
		echo '</div></li>';
	}
	?>
  </ul>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>

<nav aria-label="You are here:" role="navigation">
</nav>
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
<div id="tab-container"><?php echo do_shortcode("[TABS_R id=39]"); ?></div>
<div class="flex-card-example recipe">
	<div class="card">
		<img src="https://placeimg.com/300/200/people">
		<div class="card-content">
			<h4>Featured Product</h4>
			<p>Featured Product</p>
			<a href="#" class="button">Click for more information</a>
		</div>
	</div>
	<div class="card">
		<img src="https://placeimg.com/300/200/people">
		<div class="card-content">
			<h4>Recipe Name</h4>
			<p>Recipe Explanation</p>
			<a href="#" class="button">Click for recipe</a>
		</div>
	</div>
</div>
<div class="row" id="video-container">
	<div class="flex-video medium-4 columns responsive-embed">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ABWs11ZxyCk" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="flex-video small-4 columns responsive-embed">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ABWs11ZxyCk" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="flex-video small-4 columns responsive-embed">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ABWs11ZxyCk" frameborder="0" allowfullscreen></iframe>
	</div>

</div>
<?php get_footer();
