<?php get_header(); ?>

<div id="banner_center">
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            			
            <?php echo do_shortcode('[metaslider id="32"]'); ?> <!--shortcode de plugin para que aparezca el slider -->
   
        </div>

    </div><!--/wrapper -->
</div><!--/banner_center -->         
        	
<div style="width: 1010px; margin: 0 auto; background-color: #E8E8E8; height: 40px; padding-top: 10px; padding-bottom: 15px;"> <!--/ diseño parte baja Destacado - Noticias - Agenda -->
    <div id="logos">
            
        <div style="width:140px; float:left;">&nbsp;</div> <!--/Ordena los link en modo que esten centrado -->
  	     <div class="linkbarra1"><a href="http://www.pmontt.uach.cl/como-llegar/" target="_blank">Cómo llegar</a></div>
        <div class="linkbarra2"><a href="http://www.uach.cl/dw/guia/" target="_blank">Guía Telefónica</a></div>
        <div class="linkbarra3"><a href="http://www.pmontt.uach.cl/boletin2/" target="_blank">Boletín</a></div>
            
        <a href="https://www.facebook.com/gimnasio.uach?ref=br_rs" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/imagenes/facebook.png" alt="" border="0" height="32"></a>
        <a href="https://twitter.com/sedeuach" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/imagenes/tweeter.png" alt="" border="0" height="32"></a>
        <a href="https://www.flickr.com/photos/146696821@N04/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/imagenes/flickr.png" alt="" border="0" height="32"></a>
            
    </div>			
</div>

<div id="info">
    <div id="banner_left">
        <div class="titulo">DESTACADOS</div>
            <div id="wrapper">
                <div class="slider-wrapper theme-default">
     
                    <?php echo do_shortcode('[metaslider id="41"]'); ?>
                    <?php echo do_shortcode('[metaslider id="44"]'); ?>
                    <?php echo do_shortcode('[metaslider id="47"]'); ?>
                
                </div>
            </div>
    </div>
        
    <div id="noticias">
        <div id="titulo">NOTICIAS</div>
            <div data-baron="inited" class="wrapper">
                <div class="scroller">
                    <div class="container" style="width:auto; padding:0"> 
                           
                        <?php query_posts( 'category_name=noticias&posts_per_page=3&order=DESC' ); ?>
                        <?php while ( have_posts() ) : the_post(); ?>              
                        <?php
                            $img_id = get_post_thumbnail_id($post->ID); // Esto obtiene solo el ID del img
                            $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true)
                        ?>


                        <div class="noticia" style="margin-left:5px;">
                            <div class="texto-noticiahome"> 
                                <br>
                                <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><strong><?php the_title(); ?></strong></a></h2> <!--/Muestra el titulo de las noticias -->
                                <div class="noticiahome">
                                    <?php the_content(); ?>
                                </div>
                                
                                <div style="border-bottom:solid 1px #CCC; height:20px"></div>
                                
                            </div>
                        </div>

                        <?php endwhile; ?>

                    </div>   
                </div>   
            </div>  
    </div>
      
      
    <div id="banner_right"><!--/AGENDA -->
        <div id="age_titulo">AGENDA UACh</div>
        <div data-baron="inited" class="wrapper">
            <div class="scroller">              
                <div class="lista" style="width:auto;"> 
                    <table border="0" cellspacing="0" cellpadding="0" width="235">
            
                    <script class="ai1ec-widget-placeholder" data-widget="ai1ec_agenda_widget" 
                      data-events_seek_type="events" data-show_subscribe_buttons="false">
                    (function(){var d=document,s=d.createElement('script'),
                    i='ai1ec-script';if(d.getElementById(i))return;s.async=1;
                    s.id=i;s.src='//localhost/GimPagina/?ai1ec_js_widget';
                    d.getElementsByTagName('head')[0].appendChild(s);})();
                    </script>
                    </table>

                </div>   
            </div>
        </div>  
      </div>
              
       
</div>        
      	</div>
    </div>

<?php get_footer(); ?>