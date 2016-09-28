<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php 
	$title = get_the_title();
	//cutString($title,40);
?>
<li>
	<a title="<?php the_title(); ?>" href="<?php echo  esc_url( get_permalink() )?> "> <?php echo $title?></a>
</li>
