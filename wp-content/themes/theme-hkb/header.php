<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Kitchen &amp; Beyond</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/flexslider.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/jetmenu.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="//use.typekit.net/vuo8jjd.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <?php wp_head(); ?> 
  </head>
  <body <?php body_class(); ?>>
  
      
      <header class="container-fluid">
      		<?php if ( is_user_logged_in() ) { ?>
            <div class="cerrar-head">
            	<p><a href="<?php echo wp_logout_url(get_permalink()); ?>">Cerrar sesión <i class="fa fa-times"></i></a></p>
            </div>
			<? } else { ?>
            <? } ?>
            
          <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 text-center logo no-column">
            <a href="<?php echo get_option('siteurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logoHKB.svg" alt=""></a>
          </div>
          <div id="home-menu" class="col-lg-4 col-md-8 col-sm-12 col-xs-12 no-column" >
            <ul id="jetmenu" class="jetmenu grey">
                  
                    <li <?php if ( has_category('8')) { ?>class="active"<? } else { ?> <? } ?>><a href="#">Cocina</a>
                        <div class="megamenu full-width">
                        
                        	<div class="wrapper-in box fwidth fleft">
                            	<div class="container-fluid no-column">
                                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                                    	<h4>Lo mejor de Cocina</h4>
                                    </div>
                                    <div class="clearfix"></div>
                                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left zona-primaria">
                                    	
                                        <div class="clearfix"></div>
                                        <div class="container-fluid productos-menu">
											<?php
                                            $args = array(
                                                'posts_per_page' => 2,
                                                'product_cat' => 'cocina',
                                                'post_type' => 'product',
                                                'orderby' => 'rand',
                                            );
                                            $the_query = new WP_Query( $args );
                                            // The Loop
                                            
                                            while ( $the_query->have_posts() ) {
                                            $the_query->the_post(); ?>
                                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center no-column">
                                            	<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('full'); ?> </a>
                                                <h2><? woocommerce_get_template( 'loop/price.php' ); ?></h2>
                                                <p><?php the_title(); ?></p>
                                                <?php woocommerce_template_loop_add_to_cart(); ?>
                                            </div>
                                            <? } wp_reset_postdata(); ?>
                                            
                                        </div>
                                    </div> 
                                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zona-secundaria text-left">
                                    	<h2>¿Qué encontrarás en cocina?</h2>
                                        <?php woocommerce_subcats_from_parentcat_by_ID('8'); ?>
                                    </div>
                                </div>
                            </div>
                            <!--wrapper-->
                        </div>
                    </li>				
                    <li><a href="#">Baño</a></li>
                    <li><a href="#">Cama</a></li>
                    <li><a href="#">Algo más</a></li>
                    

                    
                    
                </ul>          
                <?php /*?><?php ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?><?php */?>
          </div>
          <div id="zona-secundaria" class="col-lg-6 col-md-8 col-sm-12 col-xs-12 text-center no-column" >
          	<div class="container-fluid no-column">
            	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 form no-column no-column">
                <div id="tooltip-search" class="ocultar">nada</div>
				<?php get_search_form(); ?>                  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 links no-column">
                <?php if ( is_user_logged_in() ) { ?>
                    <div class="logged">
                	Hola <?php $current_user = wp_get_current_user();  echo '' . $current_user->user_firstname . '.'; ?>
                    </div>
					<? } else { ?>
						<?php if ( is_user_logged_in() ) { ?>
                        <? } else { ?>
                        <div class="not-logged">
							<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?loginFacebook=1&redirect=<?php echo get_option('siteurl'); ?>" onclick="window.location = '<?php echo get_option('siteurl'); ?>/wp-login.php?loginFacebook=1&redirect='+window.location.href; return false;">Click here to login or register with Facebook</a>
                                                    
                        <?php /*?><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Zona login')) : ?>
                        <?php endif; ?><?php */?>
                        </div>
                        <? } ?>
                        <? } ?>
                        
                      

                    
                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 carro text-center no-column" >
                	<?php /*?><a href="http://localhost:8888/hkb/cart/"><i class="fa fa-shopping-cart fa-2x"></i></a><?php */?>
					<?php /*?><?php global $woocommerce; ?>
                    <?php
                    $my_cart_count = $woocommerce->cart->cart_contents_count;
                    if ($my_cart_count > 0) :
                    ?>
                    <?php echo $my_cart_count; ?>
                    <?php
                    endif;
                    ?><?php */?>
                    <?php if ( is_user_logged_in() ) { ?>
                    <?php wp_nav_menu( array('menu' => 'Carrito' )); ?>
                    <? } else { ?>
                    <? } ?>
                </div>
                
            </div>
          </div>
      </header>
      
		<?php
        if ( is_home() ) { ?>
        <? } else { ?>
        
        <div class="container no-column">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="bread" class="box fwidth fleft">
                    <?php if(function_exists('bcn_display'))
                    {
                    bcn_display();
                    }?>
                </div>
            </div>
        </div>
        <? } ?>      
	<div class="wrapper-full box fwidth fleft">