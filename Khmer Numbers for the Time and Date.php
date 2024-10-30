<?php
/*
Plugin Name: Khmer Numbers for the Time and Date
Version: 2.0
Plugin URI: http://www.sbbic.org/
Description: This plugins translates all numbers for dates and comments.  You can use this plugin with the Khmer language pack http://km.wordpress.org/ 
Author: Nathan Wells based on Arif Nezami's work (http://www.wpart.tk/)
Author URI: http://www.sbbic.org/
*/
 
function replace_with_khmer_numbers($content)
{
    $khmer_numbers = array('០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩');
    $english_numbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
$content = str_replace($english_numbers, $khmer_numbers,$content);
return $content;
}
add_filter('get_the_date','replace_with_khmer_numbers');
add_filter('get_comments_number','replace_with_khmer_numbers');
add_filter('the_time','replace_with_khmer_numbers');
add_filter('the_date','replace_with_khmer_numbers');
add_filter('get_month','replace_with_khmer_numbers');
add_filter('get_year','replace_with_khmer_numbers');
 
?>