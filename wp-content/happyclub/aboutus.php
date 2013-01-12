<?php
/*
* Template Name: Aboutus Page
Theme URI: http://www.happycameraclub.com
Description: A Photography blog
Version: 1.0
Author: Axisfusion.org
Author URI: http://www.axisfusion.org
*/
get_header(); ?>
    <script>
	
	  // When the document loads do everything inside here ...
	  $(document).ready(function(){
		
		// When a link is clicked
		$("a.tab").click(function () {
			
			
			// switch all tabs off
			$(".active").removeClass("active");
			
			// switch this tab on
			$(this).addClass("active");
			
			// slide all content up
			$(".content").slideUp();
			
			// slide this content up
			var content_show = $(this).attr("title");
			$("#"+content_show).slideDown();
		  
		});
	
	  });
  </script>
<?php while ( have_posts() ) : the_post(); ?>
  <!-- Header Slide image Starts -->
  <div class="slider-wrap innerheader"> <img src="<?php bloginfo('template_directory'); ?>/images/about.jpg">
    <div class="titleTxt">
      <h4>About Us</h4>
    </div>
  </div>
  <!-- Header Slide image Ends --> 
  
  <!-- Main Content Starts -->
  <div class="content-wrap bg_shadow">
    <div class="container"> 
      <!-- Left Content Home Starts -->
      <div class="container_three_forth border_right"> 
        <!--First Three Columns Starts-->
       		
            
            
        <div id="tabbed_box_1" class="tabbed_box">
    <div class="tabbed_area">
        <ul id="menu">
            <li><a href="#" title="content_1" class="tab"><span>Beginnings</span></a></li>
            <li><a href="#" title="content_2" class="tab"><span>Team</span></a></li>
            <li><a href="#" title="content_3" class="tab"><span>Why Donate</span></a></li>
            <li><a href="#" title="content_4" class="tab"><span>Testimonials</span></a></li>
            <li><a href="#" title="content_5" class="tab"><span>Special Projects</span></a></li>
		</ul>
        <div style="height:60px;"></div>
        <div id="content_1" class="content">
        	<div class="beginnings">
             <?php 
	$args=array('category__in' => array(15),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 1,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
            	<div class="beginnings_copy"><?php the_content(); ?>
                <?php  $i++; endwhile; ?>  
                <div style="height:20px;" ></div>
            </div>
        </div>
        <div id="content_2" class="content">
			<div class="person">	
            <?php 
	$args=array('category__in' => array(16),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>		
                <div class="team_img"><?php  if ( has_post_thumbnail() ) the_post_thumbnail(); ?></div>
                <h2 style="color:#f74e3c;"><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                <div class="social"><a href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png"><a href="#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png"></a></div>
                <div class="clear"></div>
                <?php  $i++; endwhile; ?>  
            </div>
            <p class="line"></p>
            </div>
          <div id="content_3" class="content">
        	<div class="beginnings">
            	<div class="beginnings_copy_2">
                                    <?php 
	$args=array('category__in' => array(17),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 1,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
                	<h1><?php the_title(); ?></h1><?php the_content(); ?><?php  if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
                <div style="height:20px;" ></div>
                <?php  $i++; endwhile; ?> 
            </div>
        </div>
            
        <div id="content_4" class="content">
        	<div class="testimor">
                              <?php 
	$args=array('category__in' => array(18),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
            	<div class="testimor_box"><?php the_content(); ?>
                <p>~<?php the_title(); ?></p>
                </div>
                <div class="line_test" ></div>
                <?php  $i++; endwhile; ?>  
            </div>
        </div>
            
     <div id="content_5" class="content">
   
        	<div class="special_proj">
                    <?php 
	$args=array('category__in' => array(19),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
            	<div class="box">
                    
                	<h2><?php the_title(); ?></h2>
                    <?php  if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
                    <p><?php the_content(); ?></p>
                    <span><img src="<?php bloginfo('template_directory'); ?>/images/more.png"></span>
                </div>
                 	<?php  $i++; endwhile; ?>  
            </div>
            
        </div>
    
    </div>
</div>
        
        
        
      </div>
      <!-- Left Content Home Ends --> 
      
 <?php get_sidebar(faq); ?>
    </div>
  </div>
  <!-- Main Content Ends --> 
  
</div>
<!--Page wrap Ends-->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>