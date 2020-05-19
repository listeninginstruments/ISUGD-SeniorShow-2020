<?php get_header(); ?>

 <?php 
            
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            //
            ?>
<div id="main_container">
   
        <h1><?php the_title(); ?></h1>
            <div id="page_content">  
                <?php the_content(); ?>    


                <strong>All 2020 Frontier Seniors</strong>
                <br><br>

                    <?php 
                    /* =======================
                    PROJECTS
                    ==========================*/

                    
                    $args = array(  
                                'post_type'         => 'project', 
                                'posts_per_page'    => 100, 
                                'meta_key'          => 'student_name',
                                'orderby'           => 'meta_value',
                                'order'             => 'ASC'
                                );

                    $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : 
                                $loop->the_post();
                            ?>
                            
                            <div class="about_student">
                                <div class="about_student_name"> <?php the_field('student_name'); ?> </div>
                                <div class="about_student_project_link"> <a href="<?php echo get_permalink(); ?>">View <?php the_field('student_name'); ?>'s Capstone Project </a></div>
                                 <?php if (get_field('portfolio_website_link') != null): ?> 
                                        <div class="about_student_info_field"><a href="<?php the_field('portfolio_website_link'); ?>" target="_blank">Portfolio Website</a></div>
                                 <?php endif; ?>

                                <?php if (get_field('instagram_handle') != null): ?> 
                                    <div class="about_student_info_field">Instagram: <a href="https://www.instagram.com/<?php echo get_field('instagram_handle'); ?>" target="_blank">@<?php echo get_field('instagram_handle'); ?></a></div>
                                <?php endif; ?>

                                <?php if (get_field('twitter_handle')): ?> 
                                    <div class="about_student_info_field">Twitter: <a href="https://twitter.com/<?php echo get_field('twitter_handle'); ?>" target="_blank">@<?php echo get_field('twitter_handle'); ?></a></div>
                                <?php endif; ?>

                                <?php if (get_field('email_address') != null): ?> 
                                    <div class="about_student_info_field"><a href="mailto:<?php echo get_field('email_address'); ?>">Contact by Email</a></div>
                                <?php endif; ?>

                                

                                <br><br>
                            </div>

                           <?php 
                            endwhile;
                            //} // end while
                        endif;//} // end if
                        
                    ?>

                    Website by <a href="http://listeninginstruments.com/">Alex Braidwood</a>

            </div>       


            <!-- project_content -->             
                        <?php 
                        //
                    } // end while
                } // end if
            ?>




            


</div> <!-- main_container -->
<?php get_footer(); ?>