<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ?>/favicon.png">

    <title><?php bloginfo('name'); ?> <?php  wp_title(); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php bloginfo('template_directory') ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo site_url(); ?>">
                    <img id="logo" src="<?php bloginfo('template_directory') ?>/images/logo.png">
                </a>
            </div>

            <?php if ( is_user_logged_in() ) { ?>
              <style type="text/css">#menu-item-15 {display:block;}</style>
            <?php } else { ?>
              <style type="text/css">#menu-item-15 {display:none}</style>
            <?php } ?>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <?php
                    wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>

                <ul class="nav navbar-nav navbar-right">
                    <?php if ( is_user_logged_in() ) { ?>
                    <?php } else { ?>
                      <li>
                          <a class="sign-up" href="przystap-do-programu">Przystąp do programu</a>
                      </li>
                    <?php } ?>
                      <li>
                        <?php if ( is_user_logged_in() ) { ?>
                              <a href="<?php echo wp_logout_url($redirect); ?>"><i class="fa fa-user"></i> Wyloguj</a>
                        <?php } else { ?>
                              <a href="log-in"><i class="fa fa-user"></i> Logowanie</a>
                        <?php } ?>
                      </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- modal 
    <div class="modal fade" id="logowanie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Zaloguj się</h4>
          </div>
          <div class="modal-body">
            <?php //echo do_shortcode('[profilepress-login id="1"]'); ?>
          </div>
        </div>
      </div>
    </div>
    end modal -->