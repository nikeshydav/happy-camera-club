<?php
/*
* Template Name: test Page
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
<form id="new_post_form" name="new_post_form" action="" enctype="multipart/form-data" method="POST">
<?php
$err_tit = $err_aut = $err_sch = $err_age = $err_eml = $err_num = $err_cont == '';

if($_POST){
	$category = $_POST['category'];
	$post_title = $_POST['post_title'];
	$custom_author = $_POST['custom_author'];
	$custom_school_name = $_POST['custom_school_name'];
	$custom_age = $_POST['custom_age'];
	$custom_email = $_POST['custom_email'];
	$custom_number = $_POST['custom_number'];
	$post_content = $_POST['post_content'];
	
	if($category =='' ) $err_cat ='err';
	if($post_title =='' )$err_tit ='err';
	if($custom_author=='' )$err_aut ='err';
	if($custom_school_name=='' )$err_sch ='err';
	if($custom_age=='' )$err_age ='err';
	if($custom_email=='' )$err_eml ='err';
	if($custom_number=='' )$err_num ='err';
	if($post_content=='' )$err_cont ='err';
	
	
	if(($err_tit == '' || $err_tit == 1) && ($err_aut == '' || $err_aut == 1) && ($err_sch == '' || $err_sch == 1) 
	&& ($err_age == '' || $err_age ==1) && ($err_eml == ''  || $err_eml == 1) && ($err_num == '' || $err_num == 1)
	&& ($err_cont == ''|| $err_cont==1 ) ){
			
			$my_post = array(
			     'post_title' => $post_title,
			     'post_date' => date('Y-m-d h:i:s'),
			     'post_content' => $post_content,
			     'post_status' => 'draft',
			     'post_type' => 'post',
			  );
			$post_id = wp_insert_post($my_post);
			
			add_post_meta($post_id, 'custom_author', $custom_author);
			add_post_meta($post_id, 'custom_school_name', $custom_school_name);
			add_post_meta($post_id, 'custom_age', $custom_age);
			add_post_meta($post_id, 'custom_email', $custom_email);
			add_post_meta($post_id, 'custom_number', $custom_number);
			
			echo 'Thanks for submiting. We will get back to you.';
			
	}
	
}
?>
<style> .err{border:1px solid #FF0000 !important;}</style>
	<ul class="post-form">
		<li>
			<label for="new-post-cat"> Category  </label>
			<select name="category" id="cat" class="cat requiredField <?php echo $err_cat ?>">
				<option value="-1">--Select--</option>
				<option class="level-0" value="13">Story</option>
				<option class="level-0" value="3">Poem</option>
			</select>
		</li>
		<li>
			<label for="new-post-title"> Title </label>
			<input class="requiredField <?php echo $err_tit ?>" type="text" value="" name="post_title" id="new-post-title" minlength="2">
		</li>
		<li>
			<label for="custom_author"> Added By  </label>
			<input class="requiredField <?php echo $err_aut ?>" type="text" name="custom_author" id="custom_author" minlength="2" value="">
		</li>
		<li>
			<label for="custom_school_name">School Name  </label>
			<input class="requiredField <?php echo $err_sch ?>" type="text" name="custom_school_name" id="custom_school_name" minlength="2" value="">
		</li>
		<li>
			<label for="custom_age">Age  </label>
			<input class="requiredField <?php echo $err_age ?>" type="text" name="custom_age" id="custom_age" minlength="2" value="">
		</li>
		<li>
			<label for="custom_email">Email  </label>
			<input class="requiredField <?php echo $err_eml ?>" type="text" name="custom_email" id="custom_email" minlength="2" value="">
		</li>
		<li>
			<label for="custom_number">Contact Number  </label>
			<input class="requiredField <?php echo $err_num ?>" type="text" name="custom_number" id="custom_number" minlength="2" value="">
		</li>
		<li>
			<label for="new-post-desc">Stories Description  </label>
			<textarea name="post_content" class="requiredField <?php echo $err_cont ?>" id="new-post-desc" cols="60" rows="8"></textarea>
		</li>
		<li class="submit">
			<input type="image" src="<?php bloginfo('template_directory'); ?>/images/submit.jpg" name="post_new_submit" value="Submit">
		</li>
	</ul>
</form>
</div>
	 	</div>
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
   
      <!-- Sidebar Home Home Ends --> 
    </div>
  </div>
  <!-- Main Content Ends --> 
  
</div>
<!--Page wrap Ends-->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>