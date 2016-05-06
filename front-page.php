<?php get_header(); ?>

<!-- Header -->        
    <header class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
      </ol>
        
      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item slides active">
          <div class="slide-1" style="background-image: url(<?php bloginfo('template_directory') ?>/images/main.jpg);">
              <div class="overlay"></div>
          </div>
          <div class="hero">
            <hgroup>
                <h1>Program <strong>Benefit home</strong> to najkorzystniejszy</br>sposób na zakup wymarzonego mieszkania</h1>   
                <h2 class="brand-heading">Gwarancja najniższej ceny oraz pakiet korzyści</h2> 

                <div class="row images-box three-promotions">
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/wallet.png" class="img-responsive">
                      <h3 class="brand-heading">dopłata do mieszkania</h1> 
                  </div>
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/umbrella.png" class="img-responsive">
                      <h3 class="brand-heading">ubezpieczenie</h1> 
                  </div>
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/percent.png" class="img-responsive">
                      <h3 class="brand-heading">rabat na wykończenie</h1> 
                  </div>
              </div>
            </hgroup>
          </div>
        </div>

        <div class="item slides">
          <div class="slide-2" style="background-image: url(<?php bloginfo('template_directory') ?>/images/main2.jpg);">
              <div class="overlay"></div>
          </div>
          <div class="hero">        
            <hgroup>
                <h1>Program <strong>Benefit home</strong> to najkorzystniejszy</br>sposób na zakup wymarzonego mieszkania</h1>   
                <h2 class="brand-heading">Gwarancja najniższej ceny oraz pakiet korzyści</h2> 

                <div class="row images-box three-promotions">
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/wallet.png" class="img-responsive">
                      <h3 class="brand-heading">dopłata do mieszkania</h1> 
                  </div>
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/umbrella.png" class="img-responsive">
                      <h3 class="brand-heading">ubezpieczenie</h1> 
                  </div>
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/percent.png" class="img-responsive">
                      <h3 class="brand-heading">rabat na wykończenie</h1> 
                  </div>
              </div>
            </hgroup>
          </div>
        </div>

        <div class="item slides">
          <div class="slide-3" style="background-image: url(<?php bloginfo('template_directory') ?>/images/main3.jpg);">
              <div class="overlay"></div>
          </div>
          <div class="hero">        
            <hgroup>
                <h1>Program <strong>Benefit home</strong> to najkorzystniejszy</br>sposób na zakup wymarzonego mieszkania</h1>   
                <h2 class="brand-heading">Gwarancja najniższej ceny oraz pakiet korzyści</h2> 

                <div class="row images-box three-promotions">
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/wallet.png" class="img-responsive">
                      <h3 class="brand-heading">dopłata do mieszkania</h1> 
                  </div>
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/umbrella.png" class="img-responsive">
                      <h3 class="brand-heading">ubezpieczenie</h1> 
                  </div>
                  <div class="col-md-4">
                      <img src="<?php bloginfo('template_directory') ?>/images/percent.png" class="img-responsive">
                      <h3 class="brand-heading">rabat na wykończenie</h1> 
                  </div>
              </div>
            </hgroup>
          </div>
        </div>

      </div> 
    </header>

    <section class="main-three">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           
            <?php
              echo rand(99999, 999999);
              $user = $user_login;

              $user_loged = $wpdb->get_var( "SELECT `display_name` FROM $wpdb->users WHERE `user_login`= '$user' " );
              echo "<p>Zalogowany jako {$user_loged}</p>";
            ?>
            <h4>Ten indywidualny <span>program lojalnościowy</span> umożliwia zakup mieszkań na wyjątkowych rynkowo, niedostępnych powszechnie warunkach. Program gwarantuje Pracownikom fachową obsługę Doradców Klienta (zakup, finansowanie) z gwarancją dopilnowania formalności, przy możliwie krótkim czasie nabycia lokalu.</h4>
            
          </div>  
          <div class="col-md-7">
            <h1 style="margin-top:120px;">Idee Programu <span>Benefit Home</span></h1>
            <ul>
              <li><i class="fa fa-angle-double-right"></i> Troska o pracowników ułatwiając im zakup lub zamianę mieszkania na większe</li>
              <li><i class="fa fa-angle-double-right"></i> Przedstawienie kadrze menadżerskiej wysokiej wartości narzędzie inwestycyjne w postaci mieszkania wraz z aranżacją</li>
              <li><i class="fa fa-angle-double-right"></i> Oferowanie unikatowego prograu lojalnościowego na zakup mieszkania przez pracowników</li>
              <li><i class="fa fa-angle-double-right"></i> Pozyskanie nowych ekspertów i pracowników, gwarantując im wsparcie przy relokacji</li>
              <li><i class="fa fa-angle-double-right"></i> Rekrutacja najlepszych pracowników / specjalistów</li>
            </ul>
          </div>  
          <div class="col-md-5">
            <img src="<?php bloginfo('template_directory') ?>/images/girl.png" class="img-responsive girl">
          </div>  
        </div>  
      </div>  
    </section>  

    <section class="main-two">
      <div class="container">
        <div class="row">
          <div class="col-md-6 box-one">
            <h6>Korzyści dla pracowników</h6>
            <ul>
              <li><i class="fa fa-angle-double-right"></i> Zaspokojenie potrzeb związanych z posiadaniem własnego mieszkania,</li>
              <li><i class="fa fa-angle-double-right"></i> Zwiększenie zdolności kredytowej pracownika,</li>
              <li><i class="fa fa-angle-double-right"></i> Doradztwo w zakresie kupna mieszkania i finansowania zakupu,</li>
              <li><i class="fa fa-angle-double-right"></i> Zwiększenie lojalności i poczucia bezpieczeństwa i przynależności wobec pracodawcy,</li>
              <li><i class="fa fa-angle-double-right"></i> Utożsamianie się z firmą,</li>
              <li><i class="fa fa-angle-double-right"></i> Wsparcie przy relokacji,</li>
              <li><i class="fa fa-angle-double-right"></i> Kompleksowa obsługa przy wyborze, zakupie i kredytowaniu mieszkania,</li>
              <li><i class="fa fa-angle-double-right"></i> Gwarancja 1% upustu,</li>
              <li><i class="fa fa-angle-double-right"></i> Karta Home profit.</li>
            </ul>
          </div> 
          <div class="col-md-6 box-two">
            <h6>Korzyści dla pracodawcy</h6>
            <ul>
              <li><i class="fa fa-angle-double-right"></i> Unikatowy element wynagrodzenia kafeteryjnego,</li>
              <li><i class="fa fa-angle-double-right"></i> Zwiększenie lojalności i przywiązania pracownika,</li>
              <li><i class="fa fa-angle-double-right"></i> Wykorzystanie programu do budowy wizerunku pracodawcy , employer brandingu, programu rozwoju pracowniczego, oraz jako narzędzia motywującego,</li>
              <li><i class="fa fa-angle-double-right"></i> Możliwość wynajęcia/zakupu mieszkania,</li>
              <li><i class="fa fa-angle-double-right"></i> Narzędzie zaspokajające potrzeby wyższego rzędu,</li>
              <li><i class="fa fa-angle-double-right"></i> Oferta spersonalizowana dla pracowników różnego szczebla,</li>
              <li><i class="fa fa-angle-double-right"></i> Umowy lojalnościowe,</li>
              <li><i class="fa fa-angle-double-right"></i> Oferta dla pracowników zagranicznych.</li>
            </ul>
          </div> 
        </div> 
      </div> 
    </section>      
      
    <section class="main-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Jak działa program <span>Benefit Home</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <strong>tempor incididunt ut labore et dolore</strong> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <strong>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </strong>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <strong>sed do eiusmod tempor incididunt</strong> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <strong>eiusmod tempor iidunt ut labore</strong> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <strong>ullamco laboris nisi ut aliquip ex ea commodo</strong> consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip emodo consequat.</p>
          </div>  
        </div>
      </div>      
    </section>

    <?php get_template_part( 'new_article' ); ?>

<?php get_footer(); ?>

