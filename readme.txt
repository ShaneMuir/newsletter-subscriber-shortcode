=== Newsletter Subscriber ===
Contributors: ShaneMuirhead
Tags: newsletter, subscribe, email, form
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A simple plugin to allow users to subscribe to your newsletter via a shortcode-based form.

== Description ==

The Newsletter Subscriber plugin allows you to easily add a simple newsletter subscription form to any post, page, or widget area using a shortcode. The plugin captures the user's name and email address and sends a notification to a specified recipient email.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/newsletter-subscriber` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Add the `[newsletter_subscriber]` shortcode to any page, post, or widget where you want the subscription form to appear.

== Usage ==

To use the Newsletter Subscriber form, simply add the following shortcode to any post, page, or widget:

`[newsletter_subscriber]`

You can also customize the form's title, recipient email, and subject line by using the following attributes:

`[newsletter_subscriber title="Join Our Newsletter" recipient="email@example.com" subject="New Subscriber!"]`

* **title**: The title of the form (default: "Newsletter Subscriber").
* **recipient**: The email address where subscription notifications will be sent (default: your site's admin email).
* **subject**: The subject line of the subscription notification email (default: "You have a new subscriber").

== Frequently Asked Questions ==

= How do I display the subscription form? =

You can display the subscription form by adding the `[newsletter_subscriber]` shortcode to any post, page, or widget.

= Can I customize the email recipient and subject line? =

Yes, you can customize the recipient email and subject line by adding the `recipient` and `subject` attributes to the shortcode.

= Where do I find the subscription form submissions? =

Submissions are sent directly to the specified recipient email address. There is no built-in storage for form submissions in the WordPress database.

== Changelog ==

= 1.0 =
* Initial release of the Newsletter Subscriber plugin.

== Upgrade Notice ==

= 1.0 =
* First stable release.

== License ==

This plugin is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This plugin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html).
