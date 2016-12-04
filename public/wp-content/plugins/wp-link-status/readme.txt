=== WP Broken Link Status Checker ===
Contributors: seedplugins, pauiglesias
Tags: broken links, broken, links, crawler, headers, http, nofollow, redirections, scan, status, checker, url
Requires at least: 3.4
Tested up to: 4.6.1
Stable tag: 1.0.4
License: GPLv2 or later

Link checker of all your content links and images, looking for broken links, check link redirections, warn of nofollow links, etc.

== Description ==

This plugin is a broken link checker utility organized through entities called scans, each one containing its own configuration and results.

Start creating a new scan, and once a scan is configured you can start the crawler from the same edit page, or run it later from the scans list screen.

Knowing that these crawling processes can hurt your server perfomance, we have tried to put the focus on performance impacts, without performing massive data queries or updates, and not prioritizing crawler activity ahead of real visits.

Once started, you can see results inmediately without having to wait for the scan to be completed. You can access to the results page doing a click in the scan name, or clicking the "Show results" link from the scan actions row.

The crawler results page shows all links checked according to the scan configuration, allowing basic filtering options.

You can read a detailed user guide and the documentation from the plugin page:

http://seedplugins.com/wp-link-status/

== Installation ==

Install from WordPress

1. Visit the Plugins page from your WordPress main menu and select Add New link
1. Click on Upload plugin, next Browse, choose wp-link-status.zip and press Install Now.
1. Once uploaded and install click Activate Plugin
1. Get started from the WP Link Status menu

Or upload via FTP

1. Unzip and upload wp-link-status folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Get started from the WP Link Status menu

== Frequently Asked Questions ==

= Do I need to keep the browser opened, or a WordPress user session active during the crawling process? =

No, it is not necessary. The crawler module runs in background and it is intended to work in unattended mode.

= How the crawling process affects to server performance? =

There are several mechanisms to avoid constant database access. When a URL is found, the crawler stops extracting URLs from content and check the detected URL. In addition, in the settings page you can manage many parameters related to performance. Let me known if you experience any issue.

= Why the crawler does not work and show "Waiting..."? =

The crawler module works submitting HTTP requests through internal plugin scripts. So if you are running this plugin under an environment outside the Internet (e.g. local or development server) you need to add the involved hosts names or domains into your hosts file, both the client and server where this plugin is executed.

In the same way, if the site you are crawling implements browser password protection, you need to remove this password restriction in order to work properly.

= I have activated this plugin from a multisite but seems that it does not work. =

Currently there is no support for network activation in multisite installs. The plugin needs to be activated locally for each single blog of your multisite. Otherwise, it is advisable to run only one scan at the same time per each blog or web server.

= This plugin works for ACF or Advanced Custom Fields as well? =

Yes, at the end ACF works the same way that normal custom fields.

You can add the custom field name in the "Content options" tab of the scan, selecting if it is an expected full URL or a content with links.

== Screenshots ==

1. Scan basic configuration
1. Scan content options
1. Scan URL filters
1. Scan HTTP status selection
1. Scan advanced options
1. Main scans list
1. Crawler results page

== Changelog ==

= 1.0.4 =
September 11th, 2016

* Fixed cURL options to avoid problems with GoDaddy hosted sites

= 1.0.3 =
August 7th, 2016

* Changed permissions for generated files to avoid hosting conflicts like Hostgator.
* Fixed crawling process issues when running on HTTPS sites with or without valid certificate.

= 1.0.2 =
May 30th, 2016

* Solved bug for missing Custom Post Types when saving scan data.
* Solved bug enabling Custom Post Types under scan crawling.

= 1.0.1 =
February 25th, 2016

* Solved config bug when saving a running scan.

= 1.0 =
Release Date: February 11th, 2016

* First and tested released until WordPress 4.4.2
* Tested code from WordPress 3.4 version.

== Upgrade Notice ==

= 1.0.2 =
Solved bugs related to Custom Post Types.

= 1.0.1 =
Solved bug editing config of a running scan.

= 1.0 =
Initial Release.