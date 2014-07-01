<?php

/** To Do
 * Not all Google fonts showing
*/

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */

function s2_base_customizer( $wp_customize ) {
	
/**
 * Change default section settings
*/

	$wp_customize->get_control( 'background_color'  )->section   = 'background_image';
	$wp_customize->get_section( 'background_image'  )->title     = 'Background Settings';
	$wp_customize->get_section( 'title_tagline'     )->title     = 'Site Title / Logo';
	$wp_customize->get_section( 'static_front_page' )->title     = 'Home Page Settings';
	$wp_customize->get_section( 'nav' )->priority  = 25;
	$wp_customize->get_section( 'static_front_page' )->priority  = 29;
	$wp_customize->get_section( 'background_image' )->priority  = 19;

/**
 * Frontpage Header settings
 */

	$wp_customize->add_section( 'frontpage_header_section', array(
	        'title' => 'Frontpage Header Settings',
	        'description' => 'Customize the front page header in this section.',
	        'priority' => 10,
	    ) );
		
		$wp_customize->add_setting( 'frontpage_header_height', array(
				'default' => '',
				'sanitize_callback' => 's2_base_sanitize_text',
		    ) );

		$wp_customize->add_control( 'frontpage_header_height', array(
		        'label' => 'Frontpage Header Height',
		        'section' => 'frontpage_header_section',
		        'type' => 'text',
		    ) );
	
		$wp_customize->add_setting( 'frontpage_header_background_color', array(
			'default' => '#FFFFFF'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'frontpage_header_background_color', array(
			 'label' => 'Frontpage Header Background Color',
			 'section' => 'frontpage_header_section',
			 'settings' => 'frontpage_header_background_color',
		)) );

		$wp_customize->add_setting( 'frontpage_theme_header_bg' );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'frontpage_theme_header_bg',array(
		            'label' => 'Frontpage Header Background Image',
		            'section' => 'frontpage_header_section',
		            'settings' => 'frontpage_theme_header_bg',
		            'priority' => 1
		) ) );
		
		$wp_customize->add_setting( 'frontpage_header_background_repeat', array(
				'default' => 'no-repeat',
		    ) );

		$wp_customize->add_control( 'frontpage_header_background_repeat', array(
				'label'    => __( 'Frontpage Header Background Repeat' ),
				'section'  => 'frontpage_header_section',
				'settings' => 'frontpage_header_background_repeat',
				'type'     => 'radio',
	            'priority' => 2,
				'choices'  => array(
					'no-repeat' => 'No Repeat',
					'tile'  => 'Tile',
					'repeat-x' => 'Tile Horizontally',
					'repeat-y' => 'Tile Vertically',
		), ) );
		
		$wp_customize->add_setting( 'frontpage_header_background_attachment', array(
				'default' => 'no-repeat',
		    ) );

		$wp_customize->add_control( 'frontpage_header_background_attachment', array(
				'label'    => __( 'Frontpage Header Background Attachment' ),
				'section'  => 'frontpage_header_section',
				'settings' => 'frontpage_header_background_attachment',
				'type'     => 'radio',
	            'priority' => 3,
				'choices'  => array(
					'fixed' => 'Fixed',
					'scroll'  => 'Scroll',
		), ) );
		
/**
* Inner Page Header settings
*/

