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
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?> 
            <?php endwhile; else: ?>
              <p><?php _e('Brak wpisu.'); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?> 
          </div>  
        </div>
      </div>      
    </section>
<?php get_footer(); ?>