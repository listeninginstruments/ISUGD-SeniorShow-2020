<?php get_header(); ?>



<div id="feature">
	<!-- random 12 -->
</div> <!-- feature -->

	<div id="full_grid" > 
		
		<h2>All Seniors</h2>

					<?php 
					/* =======================
					PROJECTS
					==========================*/
					$args = array( 'post_type' => 'project', 'posts_per_page' => 100 );
					$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : 
								$loop->the_post();
							?>
							<a href="<?php echo get_permalink(); ?>">

							<div class="grid_project">
								
								
								<?php if ( has_post_thumbnail() ) :  ?>
									<div class="grid_project_image" 
									style="background-image:url(<?php the_post_thumbnail_url('medium'); ?>)">
										
									</div>
								<?php endif; ?>

								<h4 class="project_item_title"><?php the_title(); ?></h4>

								<!-- student name -->

								
							</div>

						
						


							
							<?php 
							endwhile;
							//} // end while
						endif;//} // end if
					?>

		
	</div> <!-- main_grid -->
<?php get_footer(); ?>