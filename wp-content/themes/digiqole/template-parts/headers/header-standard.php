<?php
   $class = '';
   $title = '';
   $header_nav_search_section    = 'yes';
   $header_nav_sticky            = 'no';
   $header_top_info_show         = 'no';
   $header_social_share         = 'no';
 
   if ( defined( 'FW' ) ) {

      $header_settings = digiqole_option('theme_header_default_settings');

      if(isset($header_settings['no'])) {
      
        $header_top_info_show = $header_settings['no']['header_top_info_show']; 
        $header_nav_search_section = $header_settings['no']['header_nav_search_section']; 
        $header_nav_sticky = $header_settings['no']['header_nav_sticky']; 
      
        $header_social_share = $header_settings['no']['header_social_share']; 
        
      } 
   
   }
   
  
   
  

?>
 <?php if(defined( 'FW' ) && $header_top_info_show=='yes' ): ?>
<div class="topbar topbar-gray">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="tranding-bg-white">
               <?php get_template_part( 'template-parts/newsticker/news', 'ticker' );  ?>
            </div>
         </div>
         <div class="col-md-4 xs-center align-self-center text-right">
            <ul class="top-info">
               <li> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>  
                <?php echo date_i18n(get_option('date_format')); ?>
               </li>
            </ul>
         </div>
    
      <!-- end col -->
      </div>
   <!-- end row -->
   </div>
<!-- end container -->
</div>
<?php endif; ?>

<div class="header-middle-area">
   <div class="container">
      <div class="row">
          <div class="col-md-4 col-lg-3 align-self-center">
              <div class="logo-area">
                  <?php
                       
                        $digiqole_logo_url =  digiqole_src(
                           'general_dark_logo',
                           DIGIQOLE_IMG . '/logo/logo-dark.png'
                        );
                        $digiqole_light_logo_url =  digiqole_src(
                           'general_light_logo',
                           DIGIQOLE_IMG . '/logo/logo-light.png'
                        );
                      
                    ?> 
                     <?php echo  digiqole_text_logo()?'<h1 class="logo-title">':''; ?>
                        <a rel='home' class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                           <?php if(digiqole_text_logo()): ?> 
                           <?php echo esc_html(digiqole_text_logo()); ?>
                           <?php else: ?>
                              <img  class="img-fluid logo-light" src="<?php echo esc_url($digiqole_light_logo_url); ?>" alt="<?php echo get_bloginfo('name') ?>">
                              <img  class="img-fluid logo-dark" src="<?php echo esc_url($digiqole_logo_url); ?>" alt="<?php echo get_bloginfo('name') ?>">
                           <?php endif; ?>
                        </a>
                     <?php echo  digiqole_text_logo()?'</h1>':''; ?>   
              </div>
          </div>    
         <!-- col end  -->
         <div class="col-md-8 col-lg-9 align-self-center">
            <div class="banner-img text-right">
					<?php digiqole_ad('top_banner', 'banner.jpg'); ?>
				</div>
         </div>
         <!-- col end  -->
      </div>
   </div>                     
</div>
<header id="header" class="header header-gradient">
      <div class=" header-wrapper <?php echo esc_attr($header_nav_sticky=='yes'?'navbar-sticky':''); ?> ">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                     <?php echo  digiqole_text_logo()?'<h1 class="logo-title">':''; ?>
                        <a class="logo d-none" href="<?php echo esc_url(home_url('/')); ?>">
                           <?php if(digiqole_text_logo()): ?> 
                           <?php echo esc_html(digiqole_text_logo()); ?>
                           <?php else: ?>
                              <img  class="img-fluid" src="<?php echo esc_url($digiqole_logo_url); ?>" alt="<?php echo get_bloginfo('name') ?>">
                           <?php endif; ?>
                              
                        </a>
                     <?php echo  digiqole_text_logo()?'</h1>':''; ?>    
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="ts-icon ts-icon-menu"></i></span>
                  </button>
                  
                     <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                   
                     <?php if(defined( 'FW' )): ?>
                     <?php
                        if($header_social_share=='yes'):
                           $social_links = digiqole_option('general_social_links',[]);  ?>
                           <ul class="social-links text-right">
                        
                                 <?php 
                                 
                                    if(count($social_links)):   
                                       foreach($social_links as $sl):
                                          if( isset( $sl['icon_class']) && isset($sl['ttile']) ) :
                                             $class = 'ts-' . str_replace('fa fa-', '', $sl['icon_class']);
                                             $title = $sl["title"];
                                          endif; 
                                 ?>
                                       <li class="<?php echo esc_attr($class); ?>">
                                          <a target="_blank" title="<?php echo esc_attr( $title = $sl["title"]); ?>" href="<?php echo esc_url($sl['url']); ?>">
                                          <span class="social-icon">  <i class="<?php echo esc_attr($sl['icon_class']); ?>"></i> </span>
                                          </a>
                                       </li>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </ul>
                           <?php endif; ?>
                        <!-- end social links -->
                        
                        <div class="nav-search-area">
                           <?php if($header_nav_search_section=='yes'): ?>
                              <div class="header-search-icon">
                                 <a href="#modal-popup-2" class="navsearch-button nav-search-button xs-modal-popup"><i class="ts-icon ts-icon-search1"></i></a>
                              </div>
                           <?php endif; ?>
                           <!-- xs modal -->
                           <div class="zoom-anim-dialog mfp-hide modal-searchPanel ts-search-form" id="modal-popup-2">
                              <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                    <div class="xs-search-panel">
                                          <?php get_search_form(); ?>
                                    </div>
                                 </div>
                              </div>
                           </div><!-- End xs modal --><!-- end language switcher strart -->
                        </div>
                        
                     <?php endif; ?>
               <!-- Site search end-->
                                             
                           
            </nav>
         </div><!-- container end-->
      </div>
</header>
