<?php 
$post = $wp_query->post;

if ( in_category('campaign') ) {

 include( TEMPLATEPATH .'/single-campaign.php');

 } elseif ( in_category('column') ) {

 include( TEMPLATEPATH .'/single-column.php');
    
 }else {
 
 include(TEMPLATEPATH . '/single-1.php');

 }

?>