<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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
<?php while ( have_posts() ) : the_post(); ?>

<div class="post" style="background-image:url(<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 230,270 ), false, '' ); echo $src[0]; ?>
); background-size:cover;">

	<div class="rating"><?php if(function_exists('the_ratings')) { the_ratings(); } ?><!-- &diams; &diams; &diams; &diams; &diams; --></div>
	
	<div class="postinfo">
		<h2 class="post-title"><span class="brack">&#123;</span> <?php the_title();?> <span class="brack">&#125;</span></h2>
		
		<div class="linkbtn">&rarr;</div>
		<div class="cat">Category</div>
		
	</div><!-- END Post Info -->
	
</div><!-- END Post -->




	
<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
</div> <!-- END grid container -->


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>