<?php get_header(); ?>

    <section id="main" class="container no-column">
        <div id="woocontent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center no-column">
        <?php if ( is_singular( 'product' ) ) {
            woocommerce_content();
                }else{
                //For ANY product archive.
                //Product taxonomy, product search or /shop landing
                woocommerce_get_template( 'archive-product.php' );
        } ?>        
        </div>
    </section>
    <!--/main-->
      
      
<?php get_footer(); ?>