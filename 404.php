<?php  get_header();  ?>
<!-- header -->
    <header class="not-fullscreen-two background parallax" style="background-image:url('<?php bloginfo('template_directory') ?>/images/rest.jpg'); ?>');" data-img-width="1600" data-img-height="1064" data-diff="100">
      <div class="content-a">
          <div class="content-b">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="box-top">Błąd <strong>404</strong></h2>
                            <h1 class="brand-heading">Nie znaleziono strony</h1> 
                        </div>
                    </div>
                </div>
          </div>
      </div>
    </header>
<!-- end header -->

<!-- content article -->
    <section class="main-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>  
                <?php endwhile; else: ?>
                <h1><?php _e('Błąd 404'); ?></h1>
                <p>Nie znaleziono strony</p>
                <a href="<?php echo site_url(); ?>">wróć na stronę główną</a>
            <?php endif; ?>
            <?php wp_reset_query(); ?>  
           
          </div>
          
        </div>
        <hr>
      </div>  
    </section>
    <!-- end content article -->

<?php  get_footer();  ?>
