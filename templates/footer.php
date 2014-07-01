<footer class="content-info" role="contentinfo">
  <div class="container footer-info">
	  
    <?php dynamic_sidebar('sidebar-footer'); ?>
	<?php if( get_theme_mod( 'hide_copyright' ) == '') { ?>
	    <?php esc_attr_e('©', 'responsive'); ?> <?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"> 
	        <?php echo get_theme_mod( 'copyright_textbox', 'No copyright information has been saved yet.' ); ?>
	    </a> - Powered by <?php echo get_theme_mod( 'powered_by', 'Wordpress' ); ?>
	<?php } // end if ?>
	 
     	<div class="footer-social-media col-lg-8 pull-right">
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
     		    }
     ?>
     	</div> 
  </div>
  
</footer>

<?php wp_footer(); ?>
