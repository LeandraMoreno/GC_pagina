

<aside id="sidebar" class="four columns">
	  
<!--<?php
	$tipo_side = get_post_type();
	if ($tipo_side == "carreras" && is_single()) {
?>

					<div class="widget widget_popular_posts">

						<h3 class="widget-title">Carreras</h3>
	      <div id="banner_right">
	              <div class="container lista" style="width:auto; padding:0"> 

			                <?php
			                global $wp_query;
			                $wp_query = new WP_Query("post_type=carreras&order=ASC&posts_per_page=1000");
		                	while ($wp_query->have_posts()) : $wp_query->the_post();
		                	?>
							<ul>
							 	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							</ul>
	                  
	                  <?php endwhile; ?>
	              </div>
	      </div>  
					</div>/ .widget

<?php } else { ?>-->

					<div class="widget widget_popular_posts">

						<h3 class="widget-title" style="margin-top:20px">Categorías</h3>
							    <ul class="lista">
							        <li><a href="<?php bloginfo('url') ?>">Portada</a></li>
							        <?php
							            $args = array (
							                'hide_empty' => 0,
							                'title_li' => false,
							                'style' => 'list',
							            );
							            wp_list_categories($args);
							        ?>
							    </ul>


					</div><!--/ .widget-->

<!--<?php } ?>-->
				
	</aside><!--/ #sidebar--> 
