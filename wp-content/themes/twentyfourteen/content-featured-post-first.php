<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="first">
	<?php twentyfourteen_post_thumbnail(); ?>
	<div>
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
		<div class="entry-summary">
			<?php 
				$content = get_the_excerpt(); 
				cutString($content, 200);
				echo $content;
			?>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-## -->
