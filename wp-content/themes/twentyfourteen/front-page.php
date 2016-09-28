<?php
/*
	Travel Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>

<?php get_header(); ?>

<div id="container">
	<!--Block Cong dung-->
	<div class="col-1 block-congdung block">
		<div class="block-content">
			<?php
				$args1 = array(
					'category__in' => array(4),
					'order'   => 'ASC',
					'posts_per_page' => 4
				);
				echo CustomQuery($args1,'featured-post','featured-post-first');
			?>
		</div>
	</div>
	
	<!--Block Cach dung-->
	<div class="col-1 block-cachdung">
		<div class="block-content">
			<h2 class="title"><span>Cách sử dụng nấm lim xanh</span></h2>
			<ul>
			<?php
				$args2 = array(
					'category__in' => array(5),
					'order'   => 'ASC',
					'posts_per_page' => 6
				);
				echo CustomQuery($args2,'listTitle');
			?>
			</ul>
		</div>
	</div>
	
	<!--Block san pham-->
	<div class="col-1">
		<div class="block-content">
			<ul class="list-products">
				<?php
					$args_products = array(
						'category__in' => array(3),
						'orderby'   => 'meta_value_num',
						'meta_key'  => 'price_product',
						'order'   => 'ASC',
					);
					$a = CustomQuery($args_products,'listproducts');
					echo $a;
				?>
			</ul>
		</div>
	</div>
	
	<!--Block -->
	<div class="block-hoidap">
		<div class="block-content">
			<div class="content">
				<?php
					$args4 = array(
						'category__in' => array(8),
						'order'   => 'ASC',
						'posts_per_page' => 4
					);
					$a = CustomQuery($args4,'featured-post','featured-post-first');
					echo $a;
				?>
			</div>
		</div>
	</div>
	
	<!--Block Mua ban-->
	<div class="block-muaban">
		<div class="block-content">
			<h2 class="title"><span>Mua bán nấm lim xanh</span></h2>
			<div class="content">
				<?php
					$args2 = array(
						'category__in' => array(6),
						'order'   => 'ASC',
						'posts_per_page' => 6
					);
					$a = CustomQuery($args2,'featured-post','featured-post-first');
					echo $a;
				?>
			</div>
		</div>
	</div>
	
	<!--Block Benh ly-->
	<div class="block-benhly">
		<div class="block-content">
			<h2 class="title"><span>Bệnh lý</span></h2>
			<div class="content">
				<?php
					$args3 = array(
						'category__in' => array(7),
						'order'   => 'ASC',
						'posts_per_page' => 6
					);
					$a = CustomQuery($args3,'featured-post','featured-post-first');
					echo $a;
				?>
			</div>
		</div>
	</div>
	
</div>
<?php // get_sidebar(); 
	//get_sidebar( 'content' ); 
//get_sidebar();
?>

<?php get_footer(); ?>
