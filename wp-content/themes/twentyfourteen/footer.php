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
						<li>
							<span class="line-1">Tư vấn về nấm lim xanh</span><br/>
							<span class="line-2">Hãy liên hệ ngay với chúng tôi</span>
						</li>
						<li><a href="#">
							Tổng đài tư vấn <br>
							<span>04.3797.0138</span>
						</a></li>
						<li><a href="#">
							Dược sỹ Dung <br>
							<span> 0936.476.588</span>
						</a></li>
						<li><a href="#">
							Dược sỹ Hoa <br>
							<span>0919.257.838</span>
						</a></li>
						<li><a href="#">
							Hỗ trợ hậu mãi<br>
							<span>04.85878602</span>
						</a></li>
						
					</ul>
				</div>
				<div class="block-angency">
					<ul>
						<li lang="#tab1" class="active">Đại lý Miền Bắc <span class="arrow-left"></span></li>
						<li lang="#tab2">Đại lý Miền Trung <span class="arrow-left"></span></li>
						<li lang="#tab3">Đại lý Miền Nam <span class="arrow-left"></span></li>
					</ul>
					<div class="tab-content">
						<div id="tab1" class="active">Miên Bắc</div>
						<div id="tab2">Miền Trung</div>
						<div id="tab3">Miền Nam</div>
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
						<p>CÔNG TY TNHH NẤM LIM XANH VIỆT NAM</p>
						<p>(VIETNAM GREEN IRONWOOD'S MUSHROOM CO.,LTD)</p>
						<p>Giấy ĐKKD: 4005995598 ngày 26/10/2012 cấp tại Sở KH&ĐT Quảng Nam</p>
						<p>Địa chỉ: Tổ 5 - Xã Tiên Hiệp - Huyện Tiên Phước - Tỉnh Quảng Nam</p>
						<p>Tổng phân phối Nấm lim xanh tự nhiên Tiên Phước trên toàn quốc.</p>
						<?php // do_action( 'twentyfourteen_credits' ); ?>
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>
		</div><!-- .footer-container -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>