$wp_customize->add_section( 'header_settings_section', array(
        'title' => 'Inner Page Header Settings',
        'description' => 'This is the section for the header settings.',
        'priority' => 15,
    ) );

	$wp_customize->add_setting( 'header_height', array(
			'default' => '',
			'sanitize_callback' => 's2_base_sanitize_text',
	    ) );

	$wp_customize->add_control( 'header_height', array(
	        'label' => 'Header Height',
	        'section' => 'header_settings_section',
	        'type' => 'text',
	    ) );

	$wp_customize->add_setting( 'header_background_color', array(
		'default' => '#FFFFFF'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
		'label' => 'Header Background Color',
		'section' => 'header_settings_section',
		'settings' => 'header_background_color',
	)) );

	$wp_customize->add_setting( 'theme_header_bg' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'theme_header_bg',array(
	            'label' => 'Header Background Image',
	            'section' => 'header_settings_section',
	            'settings' => 'theme_header_bg',
	            'priority' => 1
	) ) );

	$wp_customize->add_setting( 'header_background_repeat', array(
			'default' => 'no-repeat',
	    ) );

	$wp_customize->add_control( 'header_background_repeat', array(
			'label'    => __( 'Header Background Repeat' ),
			'section'  => 'header_settings_section',
			'settings' => 'header_background_repeat',
			'type'     => 'radio',
            'priority' => 2,
			'choices'  => array(
				'no-repeat' => 'No Repeat',
				'tile'  => 'Tile',
				'repeat-x' => 'Tile Horizontally',
				'repeat-y' => 'Tile Vertically',
	), ) );

	$wp_customize->add_setting( 'header_background_attachment', array(
			'default' => 'no-repeat',
	    ) );

	$wp_customize->add_control( 'header_background_attachment', array(
			'label'    => __( 'Header Background Attachment' ),
			'section'  => 'header_settings_section',
			'settings' => 'header_background_attachment',
			'type'     => 'radio',
            'priority' => 3,
			'choices'  => array(
				'fixed' => 'Fixed',
				'scroll'  => 'Scroll',
	), ) );
		
/**
 * Logo settings
 */

	$wp_customize->add_setting( 's2_base_logo', array(
        'priority' => 20,
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 's2_base_logo', array(
	    'label'    => __( 'Logo', 's2_base' ),
	    'section'  => 'title_tagline',
	    'settings' => 's2_base_logo',
	) ) );
	
	$wp_customize->add_setting( 'logo_container', array(
		'default' => 'col-lg-2',
	) );
	   
   $wp_customize->add_setting( 'logo_placement', array(
           'default' => 'left',
   ) );

   $wp_customize->add_control( 'logo_placement', array(
           'type' => 'radio',
           'label' => 'Logo placement',
           'section' => 'title_tagline',
           'choices' => array(
               'left' => 'Left',
               'right' => 'Right',
               'center' => 'Center',
   ), ) );
   
/**
* Nav Sections
*/

   	$wp_customize->add_setting( 'nav_background_color', array(
   		'default' => '#f8f8f8',
   	) );

   	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_background_color', array(
   		'label' => 'Navbar Background Color',
   		'section' => 'nav',
   		'settings' => 'nav_background_color',
        'priority' => 25,
   	) ) );	

   	$wp_customize->add_setting( 'topnav_background_color', array(
   		'default' => '#f8f8f8'
   	) );

   	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'topnav_background_color', array(
   		'label' => 'Lower Navbar Background Color',
   		'section' => 'nav',
   		'settings' => 'topnav_background_color',
   	) ) );	
	
  	$wp_customize->add_setting( 'nav_brand_color', array(
  		'default' => '#777777',
  	) );

  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_brand_color', array(
  		'label' => 'Navbar Brand Text Color',
  		'section' => 'nav',
  		'settings' => 'nav_brand_color',
  	) ) );
	
   	$wp_customize->add_setting( 'navbar_text_color', array(
   		'default' => '#777777'
   	) );

   	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar_text_color', array(
   		'label' => 'Navbar Text Color',
   		'section' => 'nav',
   		'settings' => 'navbar_text_color',
   	) ) );	
	
   	$wp_customize->add_setting( 'topnav_text_color', array(
   		'default' => ''
   	) );

   	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'topnav_text_color', array(
   		'label' => 'Lower Navbar Text Color',
   		'section' => 'nav',
   		'settings' => 'topnav_text_color',
   	) ) );	
   
/** 
* Typography Section
*/
   
      $wp_customize->add_section( 'typography_section', array(
          'title' => 'Typography',
          'description' => 'Theme typography settings.',
          'priority' => 30, 
      ) );
   
