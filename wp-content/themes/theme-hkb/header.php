<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Kitchen and Beyond</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/flexslider.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/jetmenu.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet">

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
  <body>
      
      <header class="container-fluid">
          <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 text-center logo no-column">
            <a href="<?php echo get_option('siteurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logoHKB.svg" alt=""></a>
          </div>
          <div id="home-menu" class="col-lg-4 col-md-8 col-sm-12 col-xs-12 no-column" >
            <ul id="jetmenu" class="jetmenu grey">
                    
                    <li class="active"><a href="#">Cocina</a>
                        <div class="megamenu full-width">
                        
                        	<div class="wrapper-in box fwidth fleft">
                            	<div class="container-fluid">
                                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                                    	<h4>Lo mejor de Cocina</h4>
                                    </div>
                                    <div class="clearfix"></div>
                                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left zona-primaria">
                                    	
                                        <div class="clearfix"></div>
                                        <div class="container-fluid productos-menu">
                                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                                            	<img src="<?php bloginfo('template_url'); ?>/img/img-menu-cocina.jpg" alt="">
                                                <h2>$56.000</h2>
                                                <p>Producto</p>
                                                <button class="solicitar">Comprar</button>
                                            </div>
                                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                                            	<img src="<?php bloginfo('template_url'); ?>/img/img-menu-cocina.jpg" alt="">
                                                <h2>$56.000</h2>
                                                <p>Producto</p>
                                                <button class="solicitar">Comprar</button>
                                            </div>
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
          </div>
          <div id="zona-secundaria" class="col-lg-6 col-md-8 col-sm-12 col-xs-12 text-center no-column" >
          	<div class="container-fluid no-column">
            	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-6 form no-column no-column">
                  <form>
                    <input type="text" class="form-control empty" placeholder="&#xF002;" style="font-family:Arial, FontAwesome">
                  </form>
                  <p>ayuda</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 links no-column">
                	<div>
                <?php if ( is_user_logged_in() ) { ?>
                	Bienvenido <?php $user_info = get_userdata(1); $first_name = $user_info->first_name; echo "$first_name"; ?>. <a href="<?php echo wp_logout_url( home_url() ); ?>" style="font-size:10px;">Cerrar sesión</a>
					<? } else { ?>
                    	<a href="#">Ingresar</a> <span class="hidden-xs">|</span> <a href="#">Registrarse</a>
						<? } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-2 carro text-center no-column" >
                	<a href="http://localhost:8888/hkb/cart/"><i class="fa fa-shopping-cart fa-2x"></i></a>
					<?php global $woocommerce; ?>
                    <?php
                    $my_cart_count = $woocommerce->cart->cart_contents_count;
                    if ($my_cart_count > 0) :
                    ?>
                    <?php echo $my_cart_count; ?>
                    <?php
                    endif;
                    ?>
                    
                    <?php wp_nav_menu( array('menu' => 'Carrito' )); ?>
                </div>
                
            </div>
          </div>
      </header>
