<?php
/*
	Travel Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>

<?php get_header(); ?>
</div>
<?php
	$args_products = array(
		'category__in' => array(3),
		'orderby'   => 'meta_value_num',
		'meta_key'  => 'price_product',
		'order'   => 'ASC',
	);
	$my_query_products = new WP_Query( $args_products );
?>
<div id="container">
	<!-- Products -->
	<div class="col-1">
		col-1
	</div>
	<div class="col-1">
		col-2
	</div>
	<div class="col-1">
		<ul class="list-products">
			<?php
				if ( $my_query_products->have_posts() ) :
					while ( $my_query_products->have_posts() ) : $my_query_products->the_post();
						get_template_part( 'content', 'listproducts');
					endwhile;
				endif;
				//wp_reset_postdata();
			?>
		</ul>
	</div>
</div>
<?php // get_sidebar(); 
	//get_sidebar( 'content' ); 
//get_sidebar();
?>

<?php get_footer(); ?>
