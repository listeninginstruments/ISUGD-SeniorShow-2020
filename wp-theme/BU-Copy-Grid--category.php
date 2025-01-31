<?php get_header(); ?>



<div id="main_container">
	<div id="feature">
		<!-- random 12 -->
	</div> <!-- feature -->

	<div id="full_grid" > 
		<?php $category = get_queried_object();?>
		
		<div class="category_title">
			All Capstone Projects Filed Under 
			<div class="category_title_label"><?php echo $category->name;?></div>
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

							<a class="project_grid_link" href="<?php echo get_permalink(); ?>">
								<div class="project_grid" style="background-image:url(<?php echo $img_bg; ?>);">
									<div class="project_grid_content">
										<div class="project_grid_title <?php if(strlen(get_the_title()) > 46){ echo "title_sm"; } ?>"><?php the_title(); ?></div>
										<div class="project_grid_name">By <?php the_field('student_name'); ?></div>		
									</div><!-- project_grid_content -->	
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