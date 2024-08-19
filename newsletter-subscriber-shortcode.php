<?php
/**
 * Plugin Name: Newsletter Subscriber Shortcode
 * Description: A form to subscribe to a newsletter
 * Version: 1.0
 * Author: Shane Muirhead
 *
 **/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/newsletter-subscriber-scripts.php');

// Register Shortcode
function newsletter_subscriber_shortcode($atts): false|string {
	// Extract shortcode attributes
	$atts = shortcode_atts(
		array(
			'title' => 'Newsletter Subscriber',
			'recipient' => get_bloginfo('admin_email'), // default to admin email
			'subject' => 'You have a new subscriber',
		), $atts, 'newsletter_subscriber'
	);

	ob_start();
	?>

	<div id="form-msg"></div>
	<form id="subscriber-form" method="post" action="<?php echo plugins_url().'/newsletter-subscriber/includes/newsletter-subscriber-mailer.php'; ?>">
		<div class="form-group">
			<label for="name">Name: </label><br>
			<input type="text" id="name" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email: </label><br>
			<input type="text" id="email" name="email" class="form-control">
		</div>
		<br>
		<input type="hidden" name="recipient" value="<?php echo esc_attr($atts['recipient']); ?>">
		<input type="hidden" name="subject" value="<?php echo esc_attr($atts['subject']); ?>">
		<input type="submit" class="btn btn-primary" name="subscriber_submit" value="Subscribe">
		<br><br>
	</form>

	<?php
	return ob_get_clean();
}

add_shortcode('newsletter_subscriber', 'newsletter_subscriber_shortcode');
