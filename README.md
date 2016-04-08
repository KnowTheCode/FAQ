# FAQ Plugin

This plugin adds question and answer functionality to your WordPress website.

## Features
### FAQ
It includes what you need to handling FAQs including a custom post type, taxonomy, and shortcode.  Using the shortcode `[faq]` you can display all of the FAQs or just the ones you want via term (for grouping).

### QA
Often [I](https://github.com/hellofromtonya) like to show hints and hide away the answers.  This plugin gives you an extra shortcode `[qa]`. It can be used for hints or hiding any content that you'd like.

## Installation

1. Install the [Fulcrum](https://github.com/KnowTheCode/fulcrum), the central custom repository plugin for WordPress.
2. Then you can install this plugin.

Installation from GitHub is as simple as cloning the repo onto your local machine.  To clone the repo, do the following:

1. Using PhpStorm, open your project and navigate to `wp-content/plugins/`. (Or open terminal and navigate there).
2. Then type: `git clone https://github.com/KnowTheCode/FAQ.git`.

## Configuration
Everything is configurable using the configuration files found in the `config` folder.  The font icons use the chevrons from [Font Awesome](https://fortawesome.github.io/Font-Awesome/).  To change to a different icon, do the following:

1. Go to `fulcrum-faq\config\shortcodes\faq.php`.
2. Change the `open_icon` and `close_icon` values.
3. Repeat for the `qa.php` file.
4. Open the `fulcrum-faq\config\asset\fulcrumFAQ.php` file.
5. Change the `open` and `close` values in the `localize` array for both the faq and qa.  These icon classes are used by the JavaScript script to locate the icons and change them when clicking.

## Contributions

All feedback, bug reports, and pull requests are welcome.