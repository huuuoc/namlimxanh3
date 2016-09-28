<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
				<div class="block-support">
					<ul>
						<li><a href="#">
							Tổng đài tư vấn <br>
							<span  class="phone">04.3797.0138</span>
						</a></li>
						<li><a href="#">
							Dược sỹ Dung <br>
							<span  class="phone"> 0936.476.588</span>
						</a></li>
						<li><a href="#">
							Dược sỹ Hoa <br>
							<span  class="phone">0919.257.838</span>
						</a></li>
						<li><a href="#">
							Hỗ trợ hậu mãi<br>
							<span class="phone">04.85878602</span>
						</a></li>
						
					</ul>
				</div>
				<div class="block-angency">
					<ul>
						<li lang="#tab1" class="active">Đại lý Miền Bắc </li>
						<li lang="#tab2">Đại lý Miền Trung </li>
						<li lang="#tab3">Đại lý Miền Nam </li>
					</ul>
					<div class="tab-content">
						<div id="tab1" class="active">
							<ul>
								<?php
									$args2 = array(
										'category__in' => array(9),
										'order'   => 'ASC'
									);
									echo CustomQuery($args2,'listTitle');
								?>
							</ul>
						</div>
						<div id="tab2">
							<ul>
								<?php
									$args2 = array(
										'category__in' => array(10),
										'order'   => 'ASC'
									);
									echo CustomQuery($args2,'listTitle');
								?>
							</ul>
						</div>
						<div id="tab3">
							<ul>
								<?php
									$args2 = array(
										'category__in' => array(11),
										'order'   => 'ASC'
									);
									echo CustomQuery($args2,'listTitle');
								?>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- #main -->
			</div><!-- .main -->
		</div><!-- .main-container -->
		<div class="footer-contaier">
			<div class="footer">
				<footer id="colophon" class="site-footer" role="contentinfo">

					<?php get_sidebar( 'footer' ); ?>

					<div class="site-info">
						<div class="footer-left"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-nam-lim-xanh.png"  atl="Nấm lim xanh" /></div>
						<div class="footer-right">
							<p class="name-company">Công Ty TNHH Nông Lâm Sản Tiên Phước - Nấm Lim Xanh Từ Rừng Nguyên Sinh</p>
							<p><span class="lfloat">Liên hệ : 04.3797.0138 - 0936.476.588</span> <span class="rfloat">Trụ sở: 158/149 Hồ Tùng Mậu - Nam Từ Liêm - Hà Nội</span></p>
							<p><span class="lfloat">Email: <a href="mailto:nonglamsantienphuoc@gmail.com">nonglamsantienphuoc@gmail.com</a></span><span class="rfloat">Website : <a href="nonglamsantienphuc.com">www.nonglamsantienphuc.com</a></span></p>
							<p><span class="lfloat">Xí nghiệp 1: Huyện Tiên Phước - Tỉnh Quảng Nam</span> <span class="rfloat">Xí nghiệp 2: Phú Mỹ - Nam Từ Liêm - TP.Hà Nội</span></p>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>
		</div><!-- .footer-container -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>