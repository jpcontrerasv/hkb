      <footer class="container-fluid no-column">
      	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 no-column">
        	<div class="container-fluid no-column">
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                	<ul>
                    	<li>Conoce HKB</li>
                    	<li><a href="#">Nosotros</a></li>
                        <li><a href="#">Equipo</a></li>
                        <li><a href="#">Misión y Visión</a></li>
                        <li><a href="#">Contacto</a></li>
                        
                    </ul>
                </div>
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                	<ul>
                    	<li>Tienda</li>
                    	<li><a href="#">Preguntas Frecuentes</a></li>
                        <li><a href="#">Cómo comprar</a></li>
                        <li><a href="#">Cambios y devoluciones</a></li>
                        <li><a href="#">Plazos y Costos</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        
                    </ul>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                	<ul>
                    	<li>Siguenos</li>
                        <li><a href="#"><i class="fa fa-facebook fa-3x"></i></a> &nbsp;<a href="#"><i class="fa fa-twitter fa-3x"></i></a> &nbsp;<a href="#"><i class="fa fa-instagram fa-3x"></i></a> &nbsp;<a href="#"><i class="fa fa-pinterest fa-3x"></i></a> &nbsp;</li>
                    </ul>
                </div>
            	<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                	<ul>
                    	<li>Medios de Pago</li>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/medios-de-pago.png" alt="">
                    </ul>
                </div>
                
                
                
            </div>
        </div>	
        <!--container-->
      </footer>
      
      
      
      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jetmenu.js"></script>  
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>  
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fittext.js"></script>
	<?php global $woocommerce; ?>
    <?php
    $my_cart_count = $woocommerce->cart->cart_contents_count;
    if ($my_cart_count > 0) :
    ?>
    <script src="<?php bloginfo('template_url'); ?>/js/favico-0.3.5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    var favicon=new Favico({
	    animation:'pop'
    });
    favicon.badge(<?php echo $my_cart_count; ?>);
    </script>
    <?php endif; ?>
    <?php wp_footer(); ?>
    
    
  </body>
</html>