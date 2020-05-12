<?php get_header(); ?>

<div id="project_container">
 <?php 
            
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            //
            ?>

                    <!-- CAPSTONE TITLE -->
                    <div id="project_title">
                        <?php the_title(); ?>
                    </div>

                    <div id="project_byline">
                        By <?php the_field('student_name'); ?>
                    </div>

                    <div id="project_description">
                        <?php echo get_field('short_description'); ?>
                    </div>

                    <div id="project_hero">
                        <?php
                        if ( has_post_thumbnail() ) {
                        ?>
                        <img src="<?php the_post_thumbnail_url("large"); ?>"/>
                        <?php
                        }
                        ?>
                        
                    </div> <!-- project_hero -->

                    <div id="student_info">
                        <div class="student_info_field">by <strong><?php the_field('student_name'); ?></strong></div>
                        <div class="student_info_field"><a href="<?php the_field('portfolio_website_link'); ?>" target="_blank">Portfolio Website</a></div>

                        <?php if (get_field('email_address') != null): ?> 
                            <div class="student_info_field"><a href="mailto:<?php echo get_field('email_address'); ?>">Contact by Email</a></div>
                        <?php endif; ?>

                        
                        <?php if (get_field('instagram_handle') != null): ?> 
                            <div class="student_info_field">Instagram:<br><a href="https://www.instagram.com/<?php echo get_field('instagram_handle'); ?>" target="_blank">@<?php echo get_field('instagram_handle'); ?></a></div>
                        <?php endif; ?>

                        <?php if (get_field('twitter_handle')): ?> 
                            <div class="student_info_field">Twitter:<br><a href="https://twitter.com/<?php echo get_field('twitter_handle'); ?>" target="_blank">@<?php echo get_field('twitter_handle'); ?></a></div>
                        <?php endif; ?>
                        <br><br>
                        <strong><u>Filed Under:</u></strong><br>
                        <br><br>
                        <?php
                            $categories = get_the_category( $post->ID );

                            foreach ($categories as $key => $value): 
                        ?>
                                <div class="student_info_field">
                                    <a href="http://isugd.com/2020seniorshow/topics/<?php echo $value->slug; ?>">
                                        <?php echo $value->name; ?>
                                    </a>
                                </div>
                                
                        <?php endforeach; ?>

                     

                        <!-- portfolio -->
                        <!-- instagram -->
                        <!-- twitter -->
                        <!-- email -->
                    </div><!-- student_info -->

                    <div id="project_content">            
                        <?php the_content(); ?>                        
                <?php 
                //
        } // end while
    } // end if
    ?>
            


                    <!-- USE TILED TILE -->
                    <style>
                        html{

                            <?php 
                            $img_bg_array = get_field('branding_tile_b_w');
                            $img_bg = $img_bg_array["sizes"]["medium"];
                            //print_r($img_bg)
                            ?>
                            

                            background: url('<?php echo $img_bg; ?>');
                            background-size:10vw 10vw;
                        }
                    </style>


            
        
                    </div> <!-- single_project_main -->


</div><!-- project_container -->

<?php get_footer(); ?>