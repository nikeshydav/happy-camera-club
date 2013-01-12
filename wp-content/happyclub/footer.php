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
<footer id="footer" class="fluid clearfix" data-role="footer">
  <nav id="footer_nav" class="clearfix">
    <ul id="menu-footer" class="menu clearfix">
      <li><a href="index.html">Home</a><span class="naviline">&nbsp;</span></li>
      <li><a href="<?php echo get_page_link(158); ?>">About Us</a><span class="naviline">&nbsp;</span></li>
      <li><a href="<?php echo get_category_link(12); ?>">FAQS</a><span class="naviline">&nbsp;</span></li>
      <li><a href="testimonials.html">Testimonials</a><span class="naviline">&nbsp;</span></li>
      <li><a href="terms-conditions.html">Terms &amp; Conditions</a><span class="naviline">&nbsp;</span></li>
      <li><a href="blog.html">BOLG</a><span class="naviline">&nbsp;</span></li>
      <li><a href="sitemap.html">SITEMAP</a><span class="naviline">&nbsp;</span></li>
      <li><a href="<?php echo get_page_link(41); ?>">CONTACT US</a><span class="naviline">&nbsp;</span></li>
    </ul>
  </nav>
  <div id="sub-footer-wrap">
  	<div class="copyright">copyright &copy; 2012, happycameraclub.com. All rights reserved.
    	<div class="designedby">Powered by <a href="http://www.axisfusion.org/" target="_blank">Axisfusion.org</a></div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>