/*       require_once dirname(__FILE__) . '/google-font-dropdown-custom-control.php';
      $wp_customize->add_setting( 'google_font_setting', array(
          'default'        => '',
      ) );
   
     $wp_customize->add_control( new Google_Font_Dropdown_Custom_Control( $wp_customize, 'google_font_setting', array(
          'label'   => 'Google Font Settings',
          'section' => 'typography_section',
          'settings'   => 'google_font_setting',
      ) ) ); */

 		$wp_customize->add_setting( 'body_font', array(
  		        'default' => 'Helvetica Neue',
  		    ) );

  		$wp_customize->add_control( 'body_font', array(
  		        'type' => 'select',
  		        'label' => 'Body Font',
  		        'section' => 'typography_section',
				'priority' => 1,
  		        'choices' => array(
  		            'Helvetica Neue' => 'Helvetica Neue',
  		            'Verdana' => 'Verdana',
  		            'Georgia' => 'Georgia',
  		            'Palatino Linotype' => 'Palatino',
					'Comic Sans MS' => 'Comic Sans',
					'Impact' => 'Impact',
					'Lucida Sans Unicode' => 'Lucida Sans',
					'Lucida Console' => 'Lucida Console',
					'Tahoma' => 'Tahoma',
					'Trebuchet MS' => 'Trebuchet MS',
					'Arial' => 'Arial',
					'Courier New' => 'Courier New',
					'Times New Roman' => 'Times New Roman',
  		   ),) );
		   
    	$wp_customize->add_setting( 'body_font_weight', array(
     		    'default' => '400',
     	) );
		
  		$wp_customize->add_control( 'body_font_weight', array(
  		        'type' => 'select',
  		        'label' => 'Body Font Weight',
  		        'section' => 'typography_section',
				'priority' => 2,
  		        'choices' => array(
  		            '300' => 'Light',
  		            '400' => 'Normal',
  		            '700' => 'Bold',
  		   ),) );
		   
	      	$wp_customize->add_setting( 'body_font_color', array(
	      		'default' => '#333333'
	      	) );

	      	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_font_color', array(
	      		'label' => 'Body Font Color',
	      		'section' => 'typography_section',
	      		'settings' => 'body_font_color',
				'priority' => 3,
	      	) ) );	
			
			$wp_customize->add_setting( 'body_font_size', array(
					'default' => '',
			    ) );

			$wp_customize->add_control( 'body_font_size', array(
			        'label' => 'Body Font Size',
			        'section' => 'typography_section',
			        'type' => 'text',
					'priority' => 4,
			    ) );
				
	 		$wp_customize->add_setting( 'h1_font', array(
	  		        'default' => 'Helvetica Neue',
	  		    ) );

	  		$wp_customize->add_control( 'h1_font', array(
	  		        'type' => 'select',
	  		        'label' => 'H1 Font',
	  		        'section' => 'typography_section',
					'priority' => 5,
	  		        'choices' => array(
	  		            'Helvetica Neue' => 'Helvetica Neue',
	  		            'Verdana' => 'Verdana',
	  		            'Georgia' => 'Georgia',
	  		            'Palatino Linotype' => 'Palatino',
						'Comic Sans MS' => 'Comic Sans',
						'Impact' => 'Impact',
						'Lucida Sans Unicode' => 'Lucida Sans',
						'Lucida Console' => 'Lucida Console',
						'Tahoma' => 'Tahoma',
						'Trebuchet MS' => 'Trebuchet MS',
						'Arial' => 'Arial',
						'Courier New' => 'Courier New',
						'Times New Roman' => 'Times New Roman',
	  		   ),) );
	   
	    	$wp_customize->add_setting( 'h1_font_weight', array(
	     		    'default' => '400',
	     	) );
	
	  		$wp_customize->add_control( 'h1_font_weight', array(
	  		        'type' => 'select',
	  		        'label' => 'H1 Font Weight',
	  		        'section' => 'typography_section',
					'priority' => 6,
	  		        'choices' => array(
	  		            '300' => 'Light',
	  		            '400' => 'Normal',
	  		            '700' => 'Bold',
	  		   ),) );
	   
	      	$wp_customize->add_setting( 'h1_font_color', array(
	      		'default' => '#333333'
	      	) );

	      	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h1_font_color', array(
	      		'label' => 'H1 Font Color',
	      		'section' => 'typography_section',
	      		'settings' => 'h1_font_color',
				'priority' => 7,
	      	) ) );	
	
			$wp_customize->add_setting( 'h1_font_size', array(
					'default' => '',
			    ) );

			$wp_customize->add_control( 'h1_font_size', array(
			        'label' => 'H1 Font Size',
			        'section' => 'typography_section',
			        'type' => 'text',
					'priority' => 8,
			    ) );
				
		 		$wp_customize->add_setting( 'h2_font', array(
		  		        'default' => 'Helvetica Neue',
		  		    ) );

		  		$wp_customize->add_control( 'h2_font', array(
		  		        'type' => 'select',
		  		        'label' => 'H2 Font',
		  		        'section' => 'typography_section',
						'priority' => 9,
		  		        'choices' => array(
		  		            'Helvetica Neue' => 'Helvetica Neue',
		  		            'Verdana' => 'Verdana',
		  		            'Georgia' => 'Georgia',
		  		            'Palatino Linotype' => 'Palatino',
							'Comic Sans MS' => 'Comic Sans',
							'Impact' => 'Impact',
							'Lucida Sans Unicode' => 'Lucida Sans',
							'Lucida Console' => 'Lucida Console',
							'Tahoma' => 'Tahoma',
							'Trebuchet MS' => 'Trebuchet MS',
							'Arial' => 'Arial',
							'Courier New' => 'Courier New',
							'Times New Roman' => 'Times New Roman',
		  		   ),) );
	   
		    	$wp_customize->add_setting( 'h2_font_weight', array(
		     		    'default' => '400',
		     	) );
	
		  		$wp_customize->add_control( 'h2_font_weight', array(
		  		        'type' => 'select',
		  		        'label' => 'H2 Font Weight',
		  		        'section' => 'typography_section',
						'priority' => 10,
		  		        'choices' => array(
		  		            '300' => 'Light',
		  		            '400' => 'Normal',
		  		            '700' => 'Bold',
		  		   ),) );
	   
		      	$wp_customize->add_setting( 'h2_font_color', array(
		      		'default' => '#333333'
		      	) );

		      	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h2_font_color', array(
		      		'label' => 'H2 Font Color',
		      		'section' => 'typography_section',
		      		'settings' => 'h2_font_color',
					'priority' => 11,
		      	) ) );	
	
				$wp_customize->add_setting( 'h2_font_size', array(
						'default' => '',
				    ) );

				$wp_customize->add_control( 'h2_font_size', array(
				        'label' => 'H2 Font Size',
				        'section' => 'typography_section',
				        'type' => 'text',
						'priority' => 12,
				    ) );
		   
    		$wp_customize->add_setting( 'paragraph_font', array(
     		        'default' => 'Helvetica Neue',
     		    ) );

     		$wp_customize->add_control( 'paragraph_font', array(
     		        'type' => 'select',
     		        'label' => 'Paragraph Font',
     		        'section' => 'typography_section',
					'priority' => 13,
     		        'choices' => array(
     		            'Helvetica Neue' => 'Helvetica Neue',
     		            'Verdana' => 'Verdana',
     		            'Georgia' => 'Georgia',
     		            'Palatino Linotype' => 'Palatino',
   						'Comic Sans MS' => 'Comic Sans',
   						'Impact' => 'Impact',
   						'Lucida Sans Unicode' => 'Lucida Sans',
   						'Lucida Console' => 'Lucida Console',
   						'Tahoma' => 'Tahoma',
   						'Trebuchet MS' => 'Trebuchet MS',
   						'Arial' => 'Arial',
   						'Courier New' => 'Courier New',
   						'Times New Roman' => 'Times New Roman',
     		   ),) );
		   
       	$wp_customize->add_setting( 'paragraph_font_weight', array(
        		    'default' => '400',
        	) );
		
     		$wp_customize->add_control( 'paragraph_font_weight', array(
     		        'type' => 'select',
     		        'label' => 'Paragraph Font Weight',
     		        'section' => 'typography_section',
					'priority' => 14,
     		        'choices' => array(
     		            '300' => 'Light',
     		            '400' => 'Normal',
     		            '700' => 'Bold',
     		   ),) );
			   
   	      	$wp_customize->add_setting( 'paragraph_font_color', array(
   	      		'default' => '#333333'
   	      	) );

   	      	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paragraph_font_color', array(
   	      		'label' => 'Paragraph Font Color',
   	      		'section' => 'typography_section',
   	      		'settings' => 'paragraph_font_color',
   				'priority' => 15,
   	      	) ) );	
			
			$wp_customize->add_setting( 'paragraph_font_size', array(
					'default' => '',
			    ) );

			$wp_customize->add_control( 'paragraph_font_size', array(
			        'label' => 'Paragraph Font Size',
			        'section' => 'typography_section',
			        'type' => 'text',
					'priority' => 16,
			    ) );
   
