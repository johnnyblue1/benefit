    <section class="main-one">
        <div class="container">
          <?php if ( is_page( array( 'jak-dziala-program', 'partnerzy', 'dla-deweloperow', 'oferty', 'kontakt', 'oferty' ) ) ) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-btn">
                      <div class="row">
                        <div class="col-md-6">
                          <h4>Program <strong>Benefit Home</strong></h4>
                        </div>
                        <div class="col-md-offset-2 col-md-4">
                          <a class="btn-light" href="przystap-do-programu">przystąp do programu</a>
                        </div>
                      </div>    
                    </div>
                </div>  
            </div>
          <?php } else { ?>  
            <div class="row">
                
            </div>
          <?php } ?>

          <?php if (is_front_page()): ?>
            <div class="row">
                  <div class="col-md-12">
                      <div class="box-btn">
                        <div class="row">
                          <div class="col-md-6">
                            <h4>Program <strong>Benefit Home</strong></h4>
                          </div>
                          <div class="col-md-offset-2 col-md-4">
                            <a class="btn-light" href="przystap-do-programu">przystąp do programu</a>
                          </div>
                        </div>    
                      </div>
                  </div>  
              </div>
            <?php endif; ?>
          
            <div class="row">
                <div class="col-md-12 partners-logotype">
                  <div class="carousel carousel-showmanymoveone slide" id="carousel123">
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/1.png" class="images-responsive"></a></div>
                      </div>
                      <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/2.png" class="images-responsive"></a></div>
                      </div>
                      <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/3.png" class="images-responsive"></a></div>
                      </div>          
                      <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/1.png" class="images-responsive"></a></div>
                      </div>
                      <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/2.png" class="images-responsive"></a></div>
                      </div>
                      <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/3.png" class="images-responsive"></a></div>
                      </div>
                      <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/1.png" class="images-responsive"></a></div>
                      </div>
                      <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/2.png" class="images-responsive"></a></div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                  </div>
                </div>
            </div>

        </div>  

    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-10">
              <?php
                    wp_nav_menu( array(
                          'menu'              => 'footer',
                          'theme_location'    => 'footer',
                          'depth'             => 2,
                          'menu_class'        => 'nav-footer',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
            </div>
            <div class="col-xs-12 col-md-2">
              <img src="<?php bloginfo('template_directory') ?>/images/logo-footer.png">
            </div>  
          </div>
        </div>   
        <a href="#" class="scrollToTop"><i class="fa fa-angle-double-up fa-2x"></i></a> 
    </footer>

    <!-- jQuery -->
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/index.js"></script>

  <?php wp_footer(); ?>  
</body>

</html>