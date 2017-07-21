<?php
/*
Template Name: Front
*/
get_header(); ?>
<!-- this is the orbit area -->
<div class="page-width">
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




<?php $recipes = new WP_Query(array(
	'post_type' => 'recipes',
	'posts_per_page' => '2'
)); ?>
<div class="row">
	<?php while($recipes->have_posts())	: $recipes->the_post(); ?>
				<div class="medium-6 columns">
					<h5><?php the_title(); ?></h5>
					<div class="thumbnail">
						<?php the_post_thumbnail('thumbnail'); ?>
					</div>
					<p><?php the_field('description'); ?></p>
				</div>
	<?php endwhile;?>



	<h2>Recipe Videos</h2>
	<div class="row" id="video-container">
		<div class="flex-video medium-4 columns responsive-embed">
		
			<iframe width="560" height="315" src="https://www.youtube.com/embed/kmMnOwQ--7k" frameborder="0" allowfullscreen></iframe>
	</div>
		<div class="flex-video medium-4 columns responsive-embed">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/7fE49TOcCa4" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="flex-video medium-4 columns responsive-embed">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ABWs11ZxyCk" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<a href="#" class="video-button"><span><i class="fa fa-cutlery" aria-hidden="true"></i></span> More Recipe Videos!</a>
</div>
<?php get_footer();
