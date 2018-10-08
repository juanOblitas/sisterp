<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporate-landing-page
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<?php
	if(is_home()){
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-sm-768 row">

	<div class="col-lg-3 col-md-3 col-sm-3 widget-area widget-default" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 widget-area widget-default" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 widget-area widget-default" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 widget-area widget-default" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div>
</div>
<?php
}
?>
