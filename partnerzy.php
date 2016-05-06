<?php
/*
Template Name: Partnerzy
*/
?>
<?php get_header(); ?>
<!-- Header -->        
    <header class="not-fullscreen-two background parallax" style="background-image:url('<?php bloginfo('template_directory') ?>/images/rest.jpg'); ?>');" data-img-width="1600" data-img-height="1064" data-diff="100">
      <div class="content-a">
          <div class="content-b">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="box-top">Program <strong>Benefit home</strong> to najkorzystniejszy</br>sposób na zakup wymarzonego mieszkania</h2>
                            <h1 class="brand-heading">Gwarancja najniższej ceny oraz pakiet korzyści</h1> 
                        </div>
                    </div>
                </div>
          </div>
      </div>
    </header>

    <section class="main-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Nasi <span>partnerzy</span></h1>
          </div>  
        </div>
        <div class="row">

        <?php query_posts('category_name=partnerzy'); ?> 
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4 partners">
              <figure>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img alt="<?php the_title(); ?>" src="<?php echo $image[0]; ?>">
                  <figcaption>
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_field('ulica'); ?></br><?php the_field('kod_pocztowy'); ?> <?php the_field('miejscowosc'); ?></p>
                      <p><a target="_blank" href="http://<?php the_field('adres_www'); ?>"><?php the_field('adres_www'); ?></a></p>
                  </figcaption>
              </figure>
            </div>  
          <?php endwhile; else: ?>
            <p><?php _e('Brak partnerów','Benefithome') ?></p>
          <?php endif; ?>
        <?php wp_reset_query(); ?> 

        </div>
       
      </div>      
    </section>
<?php get_footer(); ?>    