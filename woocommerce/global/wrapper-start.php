<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<main class="main">
	<div class="container">
	<div class="breadcrumbs">
	<?php //woocommerce_breadcrumb();?>
		 <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?> 
	
	</div>