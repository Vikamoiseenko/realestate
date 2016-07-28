<?php
/*
Theme Name: Real Estate agencies 
Author: 
Daria Sidorko,
MOISEENKO, VICTORIA
Author URI: http://www./
Description: Theme for Real Easate ....
Version: 1.0
*/



//Get my title tag
function get_my_title_tag() {
	global $post; 
	
	if(is_front_page()) {//the front page
		bloginfo('description');
	}
	elseif (is_page() || is_single()) {//page and postings
		the_title(); //title of page posting
	}
	
	else {
		bloginfo('description'); 
	}
	if ($post->post_parent) { //if there is a parent
		echo ' | ';
		echo get_the_title($post->post_parent); 
		}
	echo ' | '; //separator with space
	bloginfo('name'); //site name
	echo ' | ';
	echo 'Seattle, WA';
	}
function get_seo() {
	$myPosting = get_post(186);
	$mySEO = $myPosting->post_content;
	echo $mySEO;
}
?>