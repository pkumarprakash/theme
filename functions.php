<?php
	function add_custom_scripts_styles()
	{
		wp_register_style
		(
			'card-style', //Handle
			get_template_directory_uri().'/style.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style');
		
		wp_register_style
		(
			'card-style1', //Handle
			get_template_directory_uri().'/js/plugins/jquery.bxslider/jquery.bxslider.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style1');
		
		wp_register_style
		(
			'card-style2', //Handle
			get_template_directory_uri().'/js/plugins/jquery.customscroll/jquery.mCustomScrollbar.min.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style2');
		
				wp_register_style
		(
			'card-style3', //Handle
			get_template_directory_uri().'/js/plugins/jquery.mediaelement/mediaelementplayer.min.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style3');
		
				wp_register_style
		(
			'card-style4', //Handle
			get_template_directory_uri().'/js/plugins/jquery.fancybox/jquery.fancybox.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style4');
		
		wp_register_style
		(
			'card-style5', //Handle
			get_template_directory_uri().'/js/plugins/jquery.owlcarousel/owl.carousel.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style5');
		
		wp_register_style
		(
			'card-style6', //Handle
			get_template_directory_uri().'/js/plugins/jquery.owlcarousel/owl.theme.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style6');
		
		wp_register_style
		(
			'card-style7', //Handle
			get_template_directory_uri().'/js/plugins/jquery.optionpanel/option-panel.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style7');
		
		wp_register_style
		(
			'card-style8', //Handle
			get_template_directory_uri().'/colors/theme-color.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style8');
		
		wp_register_style
		(
			'card-style9', //Handle
			get_template_directory_uri().'/awwwards.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style9');
		
		wp_register_style
		(
			'card-style9', //Handle
			get_template_directory_uri().'/fonts/icomoon/style.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style9');
		
		wp_register_style
		(
			'card-style9', //Handle
			get_template_directory_uri().'/fonts/map-icons/css/map-icons.min.css', //Source
			array(), //Dependencies
			false, //Version
			'screen' //Media
		);
		wp_enqueue_style('card-style9');
		
		
		wp_enqueue_script('jquery');
		
		wp_register_script
		(
			'card-script', //Handle
			get_template_directory_uri().'/js/site.min.js', //Source 
			array('jquery'), //Dependencies
			false, //Version
			true //Load in footer
		);		
		wp_enqueue_script('card-script');
		
		wp_register_script
		(
			'card-script1', //Handle
			get_template_directory_uri().'/js/libs/modernizr.js', //Source 
			array('jquery'), //Dependencies
			false, //Version
			true //Load in footer
		);		
		wp_enqueue_script('card-script1');

	}
	add_action('wp_enqueue_scripts', 'add_custom_scripts_styles');
/*	
	function card_menu() 
	{
		   register_nav_menus( array( 'main' => 'Main Nav' ) );
	}

	add_action('init', 'card_menu');	
	
	
	function cool_blue_sidebar() 
	{
		   register_sidebar
		   ( 
				array 
				(
					'name'=> 'Primary Sidebar',
					'id'=> 'primary-widget-area',
					'description' => 'The primary widget area',
					'before_widget' => '<div class="sidemenu">',
					'after_widget'=> "</div>",
					'before_title'=> '<h3>',
					'after_title' => '</h3>' 
				)
			);

	}

	add_action('init', 'cool_blue_sidebar');	
	
	*/
?>
