<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $page_title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>public/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?=base_url()?>public/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?=base_url()?>public/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?=base_url()?>public/css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a>WannaLearn</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block m-0 p-0">
                <li><a href="<?=base_url()?>home.html" class="nav-link text-primary">Home</a></li>
                <li><a href="<?=base_url()?>tutorials.html" class="nav-link text-primary">Tutorials</a></li>
                <li><a href="<?=base_url()?>contact.html" class="nav-link text-primary">Contact Us</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <?php
                  if(isset($_SESSION['user']))
                  {
                    ?>
                    <li><?=$this->session->userdata('user')?></li>
                    <li class="cta"><a href="<?=base_url()?>logout" class="nav-link"><span>Logout</span></a></li>
                    <?php
                  }
                ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
    </header>
    <div class="site-wrap">