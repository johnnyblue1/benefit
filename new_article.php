<!-- slider new offer -->
<section class="main-one">
      <div class="container">
        <div class="row">
                <div class="col-md-12">
                  <div class="carousel carousel-showmanymoveone slide" id="carouselABC">
                    <div class="carousel-inner">

                    <?php query_posts('category_name=oferty'); ?>
                      <?php $active = ' active'; ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    

                        <div class="item<?php echo $active; ?>">
                          <div class="col-xs-12 col-sm-6 col-md-3">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <img src="<?php echo $image[0]; ?>" class="img-responsive">
                            <div class="box">
                            <p><?php the_title(); ?></p>
                            <p><?php the_field('ulica_oferta'); ?></br><?php the_field('kod_pocztowy_oferta'); ?> <?php the_field('miasto_oferta'); ?></p>
                            </div>
                          </div>
                        </div>
                      <?php $active = '' ?>

                      <?php endwhile; else: ?>
                      <p><?php _e('Brak nieruchomości do sprzedaży','Home') ?></p>
                      <?php endif; ?>
                  <?php wp_reset_query(); ?>
                      
                    </div>
                  </div>
                </div>
            </div>
      </div>      
    </section>
<!-- end slider new offer -->    