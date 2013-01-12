<?php
/*
* Template Name: Faq Page
Theme URI: http://www.happycameraclub.com
Description: A Photography blog
Version: 1.0
Author: Axisfusion.org
Author URI: http://www.axisfusion.org
*/
get_header(); ?>
  <!-- Header Slide image Starts -->
    <div class="slider-wrap innerheader">
    	<img src="<?php bloginfo('template_directory'); ?>/images/header_faqs.jpg">
    	<div class="titleTxt">
        	<h4>FAQs</h4>
        </div>
    </div>
  <!-- Header Slide image Ends -->
  <!-- Main Content Starts -->
  <div class="content-wrap bg_shadow">
    <div class="container"> 
      <!-- Left Content Home Starts -->
      <div class="container_three_forth border_right"> 
        <!--First Three Columns Starts-->
        <section class="service-columns clearfix">
        <h1 >FAQs</h1>
           <?php 
	$args=array('category__in' => array(12),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 6,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
        <div class="faqdiv sep_hor">
        
        <p class="question"><span></span><?php the_title(); ?></p>
            <div class="answer"><p><?php the_content(); ?></p></div>
            
        </div>
        <?php  $i++; endwhile; ?>  
        </section>
       
      </div>
      <!-- Left Content Home Ends --> 
      <?php get_sidebar(faq); ?>
    
    </div>
  </div>
  <!-- Main Content Ends --> 
  
</div>
<!--Page wrap Ends-->
<?php get_footer(); ?>
                      