/**
* Link Colors
*/

	$wp_customize->add_setting( 'link_color', array(
		'default' => '#428BCA',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label' => 'Link Color',
		'section' => 'typography_section',
		'settings' => 'link_color',
		'priority' => 33,
	) ) );

	$wp_customize->add_setting( 'link_hover_color', array(
		'default' => '#563d7c',		
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_color', array(
		'label' => 'Link Hover Color',
		'section' => 'typography_section',
		'settings' => 'link_hover_color',
		'priority' => 34,
	   ) ) );

/** 
 * Footer section settings
 */
	
    $wp_customize->add_section( 'footer_settings', array(
            'title' => 'Footer Settings',
            'description' => 'This is the section for the footer settings.',
            'priority' => 80, 
        ) );

	$wp_customize->add_setting( 'copyright_textbox', array(
			'default' => 'Default copyright text',
			'sanitize_callback' => 's2_base_sanitize_text',
	    ) );

	$wp_customize->add_control( 'copyright_textbox', array(
	        'label' => 'Copyright text',
	        'section' => 'footer_settings',
	        'type' => 'text',
	    ) );
	
	$wp_customize->add_setting( 'hide_copyright', array(
		'sanitize_callback' => 's2_base_sanitize_checkbox',
		) );
	
	$wp_customize->add_control( 'hide_copyright', array(
	        'type' => 'checkbox',
	        'label' => 'Hide copyright text',
	        'section' => 'footer_settings',
	    ) );
	
	$wp_customize->add_setting( 'powered_by', array(
	        'default' => 'Wordpress',
			'sanitize_callback' => 's2_base_sanitize_powered_by',
	    ) );

	$wp_customize->add_control( 'powered_by', array(
	        'type' => 'select',
	        'label' => 'Powered by:',
	        'section' => 'footer_settings',
	        'choices' => array(
	            'Wordpress' => 'Wordpress',
	            'Natural Gas' => 'Natural Gas',
	            'Inspiration' => 'Inspiration',
	            'Genius' => 'Genius',
	   ) ),
	   
   	$wp_customize->add_setting( 'footer_text_color', array(
   		'default' => '#777777',
   	) ),

   	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
   		'label' => 'Footer Text Color',
   		'section' => 'footer_settings',
   		'settings' => 'footer_text_color',
   	) ) ),
	   
   	$wp_customize->add_setting( 'footer_background_color', array(
   		'default' => '#f8f8f8'
   	) ),

   	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
   		'label' => 'Footer Background Color',
   		'section' => 'footer_settings',
   		'settings' => 'footer_background_color',
       ) )) );
	   
