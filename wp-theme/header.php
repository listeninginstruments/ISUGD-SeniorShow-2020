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
	<link rel="stylesheet" media="screen and (min-width: 1500px)" href="<?php echo get_template_directory_uri(); ?>/screen-wide.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" href="<?php echo get_template_directory_uri(); ?>/screen-narrow.css">
	<link rel="stylesheet" media="screen and (max-width: 1000px)" href="<?php echo get_template_directory_uri(); ?>/screen-small.css">


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script>
		
		var topics_showing = false;

		var vw = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
		var topic_nav_h;
		var container_top;


		



		$(document).ready(function(){

				// -------------------------------------------------------------------------------------------| Locks student in on scroll on project page |
			if($('#student_info').length){ // this will only be on single-project pages
				var stickyTop = $('#student_info').offset().top;
				$( window ).resize(function() {
				  stickyTop = $('#student_info').offset().top;
				});
			
			  $(window).scroll(function() {
  	
			    var windowTop = $(window).scrollTop();
			    // -------------------------------------------------------------------------------------------| fun BG image sizing on project page |
			    var bg_num = 10-(windowTop/500);
			    if(bg_num < 1) bg_num = 1; 
			    $("html").css({"background-size":bg_num+"vw " + bg_num+"vw"});

			    //if (stickyTop < windowTop && $(".blue").height() + $(".blue").offset().top - $(".sticky").height() > windowTop) {
			    //if(windowTop >= stickyTop - ($("#header").height() * 2)){
			    	
			    if(windowTop > $("#project_hero").offset().top + $("#project_hero").height() - $("#header").height()){
			      $('#student_info').css({'position':'fixed', 'top':$("#header").height(), 'transition':"all 0s"});
			    } else {
			      $('#student_info').css({'position':'relative', 'top':"0vw"});
			    }
			  });

			 }



			 	// -------------------------------------------------------------------------------------------| topics link show / hide |

			$("#topic_link").click(function(){

				vw = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

				if(vw < 1000){
					topic_nav_h = "48vw"; //8vw each * 6 () 12 nav itmes / 2
					container_top = "57vw";
				} else {
					topic_nav_h = "12vw";
					container_top = "21vw";
				}

				if(topics_showing){
					$("#topics_nav").css("height", "0vw");
					$("#main_container").css("top", "9vw");
					$("#project_container").css("top", "9vw");
					$("#topic_link").css("background-color", "#ff014a");
				} else {
					$("#topics_nav").css("height", topic_nav_h);
					$("#main_container").css("top", container_top);
					$("#project_container").css("top", container_top);
					$("#topic_link").css("background-color", "#000000");
				}
				topics_showing = !topics_showing;
			})
		});


	</script>

</head>

<body>

	<div id="container">
		<div id="header">
			
			<a href="<?php echo get_home_url(); ?>">
			<div id="site_logo" class="header_link">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/frontier-header-logo-white.png"/>
			</div>
			</a>
			<a href="#" id="topic_link"><div class="header_link header_link_txt">CAPSTONE TOPICS</div></a>
			<a href="http://isugd.com/2020seniorshow/virtual-frontier/panels/"><div class="header_link header_link_txt">THE LIVE WEBINAR</div></a>
			<a href="http://isugd.com/2020seniorshow/about/"><div class="header_link header_link_txt">ABOUT FRONTIER</div></a>

			<div id="topics_nav">
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