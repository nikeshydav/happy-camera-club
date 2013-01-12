<?php
/*
Theme Name: happycameraclub
Theme URI: http://www.happycameraclub.com
Description: A Photography blog
Version: 1.0
Author: Axisfusion.org
Author URI: http://www.axisfusion.org
*/

get_header(); ?>
<?php if(is_home()): ?><?php get_template_part( 'content-home', get_post_format() ); ?><?php endif; ?>
<?php get_footer(); ?>