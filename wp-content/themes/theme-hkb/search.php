<?php get_header(); ?>

    <section id="main" class="container no-column">
    
        
		<?php if ( have_posts() ) : ?>
        <br /><br /><h1>Encontramos lo siguiente para <strong><?php echo get_search_query(); ?></strong></h1>
		<?php while ( have_posts() ) : the_post(); ?>            
			
        <div class="loop-cat col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
        	<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('full'); ?> </a>
            <h4><? echo '' . get_the_title() . ''; ?></h4>
            <h2><? woocommerce_get_template( 'woocommerce/loop/price.php' ); ?></h2>
            <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
        </div>
        <!--/loop-->
		<?php endwhile; ?>
        <?php else : ?>

		<br /><br />
		<h2>No encontramos nada en productos para <strong><?php echo get_search_query(); ?></strong></h2>
        <p>Pero te puede interesar:</p><br /><br /><br />

		<?php
        $args = array(
            'post_type' => 'product',
            'orderby' => 'rand',
        );
        $the_query = new WP_Query( $args );
        // The Loop
        
        while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>

        <div class="loop-cat col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
        	<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('full'); ?> </a>
            <h4><? echo '' . get_the_title() . ''; ?></h4>
            <h2><? woocommerce_get_template( 'woocommerce/loop/price.php' ); ?></h2>
            <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
        </div>
        <!--/loop-->

<? } wp_reset_postdata(); ?>
<?php endif; ?>        

        
        
    </section>
    <!--/main-->
      
      
<?php get_footer(); ?>