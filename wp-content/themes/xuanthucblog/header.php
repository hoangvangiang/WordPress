<html lang="vi-VN">
	<head>
		<meta charset="UTF-8" />
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta name="robots" content="noodp, noydir" />
		<meta http-equiv="X-UA-Compatible" content="IE=9">
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/normalize.min.css" /> <!--Reset CSS-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" media="screen and (min-width: 18.750em)" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/small-tablet.css" media="screen and (min-width: 600px)" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/tablet.css" media="screen and (min-width: 768px)" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/desktop.css" media="screen and (min-width: 1024px)" />

        <!--Chèn jQuery-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <!--End jQuery-->

        <!--Chèn javascript-->
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
		<?php wp_head(); ?>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46868339-1', 'xuanthuc.com');
  ga('send', 'pageview');

</script>

<!-- ad google -->
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/76448725/buttom-posts', [728, 90], 'div-gpt-ad-1393097217404-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<!-- end ad google -->
	</head>
	<body>
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"bKjYf1a8n500aO", domain:"xuanthuc.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=bKjYf1a8n500aO" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
		<div id="top-bar">
			<div class="top-bar-container">
				<div class="top-menu">
					<?php    /**
						* Displays a navigation menu
						* @param array $args Arguments
						*/
						$args = array(
							'theme_location' => 'top-menu',
							'container' => false);
						wp_nav_menu( $args ); ?>
				</div>
				<div class="search-box">
					<input type="text" placeholder="Nhập từ khóa">
					<input type="submit" value="Tìm Kiếm"> 
				</div>
			</div><!-- end top-bar-container -->
		</div><!-- end #top-bar -->
		<header id="header">
			<div class="header-container">
				<div class="site-title">
					<div class="logo">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
					</div><!-- end .logo -->
					<div class="ads-header">
						<a href="http://xuanthuc.com/huong-dan-dang-ky-nhan-bai-viet-moi-tai-xuan-thuc-blog-qua-mail.html" target="_blank" title="Hướng dẫn đăng ký nhận bài viết mới tại Xuân Thức Blog qua Mail"><img src="http://xuanthuc.com/images/banner/dang-ky-feedburner.jpg"></a>
					</div><!-- end .ads-header -->
				</div><!-- end .site-title -->
				<div class="header-menu">
					<a href="#" class="show-menu"><img src="<?php bloginfo('template_directory'); ?>/images/mobile-menu-icon.png"></a>
					<?php    /**
						* Displays a navigation menu
						* @param array $args Arguments
						*/
						$args = array(
							'theme_location' => 'header-menu',
							'container' => false);
						wp_nav_menu( $args ); ?>
				</div><!-- end .header-menu -->
			</div><!-- end .header-container -->
		</header>