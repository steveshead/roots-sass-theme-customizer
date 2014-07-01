<header class="banner" role="banner">

<?php
    $logo_placement = get_theme_mod( 'logo_placement' );
    if( $logo_placement != '' ) {
        switch ( $logo_placement ) {
            case 'left':
                echo '<style type="text/css">';
                echo '.site-logo img { float: left; }';
                echo '</style>';
                break;
            case 'right':
                echo '<style type="text/css">';
                echo '.site-logo img { float: right; }';
                echo '</style>';
                break;
            case 'center':
                echo '<style type="text/css">';
                echo '.site-logo img { float: none !important;margin:0 auto; }';
                echo '</style>';
                break;
        }
    }
?>
  
<?php $theme_header_bg = get_theme_mod('theme_header_bg'); ?>
 
 <?php
     $header_background_repeat = get_theme_mod( 'header_background_repeat' );
     if( $header_background_repeat != '' ) {
         switch ( $header_background_repeat ) {
             case 'no-repeat':
	             echo '<style type="text/css">';
	             echo '.inner-header { background-repeat:no-repeat;background-size:cover; }';
	             echo '</style>';
                 break;
             case 'repeat':
                 echo '<style type="text/css">';
                 echo '.inner-header { background-repeat:repeat; }';
                 echo '</style>';
                 break;
             case 'repeat-x':
                 echo '<style type="text/css">';
                 echo '.inner-header { background-repeat:repeat-x; }';
                 echo '.inner-header { float: none; margin-left: auto; margin-right: auto; }';
                 echo '</style>';
                 break;
             case 'repeat-y':
                 echo '<style type="text/css">';
                 echo '.inner-header { background-repeat:repeat-y; }';
                 echo '.inner-header { float: none; margin-left: auto; margin-right: auto; }';
                 echo '</style>';
                 break;
         }
     }
 ?>
 
<?php
     $header_background_attachment = get_theme_mod( 'header_background_attachment' );
     if( $header_background_attachment != '' ) {
         switch ( $header_background_attachment ) {
             case 'fixed':
	             echo '<style type="text/css">';
	             echo '.inner-header { background-attachment:fixed; }';
	             echo '</style>';
                 break;
             case 'repeat':
                 echo '<style type="text/css">';
                 echo '.inner-header { background-attachment:scroll; }';
                 echo '</style>';
                 break;
         }
     }
?>

<div class="inner-header" style="background-image:url('<?php echo $theme_header_bg ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				  <?php ( get_theme_mod( 's2_base_logo' ) ) ; ?>
				      <div class='site-logo <?php echo (get_theme_mod( 'logo_container' ) ) ; ?>'>
				          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 's2_base_logo' ) ); ?>' class="img-responsive" alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				      </div>
				  
				      <hgroup>
				          <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
				          <h4 class='site-description'><?php bloginfo( 'description' ); ?></h4>
				      </hgroup>
			  
				</div>
			</div>
		</div>
	</div>
	
	<div class="top-nav">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
		  				<div class="social-media pull-right col-md-6">
							<?php $social_sites = my_customizer_social_media_array();

							    foreach($social_sites as $social_site) {
							        if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
							            $active_sites[] = $social_site;
							        }
							    }

							    if(!empty($active_sites)) {
							        echo "<ul class='social-media-icons pull-right'>";
							        foreach ($active_sites as $active_site) {?>
							            <li>
							                <a href="<?php echo get_theme_mod( $active_site ); ?>">
							                    <?php if( $active_site == "vimeo") { ?>
							                        <i class="fa fa-<?php echo $active_site; ?>-square"></i> <?php
							                    } else { ?>
							                        <i class="fa fa-<?php echo $active_site; ?>"></i><?php
							                    } ?>
							                </a>
							            </li><?php
							        }
							        echo "</ul>";
							    } ?>
		  				</div>
				<div class="col-md-6"> 				
					<nav role="navigation" class="site-navigation header-navigation">
						<h1 class="assistive-text"><?php _e( '<span>&#9776;</span> Head Menu', 's2_base' ); ?></h1>
							<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 's2_base' ); ?>"><?php _e( 'Skip to content', 's2_base' ); ?></a></div>

						<?php
							wp_nav_menu( array( 
								'theme_location'	=> 'top_menu',
								'container'			=> '',
								'fallback_cb'		=> 'wp_page_menu'
							) );
						?>
					</nav><!-- .site-navigation .header-navigation -->	
			</div>			
				</div>
			</div>
		</div>
	</div>
</header>
