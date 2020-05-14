<?php get_header(); ?>



<div id="main_container">
	<div id="feature">
		<!-- random 12 -->
	</div> <!-- feature -->

	<div id="full_grid" > 
		<?php $category = get_queried_object();?>
		
		<div class="category_title">
			Graphic Design capstone projects exploring the frontiers of <span class="category_name"><?php echo $category->name;?></span>
		</div>
			
			
			


					<?php 
					/* =======================
					PROJECTS
					==========================*/

					
					$args = array( 'post_type' => 'project', 'cat'=> $category->term_id,'posts_per_page' => 100 );
					$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : 
								$loop->the_post();
							?>
							

							<?php 
	                            $img_bg_array = get_field('branding_tile_b_w');
	                            $img_bg = $img_bg_array["sizes"]["medium"];

	                         ?>

	                         <!--
							<a class="project_grid_link" href="<?php echo get_permalink(); ?>">
								<div class="project_grid" style="background-image:url(<?php echo $img_bg; ?>);">
									<div class="project_grid_content">
										<div class="project_grid_title <?php if(strlen(get_the_title()) > 46){ echo "title_sm"; } ?>"><?php the_title(); ?></div>
										<div class="project_grid_name">By <?php the_field('student_name'); ?></div>		
									</div>
								</div>
							</a>
							-->



							<a class="category_project_link" href="<?php echo get_permalink(); ?>"> 
								
								<div class="category_project" style="background-image:url(<?php the_post_thumbnail_url("large"); ?>);">

									<div class="category_project_header" style="background-image:url(<?php echo $img_bg; ?>);">
										<div class="category_project_title">
											<?php the_title(); ?>
										</div>
										<div class="project_category_student_name">By <?php the_field('student_name'); ?></div>	
									</div>
									

									<div class="project_category_description"><?php the_field('short_description'); ?></div>	



								</div>
							</a>
						


							
							<?php 
							endwhile;
							//} // end while
						endif;//} // end if
						
					?>
			
		<div class="category_title">
			<span class="category_name">All</span> Graphic Design capstone projects
		</div>


				<?php 
					/* =======================
					ALL PROJECTS
					==========================*/

					
					$bg_coin = true;
					$args = array( 'post_type' => 'project', 'posts_per_page' => 100, 'orderby'   =>'rand' );
					$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : 
								$loop->the_post();
							?>
							

							<?php 
	                            $img_bg_array = get_field('branding_tile_b_w');
	                            $img_bg = $img_bg_array["sizes"]["medium"];
	                            //print_r($img_bg)
	                         ?>

							<a class="project_grid_link" href="<?php echo get_permalink(); ?>">
								<div class="project_grid" style="background-image:url(<?php echo $img_bg; ?>);">
									<div class="project_grid_content">
										<div class="project_grid_title <?php if(strlen(get_the_title()) > 46){ echo "title_sm"; } ?>"><?php the_title(); ?></div>
										<div class="project_grid_name">By <?php the_field('student_name'); ?></div>		
									</div>
								</div>
							</a>

						


							
							<?php 
							endwhile;
							//} // end while
						endif;//} // end if
						
					?>
		
	</div> <!-- main_grid -->

</div> <!-- main_container -->
<?php get_footer(); ?>