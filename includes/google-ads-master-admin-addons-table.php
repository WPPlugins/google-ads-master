<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class google_ads_master_admin_addons_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	
	function display() {
	$plugin_master_name = constant('GOOGLE_ADS_MASTER_NAME');
	$path = ABSPATH . 'wp-content/plugins/google-ads-master-addons/';
	if ( is_plugin_active( 'google-ads-master-addons/google-ads-master-addons.php' ) && file_exists($path) ) {
		$google_ads_master_addon = "yes";
		$google_ads_master_addon_get = '<b>All add-ons Installed</b>';
	}
	else{
		$google_ads_master_addon = "no";
		$google_ads_master_addon_get = '<a class="button-primary" href="https://wordpress.techgasp.com/google-ads-master/" target="_blank" title="Get Add-ons" style="float:left;">Get Add-ons</a>';
	}
?>
<table class="widefat" cellspacing="0">
	<thead>
		<tr>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'google_ads_master'); ?></h2></th>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'google_ads_master'); ?></h2></th>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Installed', 'google_ads_master'); ?></h2></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th><?php echo $google_ads_master_addon_get; ?></th>
			<th></th>
			<th></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-googleadsmaster-admin-addons-widget-viral.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Google Ads Master Viral Widget</h3><p>The Widget that turns your Wordpress "virulent" by allowing people to +1 and Share your pages. Watch those visits explode and greatly boost your google ad clicks!</p><p>Looks great when published under any ads widget, remember you can always hide the widget title to get the button closer to the below widgets.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-yes.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-googleadsmaster-admin-addons-widget-ads.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Google Ads Master Ads Widget</h3><p>This Widget was specially designed for extremely fast page load times and small system trace. Google Ads Master Ads Widget is the professional heavy duty widget you need to generate income with your wordpress website</p><p>This is the famous widget you usually see in top Google SEO ranking wordpress news blogs.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-yes.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-googleadsmaster-admin-addons-shortcode-in.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Individual Shortcode</h3><p>Google Ads Master uses TechGasp Wordpress Framework. The <b>Individual Shortcode</b> allows you to have a different customized shortcode in each page or post. Easy to use it can be found when you edit a page or a post under the wordpress text editor. Once you have created your shortcode, Just insert the shortcode <b>[google-ads-master]</b> anywhere inside that text.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$google_ads_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-googleadsmaster-admin-addons-shortcode-un.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Universal Shortcode</h3><p>Google Ads Master uses TechGasp Wordpress Framework. The <b>Universal Shortcode</b> allows you to have the same shortcode across different pages or posts. Easy to use it can be found right here under the Shortcodes menu. Once you have created your shortcode, Just insert the shortcode <b>[google-ads-master-un]</b> anywhere inside the text of your pages or posts.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$google_ads_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-googleadsmaster-admin-addons-updater.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Advanced Updater</h3><p>The Advanced Updater allows you to easily Update / Upgrade your Advanced Plugin. You can instantly update your plugin after we release a new version with more goodies without having to wait for the nightly native wordpress updater that runs every 24/48 hours. Get it fresh, get it fast.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$google_ads_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-googleadsmaster-admin-addons-support.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Award Winning Professional Support</h3><p>Need professional help deploying this plugin? TechGasp provides award winning professional wordpress support for all advanced version costumers and wordpress professionals. Support Us and we will Support You.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$google_ads_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
	</tbody>
</table>
<?php
		}
}
