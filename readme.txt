=== Tilde Widget ===
Contributors: towoo
Donate link: https://heytilde.com
Tags: tilde, widget, events
Requires at least: 4.0
Tested up to: 4.8.1
Requires PHP: >5.4
Stable tag: trunk 
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a shortcode to easily add Tilde Widgets in your content.

== Description ==

Tilde (https://heytilde.com) is an online event platform and software-as-a-service (SaaS), mainly targeting Northern Europe. Tilde makes is easy to plan, create and publish your events on a variety of networks and channels. The Tilde Widget plugin lets you include your events, or events from your network, on your own WordPress site. This plugin adds a shortcode for your content, and an options page to provide Widget IDs from Tilde.

The plugins main responsibility is to insert the Widget loader javascript code on your page, which loads the widget.js from the Tilde servers, and renders the content on your page. Very much like how Google Analytics is installed.

This plugin requires an account on Tilde (heytilde.com), an event planning service provider.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/tilde-widget` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the Settings->Tilde Widget screen to configure the plugin.
4. Insert the Tilde Widget ID on the options page.
5. Add the shortcode to your content OR display your events using the Widget.

== Frequently Asked Questions ==

= What are the requirements for this plugin? =

This plugin requires an account on Tilde (heytilde.com) to 

= Why not just paste in the HTML code from heytilde.com? =

You can absolutely do that. This plugin aims to prevent errors when copy/pasting raw html code from Tilde, it makes it much easier to install and manage your widget. In the future additional options will be avaiable to further configure your widget.

= What data do I have to provide this plugin? =

You only need the Widget ID from Tilde. It can be found at Account > Widget.

= What about my users privacy? =

The Tilde Widget does not collect any data and does not send any data from your WordPress installation. The plugin inserts HTML on your page that makes your users browser do two requests:

1. `GET cdn.towoo.io/widget.js` - to load the widget code, that renders the content, displays the modal and so on.
2. `GET api.towoo.io/v1/widgets/{id}` - to load the widget configuration and initial events from the Tilde API.

The only thing sent to Tilde (Towoo, the authors of Tilde and this widget) is the normal browser headers such as user-agent, locale, etc. The API request does not require sessions or any user identifiable tokens.

The hosted widget.js does not track or insert malicious code on your page in any way. This can be easily verified by observing network activity in your browsers Developer Tools.

== Screenshots ==

1. Enter Tilde Widget ID on options page
2. Insert Tilde shortcut on desired pages

== Changelog ==

= 0.2.2 =
* Fix bug so you can have text above the Tilde widget

= 0.2.1 =
* Added screenshots and icon

= 0.2 =
* Code cleanup, renamed functions to make it clear this is a Tilde product.
* Added correct readme.txt
* Added LICENSE

= 0.1 =
* Initial plugin for review, coded by contractor.

== Upgrade Notice ==

= 0.2 =
* Reset your Widget ID on the options page, as the form fields have been renamed.
