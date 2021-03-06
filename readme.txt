=== Plugin Name ===
Contributors: Tecnes Milano srl
Donate link: http://www.tecnes.com
Tags: Roomcloud booking engine, distribution system, channel manager, internet reservation system, booking system, reservation system, booking plugin, hotel reservations, reservation plugin, online booking system
Requires at least: 3.0.1
Tested up to: 4.1
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

Use Roomcloud plugin to embed our Booking Engine form into your wordpress site.
This allows your customers to make online reservations on the web site of your hotel.
More info at http://www.roomcloud.net

== Installation ==

1. Upload `roomcloud.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Prepare your shortcode string using the format: [roomcloud hotel='xyz'] where xyz is the hotel code defined in Roomcloud extranet. If you want the roomcloud calendar to point to an internal worpress page, define inside the roomcloud shortcode an additional parameter: page_id and define a roomcloud_iframe shortcode
1. Place the roomcloud shortcode inside the page of your website using wordpress page editor.
1. In case of internal page, place the roomcloud_iframe shortcode inside the page with specified page_id using wordpress page editor.

== Changelog ==
= 1.0 =
* Initial support
= 1.1 =
* Added roomcloud_iframe shortcode
= 1.3 =
* Contains a security bug fix to prevent cross-site scripting attacks

== Frequently Asked Questions ==

= Do I need a Roomcloud account? =

Yes. You need to complete a demo signup request: https://www.roomcloud.net/be/search/demo_request.jsp, get username and password and configure your account.

= I have logged into my account and configured it. What's next? =

Take note of your unique hotel code from roomcloud extranet. Go to wordpress admin page and install Roomcloud plugin. Then add your shortcode using the format [roomcloud hotel='hotelCode'] in the page of the website where you want to show the booking form. That's all!

= Where can I get more information about Roomcloud booking engine integration? =

Read our support section at http://www.roomcloud.net/docs/integration_manual.pdf
