=== Plugin Name ===
Contributors: joeyk2k
Donate link: https://jklakus.live/
Tags: tag1, tag2
Requires at least: 6.2
Tested up to: 6.2
Stable tag: 1.1.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A plugin that fetches data from a Google Spreadsheet and displays it in a styled CSS table on a WordPress site, allowing users to easily display updated data on their website without manual updates.

== Description ==

A WordPress plugin that fetches data from a Google Spreadsheet and displays it in real-time on a website is a useful tool for websites that run polls or surveys that require frequent updates. This type of plugin typically utilizes the Google Sheets API to retrieve data from a Google Spreadsheet, which includes names and votes. The plugin will then display this data on a styled CSS table or chart that updates in real-time as new data is added or changes are made to the spreadsheet.

This plugin can be especially useful for websites that host competitions or polls, allowing users to track the current standings of each participant in real-time. Website owners can also benefit from this plugin as it reduces the need for manual updates to the website as the data is automatically fetched and displayed

== Frequently Asked Questions ==

= How do i use it?=

To use the plugin to display data from a Google Spreadsheet on a website, users need to first create a Google Spreadsheet and publish it to the web. The published spreadsheet must be set to "Anyone with the link can view" so that the plugin can access the data. Once the spreadsheet is published, users can retrieve the URL and use it in the shortcode `[jojokcreator_picturetable url="https://docs.google.com/spreadsheets/d/${spreadsheetId}/gviz/tq"
 title=${chosen_title}]` to display the data on their WordPress website

== Screenshots ==

1. How the table looks.


== Changelog ==

= 1.0 =
* Initial version