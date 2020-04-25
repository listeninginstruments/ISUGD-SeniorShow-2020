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
                        </div>       <!-- project_content -->             
                        <?php 
                        //
                    } // end while
                } // end if
            ?>

<style>
    html{
        background: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } ?>) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

            


</div> <!-- main_container -->
<?php get_footer(); ?>