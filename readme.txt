=== WooCommerce ConvertKit ===
Contributors: nickohrn, davidlamarwheeler, nathanbarry
Donate link: https://convertkit.com
Tags: email, marketing, embed form, convertkit, capture, woocommerce
Requires at least: 3.6
Tested up to: 4.5.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Integrates WooCommerce with ConvertKit allowing customers to be automatically sent to your ConvertKit account.

== Description ==

[ConvertKit](https://convertkit.com) makes it easy to capture more leads and sell more products by easily
embedding email capture forms anywhere. This plugin makes it a little bit easier for those of us using WordPress
blogs, by automatically appending a lead capture form to any post or page.

If you choose a default form on the settings page, that form will be embedded at the bottom of every post or page
(in single view only) across your site. If you wish to turn off form embedding or select a different form for
an individual post or page, you can do so within the ConvertKit meta box on the editing form.

Finally, you can insert the default form into the middle of post or page content by using the `[convertkit]` shortcode.

== Installation ==

1. Upload `woocommerce-convertkit` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Visit the settings page by clicking on the link under the plugin's name
4. Enter your ConvertKit API key, which you can find [here](https://app.convertkit.com/account/edit), and save the settings
5. Select your default form and save the settings
6. If you wish, choose particular forms for each post or page by visiting the edit screen and choosing the correct form

== Frequently asked questions ==

= Does this plugin require a paid service? =

Yes, for it to work you must first have an account on ConvertKit.com

== Screenshots ==

none

== Changelog ==

### 1.0.2

* Added logger to help debug connectivity issues.

### 1.0.1

* Don't use API when setting transient options

### 1.0.0

* Initial release

== Upgrade notice ==