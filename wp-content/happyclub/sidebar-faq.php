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
          <div class="share_div clearfix"> <img src="<?php bloginfo('template_directory'); ?>/images/ft_share.jpg"> </div>
          <div class="share_icons clearfix"> <img src="<?php bloginfo('template_directory'); ?>/images/social_icons.jpg"> </div>
        </aside>
        
        <!--DrumRoll -->
        <aside class="drumroll sep_hor clearfix">
          <h3>Drumroll</h3>
          <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
        </aside>
        
        <!--We Love Photography Starts -->
        <aside class="lovephotography sep_hor clearfix">
          <h3>We <span class="love"></span> Photography</h3>
          <div class="img-div"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img_enlightment.gif" alt="We Love Photography"></a><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img_pressthebutton.gif" alt="Press the Button -Be the change"></a></div>
          <div class="boldtxt clearfix"><strong>Do You?</strong><br>
            <p>connect with us <span class="do_you_home"><a href="#">here</a></span></p>
          </div>
        </aside>
        <!--We Love Photography Ends --> 
        
      </div>
      <!-- Sidebar Home Home Ends --> 