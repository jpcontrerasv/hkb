<?php get_header(); ?>

    <section id="main" class="container no-column">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center no-column">
			<?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>            
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>        
        </div>
    </section>
    <!--/main-->
      
      
<?php get_footer(); ?>