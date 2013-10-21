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

<div class="post">
	
	<div class="postinfo">
		<?php the_title();?>
	</div><!-- END Post Info -->
	
</div><!-- END Post -->





	
<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
</div> <!-- END grid container -->


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>