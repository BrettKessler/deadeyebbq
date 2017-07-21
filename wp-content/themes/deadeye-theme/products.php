<?php
/**
 * Template Name: Recipes
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div class="main-wrap" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>


		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	<?php $recipes = new WP_Query(array(
		'post_type' => 'recipes'
	)); ?>
	<div class="row">
		<?php while($recipes->have_posts())	: $recipes->the_post(); ?>
					<div class="large-4 medium-6 columns">
						<h5><?php the_title(); ?></h5>
						<div class="thumbnail">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<p><?php the_field('description'); ?></p>
					</div>
		<?php endwhile;?>
	</div>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer();