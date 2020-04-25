
<html>
<head>
	<title>ISUGD</title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
</head>
<body>



<div id="site_title">
	<div class="title_main">FRONTIER</div>
	<div class="title_sub">ON THE EDGE OF SOMETHING GREAT</div>
	<div class="title_sub">2020 ISUGD SENIOR SHOW</div>
	<div class="title_sub_sm"><span class="higlight-1">LIVE WEBINAR EVENT: MAY 5-7, 2020</span> | STAY TUNED FOR DETAILS</div>
</div>

<div id="main_container">

	<?php
	$photo_dir = "/images/home_promo_tiles/";
	$dir    = get_template_directory() . $photo_dir;
	$tiles = scandir($dir);

	for($i = 0; $i<200; $i++){
		$randnum = rand(2, count($tiles)-1);
		$rand_pic = $tiles[$randnum];
		$file_path = get_template_directory_uri() . $photo_dir . $rand_pic;
		echo  "<div class='home_promo_tile'><img src='$file_path'/></div>";

	}

	?>

</div><!-- main_container -->

</body>
</html>