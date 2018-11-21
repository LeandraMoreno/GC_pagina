<?php get_header(); ?>
<!--/Diseño de noticias/ -->

<div id="informacion">
    <div class="container clearfix">
        <section id="main" class="nine columns">
            <article class="entry clearfix">

                <div class="entry-body">      
				    <?php the_post(); ?>
				    <h4 class="title"><?php the_title(); ?></h4>
				    <span><?php the_time('j F Y');?> | Por <strong><?php the_author(); ?></strong></span><br><br>
				    <center><?php the_post_thumbnail('full'); ?></center>
				    <?php if (in_category('Noticias')) { ?>


				<div style="clear:both"></div>
					<?php } ?>
                    
                    <div class="contenido-noticia"> <!--/Texto de las noticias -->
				        <?php the_content(); ?>
				    </div>
                    
				</div>
                
                </article>
            </section><!--/ #main-->                    
<?php get_sidebar(); ?>
       
    </div>
</div>
       
<!--          	</div>-->
    </div>
</div>
<div id="barra_gris"></div>       
<?php get_footer(); ?>