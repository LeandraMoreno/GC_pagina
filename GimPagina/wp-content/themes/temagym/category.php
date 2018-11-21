<?php get_header(); ?>
<div id="informacion">
    <div class="container clearfix">
        <section id="main" class="twelve columns">
            <article class="entry clearfix">
                
                <div class="entry-body">      
			         <?php the_post(); ?>
				        <?php
					       $categories = get_the_category();
							if ( ! empty( $categories ) ) {
							$categoria = esc_html( $categories[0]->name );   
							}
				        ?>
						
				    <h2 class="title">Noticias: (Categoría <?php echo $categoria; ?>)</h2>
                        <!--/muestra la categoria(pagina) de Noticias-->
						<?php query_posts( 'category_name='.$categoria.'&posts_per_page=0&order=DESC' ); ?>
						<?php while ( have_posts() ) : the_post(); ?>

						<?php
						$img_id = get_post_thumbnail_id($post->ID); 
                                    
						$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
						?>

						<div class="noticia-lista"><!--/Muestra las noticias por la cotegoria en la pestaña -->
							<div class="miniatura-noticias">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(array(180)); ?></a>
							</div>
							<div class="info-noticias">
								<span><?php the_time('j F Y');?></span>
								<a href="<?php the_permalink(); ?>" rel="bookmark" class="entry-title"><h5><?php the_title(); ?></h5></a>
								<?php the_excerpt(); ?>
							</div>
						</div>
						<?php endwhile; ?>

			            	        
				    </div>

            </article>
        </section><!--/ #main-->                    
    </div>
</div>

    </div>
</div>
        
<div id="barra_gris"></div>
<?php get_footer(); ?>