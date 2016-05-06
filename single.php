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

    <section class="main-one">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <p class="description">Lokalizacje: <span><?php the_field('lokalizacje'); ?></span></p>
            <p class="description">Deweloper: <span><?php the_field('deweloper'); ?></span></p>
          </div>   
        </div>
      </div>    
      <div class="container">
          <div class="row">
            <div class="col-sm-12">
                <?php if( get_field('galeria_1')) { ?>
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php if( get_field('galeria_1') ): ?>
                                <div class="item active">
                                    <img src="<?php the_field('galeria_1'); ?>">
                                </div>
                            <?php endif; ?>

                            <?php if( get_field('galeria_2') ): ?>
                                <div class="item">
                                    <img src="<?php the_field('galeria_2'); ?>">
                                </div>
                            <?php endif; ?>

                            <?php if( get_field('galeria_3') ): ?>
                                <div class="item">
                                    <img src="<?php the_field('galeria_3'); ?>">
                                </div>
                            <?php endif; ?>

                            <?php if( get_field('galeria_4') ): ?>
                                <div class="item">
                                    <img src="<?php the_field('galeria_4'); ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div> 
                   
                    <div class="clearfix"></div> 
                    <div id="thumbcarousel" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="item active">
                                <?php if( get_field('galeria_1') ): ?>
                                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="<?php the_field('galeria_1'); ?>"></div>
                                <?php endif; ?>
                                <?php if( get_field('galeria_2') ): ?>
                                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="<?php the_field('galeria_2'); ?>"></div>
                                <?php endif; ?>
                                <?php if( get_field('galeria_3') ): ?>
                                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="<?php the_field('galeria_3'); ?>"></div>
                                <?php endif; ?>
                                <?php if( get_field('galeria_4') ): ?>
                                    <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="<?php the_field('galeria_4'); ?>"></div>
                                <?php endif; ?>
                            </div><!-- /item -->
                        </div><!-- /carousel-inner -->
                    </div> 
                <?php } ?>
            </div>
            
        </div> 
    </div> 
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="box-btn-two">
                  <div class="row">
                    <div class="col-md-8">
                      <h4>Kup w niższej cenie <strong>pobierając certyfiakt</strong></h4>
                    </div>
                    <div class="col-md-4">
                     <a class="btn-light" href="../tcpdf-master/examples/certyfikat.php">pobierz certyfikat</a>
                    </div>
                  </div>    
                </div>

                <div class="details-investment">
                    <div class="row">
                        <?php if (get_field('cena_od')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>ceny za m2: <span>od <?php the_field('cena_od'); ?> do <?php the_field('cena_do'); ?> zł/m2</span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('liczba_pokoi')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>liczba pokoi: <span><?php the_field('liczba_pokoi'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('liczba_mieszkan')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>liczba mieszkań: <span><?php the_field('liczba_mieszkan'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('liczba_kondygnacji_nadziemnych')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>liczba kondygnacji nadziemnych: <span><?php the_field('liczba_kondygnacji_nadziemnych'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('dostepne_powierzchnie_dodatkowe')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>dostępne powierzchnie dodatkowe: <span><?php the_field('dostepne_powierzchnie_dodatkowe'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('oddanie_do_uzytkowania')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>oddanie do użytkowania: <span><?php the_field('oddanie_do_uzytkowania'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('miejsca_postojowe_naziemne')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>miejsca postojowe naziemne: <span><?php the_field('miejsca_postojowe_naziemne'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('garaze')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>garaże: <span><?php the_field('garaze'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('standard_wykonczenia')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>standard wykończenia: <span><?php the_field('standard_wykonczenia'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('przewidywany_czynsz')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>przewidywany czynsz: <span><?php the_field('przewidywany_czynsz'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('powierzchnia')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>powierzchnia: <span><?php the_field('powierzchnia'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('wysokosc_pomieszczen')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>wysokość pomieszczeń: <span><?php the_field('wysokosc_pomieszczen'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('liczba_budynkow')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>liczba budynków: <span><?php the_field('liczba_budynkow'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('liczba_kondygnacji_podziemnych')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>liczba kondygnacji podziemnych: <span><?php the_field('liczba_kondygnacji_podziemnych'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('rozpoczecie_budowy')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>rozpoczęcie budowy: <span><?php the_field('rozpoczecie_budowy'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('miejsca_postojowe_podziemne')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>miejsca postojowe podziemne: <span><?php the_field('miejsca_postojowe_podziemne'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('komorki_lokatorskie')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>komórki lokatorskie: <span><?php the_field('komorki_lokatorskie'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('material_budowlany')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>materiał budowlany: <span><?php the_field('material_budowlany'); ?></span></p>
                        </div>  
                        <?php } ?>
                        <?php if (get_field('rodzaj_własnosci')) { ?>
                        <div class="col-md-6-details parameters">
                            <p>rodzaj własności: <span><?php the_field('rodzaj_własnosci'); ?></span></p>
                        </div>  
                        <?php } ?>
                    </div>    
                </div>

                <h5>Opis inwestycji</h5>

                <?php the_content(); ?> 

                <?php endwhile; else: ?>
              <p><?php _e('Brak opisu inwestycji'); ?></p>
              <?php endif; ?>

                <h5>Udogodnienia</h5>

                <ul class="description-ul">
                <?php 
                    $selected = get_field('udogodnienia');

                    if( in_array('zabaw', $selected) ) {
                        echo "<li><i data-toggle='tooltip' data-placement='top' title='Plac zabaw' class='fa fa-futbol-o fa-2x'></i></li>";
                    }
                    if( in_array('ogrodzony', $selected) ) {
                        echo "<li><i data-toggle='tooltip' data-placement='top' title='Teren ogrodzony' class='fa fa-bars fa-2x'></i></li>";
                    }
                    if( in_array('sklepy', $selected) ) {
                        echo "<li><i data-toggle='tooltip' data-placement='top' title='Sklepy' class='fa fa-shopping-cart fa-2x'></i></li>"; 
                    }
                    if( in_array('zielone', $selected) ) {
                        echo "<li><i data-toggle='tooltip' data-placement='top' title='Tereny zielone' class='fa fa-tree fa-2x'></i></li>"; 
                    }
                    if( in_array('brak', $selected) ) {
                        echo "<p>Brak udogodnień</p>"; 
                    }
                ?>
                </ul>

            </div> 
        </div> 
        <?php if( get_field('lat')) { ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="google-maps">
                <div id="map-canvas"></div>
                </div> 
            </div> 
        </div>  
        <?php } ?>   
    </div> 
    </section>
   
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>  
    <script type="text/javascript">
        var map;
        function initialize() {
          var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(<?php the_field('lat'); ?>, <?php the_field('lng'); ?>),
            styles: [
                {
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "gamma": 0.5
                        }
                    ]
                }
            ]
          };
          map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
              var marker = new google.maps.Marker({
                map: map,
                icon: "<?php bloginfo('template_directory') ?>/images/main-marker.png",
                title: "",
                position: map.getCenter()
              });

              var infowindow = new google.maps.InfoWindow();
              infowindow.setContent('<b><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></b><br><?php the_field('ulica_oferta'); ?></br><?php the_field('kod_pocztowy_oferta'); ?> <?php the_field('miasto_oferta'); ?>');

              infowindow.open(map, marker);


              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
              });

                <?php $page_id = $wp_query->get_queried_object_id();?>
                <?php query_posts('category_name=oferty'); ?>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php if (get_the_ID() == $page_id ) { continue; } ?>

                        <?php $lat = get_post_meta($post->ID, 'lat'); ?>
                        <?php $lng = get_post_meta($post->ID, 'lng'); ?>
                        <?php $ul = get_post_meta($post->ID, 'ulica_oferta'); ?>
                        <?php $kod = get_post_meta($post->ID, 'kod_pocztowy_oferta'); ?>
                        <?php $miasto = get_post_meta($post->ID, 'miasto_oferta'); ?>


                            <?php foreach ($lat as $szer => $l) { ?>

                                <?php $m++; $w++; $n++; $a++; $b++; $c++; ?>   
                                    
                                    var marker<?php echo $m++; ?> = new google.maps.Marker({
                                        map: map,
                                        icon: "<?php bloginfo('template_directory') ?>/images/second-marker.png",
                                        title: "",
                                        position: new google.maps.LatLng(<?php echo $l; ?>,<?php echo $lng[$szer]; ?>)
                                    });
                             
                                    var infowindow<?php echo $w++; ?> = new google.maps.InfoWindow();
                                    infowindow<?php echo $n++; ?>.setContent('<b><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></b><br><?php echo $ul[$szer]; ?></br><?php echo $kod[$szer]; ?> <?php echo $miasto[$szer]; ?>');

                                    infowindow.open(map, marker);

                                    google.maps.event.addListener(marker<?php echo $a++; ?>, 'click', function() {
                                    infowindow<?php echo $b++; ?>.open(map, marker<?php echo $c++; ?>);
                                    });
                                    
                            <?php } ?>  

                    <?php endwhile; else: ?>
                        <p><?php _e('brak','Benefit Home') ?></p>
                    <?php endif; ?>
                <?php wp_reset_query(); ?>          

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


<?php get_footer(); ?>
