<?php
/*
Template Name: Front
*/
get_header(); ?>
<ul class="breadcrumbs">
    <li><a href="#0">Home</a></li>
    <li><a href="#0">About Us</a></li>
    <li><a href="#0">Products</a></li>
    <li><a href="#0">Locations</a></li>
    <li><a href="#0">Recipes</a></li>
  </ul>
<div>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/frontpageimages/DSC_5227.JPG" alt="customizable">
</div>
<nav aria-label="You are here:" role="navigation">
</nav>
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>


<section class="benefits">
	<header>
		<h2>Build Foundation based sites, powered by WordPress</h2>
		<h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4>
	</header>

	<div class="semantic">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/semantic.svg" alt="semantic">
		<h3>Semantic</h3>
		<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
	</div>

	<div class="responsive">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/responsive.svg" alt="responsive">
		<h3>Responsive</h3>
		<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

	</div>

	<div class="customizable">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/customizable.svg" alt="customizable">
		<h3>Customizable</h3>
		<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>

	</div>

	<div class="professional">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/professional.svg" alt="professional">
		<h3>Professional</h3>
		<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
	</div>
</section>
<div class="flex-card-example">
	<div class="card">
		<img src="https://placeimg.com/300/200/people">
		<div class="card-content">
			<h4>Recipe Name</h4>
			<p>Recipe Explanation</p>
			<a href="#" class="button">Click for recipe</a>
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
	<div class="card">
		<img src="https://placeimg.com/300/200/people">
		<div class="card-content">
			<h4>Recipe Name</h4>
			<p>Recipe Explanation</p>
			<a href="#" class="button">Click for recipe</a>
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
<div class="row">
	<div class="flex-video medium-3 columns responsive-embed">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ABWs11ZxyCk" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="flex-video small-3 columns responsive-embed">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ABWs11ZxyCk" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="flex-video small-3 columns responsive-embed">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ABWs11ZxyCk" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="flex-video small-3 columns responsive-embed">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ABWs11ZxyCk" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<section>
	<p><a class="button center" data-open="exampleModal1">Click Here For a Coupon Code!</a></p>
	<div class="reveal" id="exampleModal1" data-reveal>
	  <h1>Awesome. I Have It.</h1>
	  <p class="lead">Your couch. It is mine.</p>
	  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
	  <button class="close-button" data-close aria-label="Close reveal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
</section>
<?php get_footer();
