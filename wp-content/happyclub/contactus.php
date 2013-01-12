<?php
/*
* Template Name: Contact Page
Theme URI: http://www.happycameraclub.com
Description: A Photography blog
Version: 1.0
Author: Axisfusion.org
Author URI: http://www.axisfusion.org
*/

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- Header Slide image Starts -->
  <div class="slider-wrap innerheader"> <img src="<?php bloginfo('template_directory'); ?>/images/header_contact.jpg">
    <div class="titleTxt">
      <h4>Contact Us</h4>
    </div>
  </div>
  <!-- Header Slide image Ends --> 
  
  <!-- Main Content Starts -->
  <div class="content-wrap bg_shadow">
    <div class="container"> 
      <!-- Left Content Home Starts -->
      <div class="container_three_forth border_right"> 
        <!--First Three Columns Starts-->
        <h1 >Contact Us</h1>
        <p>We're very keen to hear from you. Simply complete the simple form below or get in touch with us </p>
        <section class="service-columns sep_hor clearfix">
          <section class="one_half contactformdiv border_right clearfix">
            <p>*All fields are required</p>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="contactform" name="contactform" method="post">
            <?php
$err_name = $err_email = $err_contact = $err_contentemail == '';

if($_POST){
	$individual = $_POST['individual'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$contentemail = $_POST['contentemail'];

	
	if($individual =='' ) $err_ind ='err';
	if($post_name =='' )$err_name ='err';
	if($custom_email=='' )$err_email ='err';
	if($custom_contact=='' )$err_contact ='err';
	if($custom_contentemail=='' )$err_contentemail ='err';

	
	
	if(($err_name == '' || $err_name == 1) && ($err_email == '' || $err_email == 1) && ($err_contact == '' || $err_contact == 1) 
	&& ($err_contentemail == '' || $err_contentemail ==1) ){
			
			$my_post = array(
			     'post_name' => $post_name,
			     'post_date' => date('Y-m-d h:i:s'),
			     'post_content' => $post_content,
			     'post_status' => 'draft',
			     'post_type' => 'post',
			  );
			$post_id = wp_insert_post($my_post);
			
			add_post_meta($post_id, 'custom_name', $custom_name);
			add_post_meta($post_id, 'custom_email', $custom_email);
			add_post_meta($post_id, 'custom_contact', $custom_contact);
			add_post_meta($post_id, 'custom_contentemail', $custom_contentemail);
			
			echo 'Thanks for submiting. We will get back to you.';
			
	}
	
}
?>
            
              <div>
                <select type="select" name="individual" id="firmname" class="cat requiredField <?php echo $err_ind ?>">
                  <option value="individual">individual</option>
                  <option value="business">business</option>
                </select>
              </div>
              <div>
                <input class="requiredField <?php echo $err_name ?>" type="text" name="name" id="name" placeholder="enter name" required>
              </div>
              <div>
                <input class="requiredField <?php echo $err_email ?>"  type="email" name="email" id="email" placeholder="enter email" required>
              </div>
              <div>
                <input class="requiredField <?php echo $err_contact ?>" type="tel" name="contact" id="contact" placeholder="enter contact number" required>
              </div>
              <div>
                <textarea class="requiredField <?php echo $err_contentemail ?>" id="contentemail" name="contentemail" placeholder="content to email" required></textarea>
              </div>
              <input type="submit" class="more" name="submit" id="btn_contact" value="send">
            </form>
          </section>
          <section class="one_half contactdetails clearfix">
            <h3 class="padT50">Contact Details:</h3>
            <p><strong>Postal and Physical:</strong><br>
			Address Line 1, Address Line 2 and so on...</p>
            <p><strong>tel :</strong> 80808080808 <br>
				<strong>fax:</strong> 80880881080</p>
            <p><strong>mail:</strong> <a href="mailto:info@happycameraclub.com">info@happycameraclub.com</a></p>
          </section>
        </section>
        
        <section class="service-columns sep_hor clearfix">
        <img src="<?php bloginfo('template_directory'); ?>/images/map_img.jpg" alt="Maps">
        </section>
      </div>
      <!-- Left Content Home Ends --> 
      
      <!-- Sidebar Home Starts -->
     <?php get_sidebar(faq); ?>
      <!-- Sidebar Home Home Ends --> 
    </div>
  </div>
  <!-- Main Content Ends --> 
  
</div>
<!--Page wrap Ends-->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>