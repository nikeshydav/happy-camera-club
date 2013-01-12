
  <!-- Slider wrap Starts -->
  <div class="slider-wrap">
   <div id="fwslider">
        <div class="slider_container">
        
			<?php
            
              $sliders = $wpdb->get_results( "SELECT * FROM wp_slider" );
			  foreach($sliders as $slider){
             ?>
            <!-- ****************** STEP 3: ADD SLIDES ****************** -->            
            <!-- Duplicate to create more slides -->            
            <div class="slide"> 			 
                <!-- Slide image -->
                    <img src="<?php echo $slider->slider_img ?>" />
                <!-- /Slide image -->
                
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                    <div class="bg_dark">
                        <h4 class="title"><?php  echo $slider->slider_title ?></h4>
                        <p class="description"><?php  echo $slider->slider_content ?></p>
			           <a class="more" href="><?php  echo $slider->slider_link ?>">More</a>
                        <div class="clearfix"></div>
					</div>
                    </div>
                </div>
                 <!-- /Texts container -->
                 
            </div>
            <!-- /Duplicate to create more slides -->            
            <!-- ****************** /STEP 3: ADD SLIDES ****************** -->
<?php } ?>
            

        </div>
        
        <div class="timers"></div>
        <div class="sliderbttons">
            <div class="slidePrev"><span></span></div>
            <div class="slideNext"><span></span></div>
        </div>

    </div> <!--/slider -->
    </div>
    <!-- SLIDER END HERE -->
      <!-- Slogan Wrap Starts -->
  <div class="slogan-wrap bg_shadow">
    <div class="container">
      <p>Excellence of tutoring and imparting life skills to underprivileged individuals through photography as a medium<br>
        <small>Our humble beginnings</small></p>
    </div>
  </div>
  
  <!-- Main Content Starts -->
<div class="content-wrap">
    <div class="container"> 
      <!-- Left Content Home Starts -->
      <div class="container_three_forth border_right"> 
        <!--First Three Columns Starts-->
        <section class="service-columns clearfix"> 
        
  <?php 
	$args=array('category__in' => array(4),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
    <!--column2 starts-->
       <section class="one_third service  <?php if($i!=0) echo 'border_left';?>  clearfix">
          <h3><?php the_title(); ?></h3>
          <div class="img-thumb"><?php  if ( has_post_thumbnail() ) the_post_thumbnail(); ?></div>
          <p><?php the_content(); ?></p>
          <div class="more clearfix"><a href="<?php the_permalink(); ?>">MORE</a></div>
	   </section>
	<?php  $i++; endwhile; ?>       
        </section>


        <!--Last Two Columns Starts-->
          <!--Mentor of the Month Starts -->
     <section class="service-columns sep_hor clearfix"> 
     
          <!--Mentor of the Month Starts -->
                     <?php 
	$args=array('category__in' => array(11),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 1,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
          <section class="one_half mentor clearfix">
 
             <h3><span class="stars"></span><span class="stars"></span> <?php the_title(); ?> <span class="stars"></span><span class="stars"></span><span class="stars"></span></h3>
            <div class="img-thumb-small"><?php  if ( has_post_thumbnail() ) the_post_thumbnail(); ?></div>
            <p><?php the_content(); ?></p>
            <div class="more clearfix"><a href="<?php the_permalink(); ?>">MORE</a></div>
            <?php  $i++; endwhile; ?>  
          </section>
          <!--Mentor of the Month Ends --> 
    <!--We Love Photography Starts -->
          <section class="one_half lovephotography border_left clearfix">
            <h3>We <span class="love"></span> Photography</h3>
            <div class="img-div"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img_enlightment.gif" alt="We Love Photography"></a><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img_pressthebutton.gif" alt="Press the Button -Be the change"></a></div>
            <div class="boldtxt clearfix"><strong>Do You?</strong><br>
              <p>connect with us <span class="do_you_home"><a href="#">here</a></span></p>
            </div>
          </section>
          <!--We Love Photography Ends --> 
        </section>
        <!--Last Two Columns Ends--> 
        
        <!--Testimonials Starts -->
        <section class="service-columns sep_hor clearfix">
                            <?php 
	$args=array('category__in' => array(20),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 1,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	
	while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
          <section class="testimonials clearfix">
          
            <p><?php the_content(); ?></p>
            <p class="author-name"><?php the_title(); ?></p>
          </section>
          	<?php  $i++; endwhile; ?>  
        </section>
        
      </div>
      <!-- Left Content Home Ends --> 
  
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!-- Main Content Ends --> 
  
</div>
<!--Page wrap Ends-->