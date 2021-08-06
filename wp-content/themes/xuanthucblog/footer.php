<footer id="footer">
			<div class="footer-logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png"></a>
			</div><!-- end .footer-logo -->
			<div class="footer-content">
				<div class="linked">
					<?php    /**
						* Displays a navigation menu
						* @param array $args Arguments
						*/
						$args = array(
							'theme_location' => 'linked-menu',
							'container' => false
						);
					
						wp_nav_menu( $args ); ?>
				</div>
				<div class="footer-info">
					XuanThuc Blog Copyright© 2013 - Chuyên trang chia sẻ kiến thức về Thiết Kế Web và Lập Trình Ứng Dụng<br>
					<em>(Nếu copy bất kỳ bài viết nào trên XuanThuc Blog vui lòng để lại nguồn để tôn trọng tác giả)</em>
				</div>
			</div><!-- end .footer-content -->
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>