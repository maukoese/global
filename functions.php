<?php

function jabaliAssets() {
  wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri().'/assets/css/main.css' );

  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery-3.2.1.js', array( ) );
  wp_enqueue_script( 'functions', get_stylesheet_directory_uri() . '/assets/js/functions-min.js', array() );
}

add_action( 'wp_enqueue_scripts', 'jabaliAssets' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function global_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}

add_action('after_setup_theme', 'global_setup');

add_action('woocommerce_before_main_content', 'global_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'global_wrapper_end', 10);

function global_wrapper_start() {
  echo '<section id="main">';
}

function global_wrapper_end() {
  echo '</section>';
}

function global_settings_page(){ ?>
    <div class="wrap">
    <h1>Home Page Sections</h1>
    <form method="post" action="options.php">
        <?php
            settings_fields("section");
            settings_fields("section2");
            settings_fields("section3");

            do_settings_sections("global-options");      
            submit_button(); 
        ?>          
    </form>
	</div><?php
}

function global_about_page(){ ?>
    <div class="wrap">
    <h1>About Page Sections</h1>
    <form method="post" action="options.php">
        <?php
            settings_fields("section");
            settings_fields("section1");
            settings_fields("section2");
            settings_fields("section3");

            do_settings_sections("global-options");      
            submit_button(); 
        ?>          
    </form>
	</div><?php
}

function add_global_menu_item()
{
	add_menu_page("Global Theme", "Global Theme", "manage_options", "global-panel", "global_settings_page", null, 99);
	add_submenu_page( 'global-panel', 'Home Page Sections', 'Home Page', 'manage_options', 'global-panel');
	add_submenu_page( 'global-panel', 'About Page Sections', 'About Page', 'manage_options', 'global_about', 'global_about_page');
	add_submenu_page( 'global-panel', 'Misc Sections', 'Miscelleneous', 'manage_options', 'global_misc', 'global_about_page');
}

add_action("admin_menu", "add_global_menu_item");

function display_text1_element()
{
	?>
    	<textarea name="text1" id="twitter_url" ><?php echo get_option('twitter_url'); ?></textarea>
    <?php
}


function display_text2_element()
{
	?>
    	<textarea name="text2" id="twitter_url" ><?php echo get_option('twitter_url'); ?></textarea>
    <?php
}

function display_text3_element()
{
	?>
    	<textarea name="text3" id="twitter_url" ><?php echo get_option('twitter_url'); ?></textarea>
    <?php
}

function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_f_panel_fields()
{
	add_settings_section("section", "Home Page Image", null, "global-options");
	
	add_settings_field("twitter_url", "Image Url", "display_twitter_element", "global-options", "section");

    register_setting("section", "twitter_url");
}

add_action("admin_init", "display_f_panel_fields");

function display_f1_panel_fields()
{
	add_settings_section("section1", "Section One Fields", null, "global-options");
	
	add_settings_field("twitter_url", "Title", "display_twitter_element", "global-options", "section1");
    add_settings_field("facebook_url", "Text", "display_text1_element", "global-options", "section1");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
}

add_action("admin_init", "display_f1_panel_fields");

function display_f2_panel_fields()
{
	add_settings_section("section2", "Section Two Fields", null, "global-options");
	
	add_settings_field("twitter_url", "Title", "display_twitter_element", "global-options", "section2");
    add_settings_field("facebook_url", "Text", "display_text2_element", "global-options", "section2");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
}

add_action("admin_init", "display_f2_panel_fields");

function display_f3_panel_fields()
{
	add_settings_section("section3", "Section Three Fields", null, "global-options");
	
	add_settings_field("twitter_url", "Title", "display_twitter_element", "global-options", "section3");
    add_settings_field("facebook_url", "Text", "display_text3_element", "global-options", "section3");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
}

add_action("admin_init", "display_f3_panel_fields");