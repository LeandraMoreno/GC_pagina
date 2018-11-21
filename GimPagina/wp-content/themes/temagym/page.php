<?php get_header(); ?>
<div id="informacion">
    <div class="container clearfix">
		<section id="main" class="nine columns">
                            
            <article class="entry clearfix">
                <div class="entry-body">      
			         <?php the_post(); ?>
			         <h2 class="title"><?php the_title(); ?></h2>
			         <?php the_content(); ?>
			            	        
				</div><!--/ .entry-body-->

            </article>
            
            
        </section><!--/ #main-->                    
<?php get_sidebar(); ?>

    </div>
       
</div>
    
    </div>
</div>
        
<div id="barra_gris"></div>
<?php get_footer(); ?>