/**
* Custom CSS Section
*/

	   	$wp_customize->add_section( 'custom_code_section', array(
	   	     'title' => 'Custom',
	   	     'description' => 'Quickly add custom CSS or JavaScript to your site without any complicated setups. Ideal for minor style alterations or small snippets like Google Analytics. Do not place any &lt;style&gt; or &lt;script&gt; tags in these areas as they are already added for your convenience.',
	   	        'priority' => 70,
	       ) );

	   	$wp_customize->add_setting( 'custom_css', array(
	   	    'default'        => '',
	   	) );

	   	$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'custom_css', array(
	   	    'label'   => 'Custom CSS',
	   	    'section' => 'custom_code_section',
	   	    'settings'   => 'custom_css',
	   	) ) );

	   	$wp_customize->add_setting( 'custom_js', array(
	   	    'default'        => '',
	   	) );

	   	$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'custom_js', array(
	   	    'label'   => 'Custom Javascript',
	   	    'section' => 'custom_code_section',
	   	    'settings'   => 'custom_js',
	   	) ) );
	   
}

add_action( 'customize_register', 's2_base_customizer' );

/** 
 * Social media settings
 */

function my_customizer_social_media_array() {
 
    // store social site names in array
    $social_sites = array('twitter', 'facebook', 'google-plus', 'flickr', 'pinterest', 'youtube', 'vimeo', 'tumblr', 'dribbble', 'rss', 'linkedin', 'instagram');
 
    return $social_sites;
}

