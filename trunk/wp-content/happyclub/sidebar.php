<?php
/*
Theme Name: happycameraclub
Theme URI: http://www.happycameraclub.com
Description: A Photography blog
Version: 1.0
Author: Axisfusion.org
Author URI: http://www.axisfusion.org
*/
?>
      <!-- Sidebar Home Starts -->
      <div class="sidebar_home">

      
      	<!-- Photo TIP of the Month Comes Here -->
      	<aside class="phototip clearfix">
        	<h3>hot.</h3>
            <h4>(photo tip of month)</h4>
            <p>Mauris faucibus, erat id fringilla ultrices, ipsum est adipiscing nis faucibus
erat id fringillagdg....</p>
        </aside>
        <!-- Subscribe Starts -->
        <aside class="subscribe sep_hor clearfix">
			<div class="enterhappiness">
            	<h3>Enter Happiness</h3>
                        <?php
						if($_POST){
                $email = $_POST['email'] ;
				//$ip = $_POST['ip_address'. $i .''];
     $wpdb->query( "INSERT INTO wp_newsletter (email_address, ip_address) VALUES ('$email','". $_SERVER['REMOTE_ADDR']."')"); }?> 
            	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="subscribe_mail">
            		<input type="text" value="Enter Emial Id" name="email" id="link"><input type="submit" name="signUp" value="Sign Up">
            	</form>
             </div>
        </aside>

        
        
        
        
        
        
        <!-- Social Presence -->
        <aside class="social_presence sep_hor clearfix">
        	<h3>Hot on Social Media</h3>
            <div class="share_div clearfix">
                <div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
            </div>
            <div class="share_icons clearfix">
                <img src="<?php bloginfo('template_directory'); ?>/images/social_icons.jpg">	
            </div>
        </aside>
        
        <!--DrumRoll -->
        <aside class="drumroll sep_hor clearfix">
        	<h3>Drumroll</h3>
        <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
        </aside>
        
      </div>
      <!-- Sidebar Home Home Ends --> 
        
        
        <!-- Social Presence -->
        <aside class="social_presence sep_hor clearfix">
        	<h3>Hot on Social Media</h3>
            <div class="share_div clearfix">
                <div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
            </div>
            <div class="share_icons clearfix">
                <img src="<?php bloginfo('template_directory'); ?>/images/social_icons.jpg">	
            </div>
        </aside>
        
        <!--DrumRoll -->
        <aside class="drumroll sep_hor clearfix">
        	<h3>Drumroll</h3>
        <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
        </aside>
        
      </div>
      <!-- Sidebar Home Home Ends --> 