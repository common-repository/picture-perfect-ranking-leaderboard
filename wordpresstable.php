<?php
/**
 * Plugin Name: Picture Perfect Ranking Leaderboard
 * Description: Plugin that allows you to easily fetch data from a Google Spreadsheet and display it in a stylish table format. With this app, you can add image links for each person in your spreadsheet, and their images will be displayed alongside their scores or votes in the table. The app allows you to easily create a professional-looking leaderboard or voting system for your website or event.
 * Version: 1.1.0
 * Author: Joe Klakus 
 * Author URI: https://jklakus.live 
 */

// Define the shortcode to display the table
add_shortcode('jojokcreator_picturetable', function ($atts) {
  $defaults = array(
    'title' => '',
    'url' => '',
  );
  $args = shortcode_atts($defaults, $atts);
  $uniqid = uniqid('id');

  // Get the current user display name
  global $current_user;
  $display_name = $current_user ? $current_user->display_name : 'World';

  // Output the script and HTML for the table
  ob_start();
  ?>
    <script>
      // Define the settings for the table
      window.erwSettings = window.erwSettings || {};
      window.erwSettings["<?php echo esc_attr($uniqid) ?>"] = {
        'title': '<?php echo esc_attr($args["title"]); ?>',
        'url': '<?php echo esc_url($args["url"]); ?>',
      }
    </script>
    <div id="jojokcreator_picturetable" data-id="<?php echo esc_attr($uniqid) ?>"></div>
  <?php
  return ob_get_clean();
});

// Enqueue the assets for the plugin
function jojokcreator_picturetable_load_assets() {
  $version = time();
  wp_enqueue_script('jojokcreator_picturetable', plugin_dir_url(__FILE__) . 'app/static/js/main.js', array(), $version, true);
  wp_enqueue_style('jojokcreator_picturetable', plugin_dir_url(__FILE__) . 'app/static/css/main.css', array(), $version);
}
add_action('wp_enqueue_scripts', 'jojokcreator_picturetable_load_assets');