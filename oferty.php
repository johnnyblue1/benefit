<?php
/*
Template Name: Oferty
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
    <!-- end Header --> 

    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="select-style">
                        <form method="GET">
                          <select name="cat_name" onchange="this.form.submit();">
                            <option value="oferty" selected>Wybierz miasto</option>
                            <option value="warszawa" <?php if(isset($_GET['cat_name']) && $_GET['cat_name'] == 'warszawa') echo 'selected="selected"'; ?> >Warszawa</option>
                            <option value="wroclaw" <?php if(isset($_GET['cat_name']) && $_GET['cat_name'] == 'wroclaw') echo 'selected="selected"'; ?>>Wrocław</option>
                            <option value="krakow" <?php if(isset($_GET['cat_name']) && $_GET['cat_name'] == 'krakow') echo 'selected="selected"'; ?>>Kraków</option>
                          </select>
                        </form>
                    </div>
                </div> 
            </div> 
        </div>    
    </div>
    
    <?php
        if (empty($_GET['cat_name'])) {
            $cat ='oferty';
        }
        if(isset($_GET['cat_name'])) {
            $cat = $_GET['cat_name'];
        }
        if ($cat == 'krakow') {
            $city = 'Kraków';
        } elseif ($cat == 'wroclaw') {
            $city = 'Wrocław';
        } elseif ($cat == 'warszawa') {
            $city = 'Warszawa';
        } 
    ?>
    
    <section class="main-one">
      <div class="container">
        <div class="row">

            <?php query_posts('category_name=' . $cat ); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <div class="col-md-4">
                    <a href="<?php echo get_permalink(); ?>">
                    <div class="item-two">
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" class="img-responsive">
                        <div class="box">
                        <p><?php the_title(); ?></p>
                        <p><?php the_field('ulica_oferta'); ?></br><?php the_field('kod_pocztowy_oferta'); ?> <?php the_field('miasto_oferta'); ?></p>
                        <div class="hr-box"></div>
                        <?php if (get_field('cena_od')) { ?>
                            <p>Ceny od <strong><?php the_field('cena_od'); ?> zł</strong> do <strong><?php the_field('cena_do'); ?> zł</strong></p>
                        <?php } else { ?>
                            <p>Ceny od <strong>0 zł</strong> do <strong>0 zł</strong></p>
                        <?php } ?>
                        </div>
                    </div>
                    </a>
                  </div> 

                <?php 
                    $city = 'Kraków'
                ?> 

                <?php endwhile; else: ?>
                    <p><?php _e('Brak nieruchomości w mieście ' . $city) ?></p>
                      <?php endif; ?>
            <?php wp_reset_query(); ?>
            
        </div>
      </div>      
    </section>

<?php get_footer(); ?>    