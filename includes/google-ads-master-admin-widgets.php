<?php
function menu_single_google_ads_admin_widgets(){
	if ( is_admin() )
	add_submenu_page( 'google-ads-master', 'Widgets', 'Widgets', 'manage_options', 'google-ads-master-admin-widgets', 'google_ads_master_admin_widgets' );
}

function google_ads_master_admin_widgets(){
$plugin_master_name = constant('GOOGLE_ADS_MASTER_NAME');
?>
<div class="wrap">
<h1>Widgets</h1>
<?php
if(!class_exists('google_ads_master_admin_widgets_table')){
	require_once( dirname( __FILE__ ) . '/google-ads-master-admin-widgets-table.php');
}
//Prepare Table of elements
$wp_list_table = new google_ads_master_admin_widgets_table();
//Table of elements
$wp_list_table->display();

?>
<br>
<h2>IMPORTANT: Makes no use of Javascript or Ajax to keep your website fast and conflicts free</h2>

<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>

<br>

<p>
<a class="button-secondary" href="http://wordpress.techgasp.com" target="_blank" title="Visit Website">More TechGasp Plugins</a>
<a class="button-secondary" href="http://wordpress.techgasp.com/support/" target="_blank" title="TechGasp Support">TechGasp Support</a>
<a class="button-primary" href="http://wordpress.techgasp.com/google-ads-master/" target="_blank" title="Visit Website"><?php echo $plugin_master_name; ?> Info</a>
<a class="button-primary" href="http://wordpress.techgasp.com/google-ads-master-documentation/" target="_blank" title="Visit Website"><?php echo $plugin_master_name; ?> Documentation</a>
</p>
<?php
}
if( is_multisite() ) {
add_action( 'admin_menu', 'menu_single_google_ads_admin_widgets' );
}
else {
add_action( 'admin_menu', 'menu_single_google_ads_admin_widgets' );
}
?>