add_action('customize_register', 'my_add_social_sites_customizer');
 
function my_add_social_sites_customizer($wp_customize) {
 
    $wp_customize->add_section( 'my_social_settings', array(
            'title'          => 'Social Media Icons',
            'priority'       => 45,
    ) );
 
    $social_sites = my_customizer_social_media_array();
    $priority = 5;
 
    foreach($social_sites as $social_site) {
 
        $wp_customize->add_setting( "$social_site", array(
                'type'        => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback'        => 'esc_url_raw'
        ) );
 
        $wp_customize->add_control( $social_site, array(
                'label'   => __( "$social_site url:", 'social_icon' ),
                'section' => 'my_social_settings',
                'type'    => 'text',
                'priority'=> $priority,
        ) );
 
        $priority = $priority + 5;
    }
}

/** 
 * Custom background settings
 */

add_theme_support( 'custom-background' );

function s2_base_setup() {
	add_theme_support(
		'custom-background',
		array(
			'default-color' => '#ffffff',
			'default-image' => '',
			'default-repeat'     => 'no-repeat',
			'default-position-x' => 'center',
			'default-attachment' => 'fixed',

		)
	);
}

add_action( 'after_setup_theme', 's2_base_setup' );

/** 
 * Custom CSS text area class
 */

if (class_exists('WP_Customize_Control'))
{
     class Customize_Textarea_Control extends WP_Customize_Control {
	     public $type = 'textarea';
 
	     public function render_content() {
	         ?>
	         <label>
	         <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	         <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	         </label> 
	         <?php }
     }
}

/** 
 * Executing the functions
 */

