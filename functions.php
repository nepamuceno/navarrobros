<?php 

/* attach theme scripts */
function navarro_theme_load_scripts(){
	// attach navarro.css
	//wp_enqueue_style("navarro.css", get_template_directory_uri (). "/assets/css/navarro.css", arrays, "1.0", "all");
    wp_enqueue_style("bootstrap", get_template_directory_uri(). "/assets/vendor/bootstrap/css/bootstrap.min.css", arrays, "1.0", "all");
	//attach style.css
	//wp_enqueue_style("theme-style", get_stylesheet_uri(), arrays, "1.0", "all");
	wp_enqueue_style("blog-home", get_template_directory_uri()."/assets/css/blog-home.css", arrays, "1.0", "all");
	wp_enqueue_style("style", get_stylesheet_uri(), arrays, "1.0", "all");

	//attach script.js and jquery
	//wp_enqueue_script("navarro-js", get_template_directory_uri()."/assets/js/navarro.js", array("jquery"), "1.0", true);
	//wp_enqueue_script("jquery-min", get_template_directory_uri()."/assets/vendor/jquery/jquery.min.js", array("jquery"), "1.0", true);
	wp_enqueue_script("bootstrap", get_template_directory_uri()."/assets/vendor/bootstrap/js/bootstrap.bundle.min.js", array("jquery"), "1.0", true);

}

add_action("wp_enqueue_scripts", "navarro_theme_load_scripts");

/* attach navigation menus
  https://www.youtube.com/watch?v=9Bdj9WCQgBo&list=PLT9miexWCpPUKzUhMvXiBqoFGsnqBPZ_v&index=9
*/
function navarro_theme_nav_config(){
	register_nav_menus(array(
		// menu_id/lacation => menu name
		"theme_primary_menu" => "Primary Menu NB",
		"theme_footer_menu" => "Footer Menu NB",
		"theme_sidebar_menu" => "Left Sidebar Menu NB"
	));
}

add_action("after_setup_theme", "navarro_theme_nav_config");
