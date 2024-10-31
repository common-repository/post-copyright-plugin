<?

/*
Plugin Name: Post Copyright Plugin
Version: 1.0.3
Description: Add copyright notice to the bottom of every post.
Author: Eric T. Benoit
Author URI: http://www.erictbenoitauthor.com/
Plugin URI: http://www.erictbenoitauthor.com/
License: GPLv2
*/


function display_post_end_notice($content) {

$post_year = the_date('Y', '', '', FALSE);
$author_name = get_the_author();
$blog_title = get_bloginfo('name');
$blog_url = site_url('/');
$author_url = get_the_author_link();

if (is_single()) {
$content .= '&copy Copyright '. $post_year . ' ' . $author_url . ', All rights Reserved. Written For: <A HREF="' . $blog_url . '">' . $blog_title . '</A>';
}

return $content;
}

add_filter('the_content', 'display_post_end_notice');

?>
