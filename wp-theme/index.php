<?php get_header(); ?>



<div id="main_container">
	<div id="feature">
		<!-- random 12 -->
	</div> <!-- feature -->

	<div id="full_grid" > 
		
			<!-- <h2>All Capstone Projects</h2> -->
					

		
					<?php 
					/* =======================
					PROJECTS
					==========================*/

					
					$bg_coin = true;
					$feature_project = true;
					$feat_howmany = 4;
					$feat_count = 0;



					$args = array( 'post_type' => 'project', 'posts_per_page' => 100, 'orderby'   =>'rand' );
					$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : 
								$loop->the_post();
							?>
							

							<?php 
							if($feature_project){
								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
								if( !$featured_img_url){
									$img_bg = get_template_directory_uri() . "/imgs/diag_w2-flip.png";
								} else {
									$img_bg = $featured_img_url;
								}
							} else {
								$img_bg_array = get_field('branding_tile_b_w');
	                            $img_bg = $img_bg_array["sizes"]["medium"];
	                            //print_r($img_bg)
							}
	                            
	                         ?>

							<a class="project_grid_link" href="<?php echo get_permalink(); ?>">
								<div class="project_grid <?php if($feature_project){ echo "feature_project";} ?> " style="background-image:url(<?php echo $img_bg; ?>);">
									
									<?php if($feature_project): ?>
										<div class="random_student_feature">random student feature</div>
									<?php endif; ?>

									<div class="project_grid_content">
										<div class="project_grid_title <?php if(strlen(get_the_title()) > 46){ echo "title_sm"; } ?>"><?php the_title(); ?></div>
										<div class="project_grid_name">By <?php the_field('student_name'); ?></div>		

										<?php if($feature_project): ?>
											<div class="feature_description"><?php the_field('short_description'); ?></div>
										<?php endif; ?>

									</div>
								</div></a>

						


							
							<?php 
								$feat_count++;
								if($feat_count >= $feat_howmany){
									$feature_project = false; 
								}
								
							endwhile;
							//} // end while
						endif;//} // end if
						
					?>
		
		
	</div> <!-- main_grid -->

</div> <!-- main_container -->
<?php get_footer(); ?>