<html>
<title>Frontier: 2020 ISUGD Senior Show</title>
<head>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164252401-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-164252401-1');
	</script>





	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" media="screen and (min-width: 1500px)" href="<?php echo get_template_directory_uri(); ?>/widescreen.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script>
		

		$(document).ready(function(){
			
		});
	</script>

</head>

<body>

	<div id="container">
		<div id="header">

			<div id="site_title"><a href="<?php echo get_home_url(); ?>">FRONTIER</a></div>
			<div id="site_title_sub"><a href="<?php echo get_home_url(); ?>">2020 ISUGD SENIOR SHOW</a></div>
			<div id="header_nav">
				<?php
					$args = array(
    								'hide_empty'      => false,
								);
					$all_catergories = get_categories($args); 
					//print_r($all_catergories);
				?>

				<?php foreach ($all_catergories as $key => $cat): ?>
					<?php if( $cat->slug != "uncategorized"):?>
						<a href="http://isugd.com/2020seniorshow/topics/<?php echo $cat->slug; ?>"><div class="nav_cat"><?php echo $cat->name; ?></div></a>
					<?php endif; ?>
				<?php endforeach; ?>

			</div>

		</div>