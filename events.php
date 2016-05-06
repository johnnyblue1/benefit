<?php
/**
* Template Name: Events
*/

get_header(); ?>
<br><br><br><br><br>

	
	<h1>Wynik</h1>


	<?php query_posts('category_name=oferty'); ?>

		<?php $first = true; ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php if ($first) { $first = false; continue; } ?>

				<?php $ulice = get_post_meta($post->ID, 'lat'); ?>
		        <?php $kod = get_post_meta($post->ID, 'lng'); ?>
		        <?php $miasto = get_post_meta($post->ID, 'miasto_oferta'); ?>


				<h3>Wspłrzędne:</h3>
				<ul>
					<?php foreach ($ulice as $k => $ulica){
						echo $ulica;
						echo "</br>";
						echo $kod[$k];
						echo "</br>";
						echo $miasto[$k];
						echo "</div>";
					} ?>
				</ul>
			
		<?php endwhile; else: ?>
        	<p><?php _e('brak','Strona') ?></p>
  		<?php endif; ?>
    <?php wp_reset_query(); ?>



</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>