function customizer_head_styles() {
	  $link_color = get_theme_mod( 'link_color' );
	  $link_hover_color = get_theme_mod( 'link_hover_color' );
	  $frontpage_theme_header_bg = get_theme_mod( 'frontpage_theme_header_bg');
	  $theme_header_bg = get_theme_mod( 'theme_header_bg');
	  $frontpage_header_background_color = get_theme_mod( 'frontpage_header_background_color' );
	  $header_background_color = get_theme_mod( 'header_background_color' );
	  $footer_background_color = get_theme_mod( 'footer_background_color' );
	  $footer_text_color = get_theme_mod( 'footer_text_color' );
	  $nav_background_color = get_theme_mod( 'nav_background_color' );
	  $nav_brand_color = get_theme_mod( 'nav_brand_color' );
	  $topnav_background_color = get_theme_mod( 'topnav_background_color' );
	  $navbar_text_color = get_theme_mod( 'navbar_text_color' );
	  $topnav_text_color = get_theme_mod( 'topnav_text_color' );
	  $frontpage_header_height = get_theme_mod( 'frontpage_header_height' );
	  $header_height = get_theme_mod( 'header_height' );
  	  $body_font = get_theme_mod( 'body_font' );
  	  $body_font_weight = get_theme_mod( 'body_font_weight' );
  	  $body_text_color = get_theme_mod( 'body_text_color' );
  	  $body_font_size = get_theme_mod( 'body_font_size' );
  	  $h1_font = get_theme_mod( 'h1_font' );
  	  $h1_font_weight = get_theme_mod( 'h1_font_weight' );
  	  $h1_font_color = get_theme_mod( 'h1_font_color' );
  	  $h1_font_size = get_theme_mod( 'h1_font_size' );
  	  $h2_font = get_theme_mod( 'h2_font' );
  	  $h2_font_weight = get_theme_mod( 'h2_font_weight' );
  	  $h2_font_color = get_theme_mod( 'h2_font_color' );
  	  $h2_font_size = get_theme_mod( 'h2_font_size' );
  	  $paragraph_font = get_theme_mod( 'paragraph_font' );
  	  $paragraph_font_weight = get_theme_mod( 'paragraph_font_weight' );
  	  $paragraph_font_color = get_theme_mod( 'paragraph_font_color' );
  	  $paragraph_font_size = get_theme_mod( 'paragraph_font_size' );
	  $custom_css = get_theme_mod( 'custom_css' );
	  ?>
	  
	<style type="text/css">
		a { color: <?php echo $link_color; ?>; }
		a:hover { color: <?php echo $link_hover_color; ?>;text-decoration:none; }
		.custom-header { background-color: <?php echo $frontpage_header_background_color; ?>; }
		.inner-header { background-color: <?php echo $header_background_color; ?>; }
		footer { background-color: <?php echo $footer_background_color; ?>; }
		footer { color: <?php echo $footer_text_color; ?>; }
		.navbar { background-color: <?php echo $nav_background_color; ?>; }
		.navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand { color: <?php echo $nav_brand_color; ?>; }
		.top-nav { background-color: <?php echo $topnav_background_color; ?>; }
		.custom-header { height: <?php echo $frontpage_header_height; ?>; }
		.inner-header { height: <?php echo $header_height; ?> !important; }
		.navbar-default .navbar-nav > li > a { color: <?php echo $navbar_text_color; ?>;font-weight:300; }
		.header-navigation ul li a, .social-media-icons a { color: <?php echo $topnav_text_color; ?>;font-weight:300; }
		body { font-family: '<?php echo $body_font; ?>';font-weight: <?php echo $body_font_weight; ?>;font-size: <?php echo $body_font_size; ?>;color: <?php echo $body_font_color ?> ; }
		h1 { font-family: '<?php echo $h1_font; ?>';font-weight: <?php echo $h1_font_weight; ?>;font-size: <?php echo $h1_font_size; ?>;color: <?php echo $h1_font_color ?> ; }
		h2 { font-family: '<?php echo $h2_font; ?>';font-weight: <?php echo $h2_font_weight; ?>;font-size: <?php echo $h2_font_size; ?>;color: <?php echo $h2_font_color ?> ; }		
		p { font-family: '<?php echo $paragraph_font; ?>';font-weight: <?php echo $paragraph_font_weight; ?>;font-size: <?php echo $paragraph_font_size; ?>;color: <?php echo $paragraph_font_color ?> ; }
		<?php echo $custom_css; ?>
	</style>

<?php
	$custom_js = get_theme_mod( 'custom_js' );
	if ($custom_js != "") {
	echo "<script>$custom_js</script>";
} ?>
		
<?php }
	
add_action( 'wp_head', 'customizer_head_styles' );

/** 
 * Data Sanitization functions
 */

function s2_base_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function s2_base_sanitize_powered_by( $input ) {
    $valid = array(
        'Wordpress' => 'Wordpress',
        'Natural Gas' => 'Natural Gas',
        'Inspiration' => 'Inspiration',
        'Genius' => 'Genius',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function s2_base_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function s2_base_sanitize_logo_placement( $input ) {
    $valid = array(
        'left' => 'Left',
        'right' => 'Right',
        'center' => 'Center',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function s2_base_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}