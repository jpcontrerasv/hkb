<?php get_header(); ?>      
     <section id="main" class="container-fluid no-column main-home">
     
      
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
            
            
            
        </div>
        <!--bajada slider-->
        <div class="clearfix"></div>
        
        
		<?php
        $args = array(
            'posts_per_page' => 1,
            'product_cat' => 'cocina',
            'post_type' => 'product',
            'orderby' => 'rand',
        );
        $the_query = new WP_Query( $args );
        // The Loop
        
        while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>
        <div id="prod-dest-1-home" class="container-fluid no-column">
        	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-column">
                
                <div class="container-fluid no-column">
                	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 no-column text-right ico-dest-1">
		            	<img src="<?php bloginfo('template_url'); ?>/img/ico-cocina-2.svg" alt="">
                    </div>
                	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-center nombre-prod">
                    	<h1><? echo '' . get_the_title() . ''; ?></h1>
                    </div>
                </div>
            </div>
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-column img-dest">
            	 <a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('full'); ?> </a>
            </div>
        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 no-column text-center info-prod">
	            <div class="container-fluid no-column">
                	<div class="col-lg-offset-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 no-column">
                    	<p>	<?php echo excerpt(10); ?></p>
                    </div>
                    <div class="clearfix"></div>
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-column text-center precio">
                    	<h1 id="tit-dest-1"><? woocommerce_get_template( 'loop/price.php' ); ?></h1>
                    </div>
                    <div class="clearfix"></div>
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-column text-center">
                    	<?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!--producto destacado-->
        
		<? } wp_reset_postdata(); ?>
        
        
        
        
        
        
        
        <div id="dest-2-3" class="container-fluid no-column">
        	
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12 no-column">
            	<div class="container-fluid no-column">
                
                
					<?php
                    $args = array(
                        'posts_per_page' => 1,
                        'product_cat' => 'cocina',
                        'post_type' => 'product',
                        'offset' => '0',
                    );
                    $the_query = new WP_Query( $args );
                    // The Loop
                    
                    while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
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
                                    	<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('full'); ?> </a>
                                    </div>
                                </div>
                            </div>
                            <!--imagen-->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1><? woocommerce_get_template( 'loop/price.php' ); ?></h1>
                                        <p><? echo '' . get_the_title() . ''; ?></p>
                                        <p><?php echo excerpt(10); ?></p>
                                        <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
                                    </div>
                                </div>
                            </div>
                            <!--precio-->
                        </div>
                    </div>
                    <!--destacado izquierda 1-->
					<? } wp_reset_postdata(); ?>
                    
                    
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
                                    	<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('full'); ?> </a>
                                    </div>
                                </div>
                            </div>
                            <!--imagen-->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1><? woocommerce_get_template( 'loop/price.php' ); ?></h1>
                                        <p><? echo '' . get_the_title() . ''; ?></p>
                                        <p><?php echo excerpt(10); ?></p>
                                        <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
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
					<? } wp_reset_postdata(); ?>
                    
                    
                    
                    <div class="clearfix"></div>
                    
                    
					<?php
                    $args = array(
                        'posts_per_page' => 1,
                        'product_cat' => 'bano',
                        'post_type' => 'product',
                        'orderby' => 'rand',
                    );
                    $the_query = new WP_Query( $args );
                    // The Loop
                    
                    while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                    
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-column dest-izq-1" style="background:none;">
                    	<div class="container-fluid no-column">
                            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1><? woocommerce_get_template( 'loop/price.php' ); ?></h1>
                                         <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
                                    </div>
                                </div>
                            </div>
                            <!--precio-->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 no-column img">
                            	<div class="table">
                                	<div class="table-cell">
                                    	<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('full'); ?> </a>
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
                                    	<h1><? woocommerce_get_template( 'loop/price.php' ); ?></h1>
                                         <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
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
					<? } wp_reset_postdata(); ?>
                    
                    
					<?php
                    $args = array(
                        'posts_per_page' => 1,
                        'product_cat' => 'algo-mas',
                        'post_type' => 'product',
                        'orderby' => 'rand',
                    );
                    $the_query = new WP_Query( $args );
                    // The Loop
                    
                    while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
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
                                    	<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('full'); ?> </a>
                                    </div>
                                </div>
                            </div>
                            <!--imagen-->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 precio no-column text-center">
                                <div class="table">
                                    <div class="table-cell">
                                    	<h1><? woocommerce_get_template( 'loop/price.php' ); ?></h1>
                                         <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
                                    </div>
                                </div>
                            </div>
                            <!--precio-->
                        </div>                    
                    </div>
                    <!--destacado derecha 4-->
					<? } wp_reset_postdata(); ?>
                    
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