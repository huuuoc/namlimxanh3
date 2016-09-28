<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<?php  twentyfourteen_post_thumbnail(); ?>
	<div>
		<?php 
			$title = get_the_title(); 
			cutString($title, 87);
		?>
		<h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"> <?php echo $title; ?></a></h2>
	</div>
</article><!-- #post-## -->
