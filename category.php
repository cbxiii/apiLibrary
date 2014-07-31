<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/left-nav' ) ); ?>


<div class="gridcontainer">
<?php if ( have_posts() ): ?>
<h2><span class="search-term"><?php echo single_cat_title( '', false ); ?></span></h2> <br/>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="post" style="background-image:url(<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 230,270 ), false, '' ); echo $src[0]; ?>
); background-size:cover;">

	<div class="overlay"><?php the_excerpt(); ?></div>

	<div class="rating"><?php if(function_exists('the_ratings')) { the_ratings(); } ?><!-- &diams; &diams; &diams; &diams; &diams; --></div>
	
	<div class="postinfo">
		<h2 class="post-title"><span class="brack">&#123;</span> <?php the_title();?> <span class="brack">&#125;</span></h2>
		
		<div class="linkbtn">&rarr;</div>
		<div class="cat"><?php the_category(); ?></div>
		
	</div><!-- END Post Info -->
	
</div><!-- END Post -->


<?php endwhile; ?>

<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>
</div><!-- END grid container -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>