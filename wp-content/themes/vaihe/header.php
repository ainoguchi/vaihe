<!DOCTYPE html>
<html lang="ja">
<meta charset="<?php bloginfo('charset'); ?>" >
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta content="width=device-width,initial-scale=1.0,user-scalable=yes" name="viewport">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" >
<link rel="stylesheet" href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/css/bootstrap.min.css" type="text/css" media="screen" >
<link rel="stylesheet" href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/css/style.css" type="text/css" media="screen" >
<link rel="stylesheet" href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/css/lity.min.css" type="text/css" media="screen" >
<link rel="stylesheet" href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/css/mailform.css" type="text/css" media="screen" >
<link rel="stylesheet" href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/css/jquery.datetimepicker.css" type="text/css" media="screen">

<script src='<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/jquery-3.5.1.min.js'></script>
<script src='<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/scroll.js'></script>
<script src='<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/box-animaion.js'></script>
<script src='<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/menu.js'></script>
<script src='<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/lity.min.js'></script>
<script src='<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/page-top.js'></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!-- [if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170465915-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170465915-1');
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="header_nav">
			<div class="container">
				<div class="header_navInner">
					<h2><a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/logo.png" alt="" class="brand_logo"></a></h2>
					<ul class="navigation_pc">
						<li><a href="<?php echo esc_url( get_home_url() ); ?>">Home</a></li>
						<li><a href="<?php echo esc_url( get_home_url() ); ?>/work">Works</a></li>
						<li><a href="<?php echo esc_url( get_home_url() ); ?>/about">About</a></li>
						<li><a href="<?php echo esc_url( get_home_url() ); ?>/blog">Blog</a></li>
						<li><a href="<?php echo esc_url( get_home_url() ); ?>/gallery">Gallery</a></li>
						<li><a href="<?php echo esc_url( get_home_url() ); ?>/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="header_navSp">
			<div class="header_navInner">
				<h2><a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/logo.png" alt="" class="brand_logo"></a></h2>
			</div>

			<div class="el_humburger">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			</div>
    
			<div id="navigation" class="navigation" style="opacity: 0;">
				<div class="navigation_screen">
				<nav>
					<div class="navigation_item"><a href="<?php echo esc_url( get_home_url() ); ?>">Home</a></div>
					<div class="navigation_item"><a href="<?php echo esc_url( get_home_url() ); ?>/work">Works</a></div>
					<div class="navigation_item"><a href="<?php echo esc_url( get_home_url() ); ?>/about">About</a></div>
					<div class="navigation_item"><a href="<?php echo esc_url( get_home_url() ); ?>/blog">Blog</a></div>
					<div class="navigation_item"><a href="<?php echo esc_url( get_home_url() ); ?>/gallery">Gallery</a></div>
					<div class="navigation_item"><a href="<?php echo esc_url( get_home_url() ); ?>/contact">Contact</a></div>
				</nav>
				</div>
			</div>
		</div>

		</div>

	</header>