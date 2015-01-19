<?php get_header(); ?>      
     <section id="main" class="container-fluid no-column">
     
      
        <div id="slide-home" class="flexslider">
          <ul class="slides">
            <li>
	            <img src="<?php bloginfo('template_url'); ?>/img/img-slide-1.jpg" />
            </li>
            <li>
	            <img src="<?php bloginfo('template_url'); ?>/img/img-slide-1.jpg" />
            </li>
            
          </ul>
        </div>
        <!--slider-->  
        
        <div class="clearfix"></div>
        <div class="productos-destacados" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-column text-center">
        	<h1 id="productos-destacados-home">Productos <span>Destacados</span></h1>
            
            
<ul class="products">
	<?php
		
		
$args = array(
    'posts_per_page' => 1,
    'product_cat' => 'cama',
    'post_type' => 'product',
    'orderby' => 'rand',
);
$the_query = new WP_Query( $args );
// The Loop

while ( $the_query->have_posts() ) {
    $the_query->the_post(); ?>
    
    <a href="<?php the_permalink (); ?>"><? echo '' . get_the_title() . ''; ?></a>
    
<? } wp_reset_postdata(); ?>

</ul><!--/.products-->            
            
        </div>
        <!--bajada slider-->
        <div class="clearfix"></div>
        
        <div id="prod-dest-1-home" class="container-fluid no-column">
        	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-column">
                
                <div class="container-fluid no-column">
                	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-column text-right ico-dest-1">
		            	<img src="<?php bloginfo('template_url'); ?>/img/ico-cocina-2.svg" alt="">
                    </div>
                	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-center nombre-prod">
                    	<h1>Slotted Turner</h1>
                    </div>
                </div>
                
            </div>
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-column img-dest">
            	<img src="<?php bloginfo('template_url'); ?>/img/img-dest-1.jpg" alt="">
            </div>
        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 no-column text-center info-prod">
	            <div class="container-fluid no-column">
                	<div class="col-lg-offset-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 no-column">
                    	<p>Joseph Joseph® Elevate™ Slotted Turner, Green</p>
                    </div>
                    <div class="clearfix"></div>
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-column text-center precio">
                    	<h1 id="tit-dest-1">$18.990</h1>
                    </div>
                    <div class="clearfix"></div>
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-column text-center">
                    	<button class="solicitar">Solicitar</button>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!--producto destacado-->
        
        
        <div id="dest-2-3" class="container-fluid no-column">
        	
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12 no-column">
            	<div class="container-fluid no-column">
                	
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-column dest-izq-1">
                    	<div class="container-fluid no-column">
                        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 no-column ico no-column">
                                <div class="table">
                                    <div class="table-cell">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-cocina-2.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--ico-->
                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs no-column no-column punta punta-der">
                            	&nbsp;
                            </div>
                            <!--punta-->
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 no-column img">
                            	<div class="table">
                                	<div class="table-cell">
                                    	<img src="<?php bloginfo('template_url'); ?>/img/dest-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--imagen-->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1>$56000</h1>
                                        <p>Loren ipsum</p>
                                        <p>dolor sit amet</p>
                                        <button class="solicitar">Solicitar</button>
                                    </div>
                                </div>
                            </div>
                            <!--precio-->
                        </div>
                    </div>
                    <!--destacado izquierda 1-->
                    
                    
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-column dest-der-2">
                        <div class="container-fluid no-column">
                        	<div class="col-sm-6 col-xs-6 no-column ico no-column hidden-lg hidden-md">
                                <div class="table">
                                    <div class="table-cell">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-cama.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--ico fantasma-->
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 no-column img">
                            	<div class="table">
                                	<div class="table-cell">
                                    	<img src="<?php bloginfo('template_url'); ?>/img/dest-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--imagen-->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1>$56000</h1>
                                        <p>Loren ipsum</p>
                                        <p>dolor sit amet</p>
                                        <button class="solicitar">Solicitar</button>
                                    </div>
                                </div>
                            </div>
                            <!--precio-->
                            <div class="col-lg-1 col-md-1 no-column no-column punta punta-izq hidden-sm hidden-xs">
                            	&nbsp;
                            </div>
                            <!--punta-->
                        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 no-column ico no-column hidden-sm hidden-xs">
                                <div class="table">
                                    <div class="table-cell">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-cama.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--ico-->
                        </div>                    
                    </div>
                    <!--destacado derecha 2-->
                    
                    <div class="clearfix"></div>
                    
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-column dest-izq-1" style="background:none;">
                    	<div class="container-fluid no-column">
                            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1>$56000</h1>
                                        <button class="solicitar">Solicitar</button>
                                    </div>
                                </div>
                            </div>
                            <!--precio-->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-column img">
                            	<div class="table">
                                	<div class="table-cell">
                                    	<img src="<?php bloginfo('template_url'); ?>/img/dest-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--imagen-->
                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs no-column no-column punta punta-izq">
                            	&nbsp;
                            </div>
                            <!--punta-->
                        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 no-column ico no-column">
                                <div class="table">
                                    <div class="table-cell">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-bano.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--ico-->
                            <div class="col-sm-12 col-xs-12 hidden-lg hidden-md precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1>$56000</h1>
                                        <button class="solicitar">Solicitar</button>
                                    </div>
                                </div>
                            </div>
                            <!--precio fantasma-->
                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs no-column vacio">
                            	&nbsp;
                            </div>
                        </div>
                    </div>
                    <!--destacado izquierda 3-->
                    
                    
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-column dest-der-2">
                        <div class="container-fluid no-column">
                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs no-column vacio">
                            	&nbsp;
                            </div>
                        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 no-column ico no-column hidden-sm hidden-xs">
                                <div class="table">
                                    <div class="table-cell">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-algo-mas.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--ico-->
                        	<div class="col-sm-6 col-xs-6 no-column ico no-column hidden-lg hidden-md">
                                <div class="table">
                                    <div class="table-cell">
                                        <img src="<?php bloginfo('template_url'); ?>/img/ico-algo-mas.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--ico fantasma-->
                            <div class="col-lg-1 col-md-1 no-column no-column punta punta-der hidden-sm hidden-xs">
                            	&nbsp;
                            </div>
                            <!--punta-->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-column img">
                            	<div class="table">
                                	<div class="table-cell">
                                    	<img src="<?php bloginfo('template_url'); ?>/img/dest-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--imagen-->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1>$56000</h1>
                                        <button class="solicitar">Solicitar</button>
                                    </div>
                                </div>
                            </div>
                            <!--precio-->
                        </div>                    
                    </div>
                    <!--destacado derecha 4-->
                    
                    
                </div>
            </div>
            
            
        </div>
        <!--/produtos destacados 2-->
        
        <div id="inscribe-correo" class="container-fluid no-column">
        
        	<div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 no-column">
            	<div class="container-fluid no-column">
                	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 left texto">
                    	<p>Recibe ofertas en tu correo</p>
                        <p>Y entérate de las últimas novedades en HKB</p>
                    </div>
                	<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 text-center">
                    	<form>
                    	<div class="container-fluid">
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        		            	<input type="text" placeholder="Nombre">
                            </div>
                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		                        <input type="email" placeholder="@">
                            </div>
                        </div>
                    </div>
                	<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 text-center">
                    	<input type="submit" value="Quiero Recibir Info" class="solicitar">
                        </form>
                    </div>
                </div>
                <!--container-->
            </div>
            
        </div>
        <!--inscribe correo-->
        
      </section>
      <!--/main-->
      
<?php get_footer(); ?>