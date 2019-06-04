<?php
session_start();

$pg = basename($_SERVER['PHP_SELF'], '.php');
// $pg = basename(get_page_template(), '.php');

// Check where user are in the World 🗺
// require "geolocation.php";

if(!empty($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}

require 'Language.class.php';
$lang = new Language();

?>




<!doctype html>
<html lang="pt-br">

<head>
    <!-- Basic Page Needs 
    ================================================== -->
    <meta charset="UTF-8">    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if (isset($pg) && $pg != 'index') {echo ucwords(str_replace("-", " ", $pg)) . ' - ';} ?>ISAÍAS - Montador de móveis</title>
    <meta name="author" content="Daniel Kogut - danielkogut.com">
    <meta name="Description" content="Montador de Móveis, Montagem de móveis, Marcenaria, Desmontagem de Móveis">
    <meta name="keywords" content="Montador de Móveis, Montagem de móveis, Marcenaria, Desmontagem de Móveis">
    <meta name="robots" content="index, follow">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">
    <!--[if IE]><link rel="shortcut icon" href="img/favicon.ico"><![endif]-->

    <!-- CSS
    ================================================== --> 
    <!-- STYLE.CSS -->  
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo filemtime('assets/css/style.css'); ?>">
    <!-- FONTAWESOME.CSS -->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   
    <!-- STYLE.CSS -->  
    <link rel="stylesheet" href="includes/font/flaticon.css?v=<?php echo filemtime('includes/font/flaticon.css'); ?>">
    
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->     


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1640603-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-1640603-8');
</script>


</head>

<body class="<?php echo $pg; ?>">

    <!-- BEGIN PRELOADER -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SWITCH STYLE -->
    <div class="menu-overlay"></div>
           
    <!-- SWITCH STYLE -->
    <!-- <div class="switch__container">
        <input id="switch-shadow" class="switch switch--shadow" type="checkbox" value="checked">
        <label for="switch-shadow"></label>
    </div> -->


    <!-- BEGIN SCROLL TOP BUTTON -->
    <div class="scrollToTop" >
        <a href="#"><i class="fas fa-arrow-circle-up"></i></a>
    </div>
    <!-- END SCROLL TOP BUTTON -->


    <!-- WHATSAPP -->
    <a class="whatsapp" href="https://web.whatsapp.com/send?phone=5521981873374" target="_blank"></a>

    



    <div class="header-hamburguer">
        <div class="item-hamburguer">
            <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="60">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20"></path>
            <path class="line middle" d="m 70,50 h -40"></path>
            <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20"></path>
            </svg>
        </div>
    </div>


    <section class="inicial">

    

    <header>
    

        <div class="barra-init container-fluid">
            
            <!-- <ul>
                <li><a href="?lang=pt-br" <?php if( $lang->getLanguage() == "pt-br" ){ echo 'class="active"'; } ?>>Pt</a></li>
                <li><a href="?lang=en" <?php if( $lang->getLanguage()== "en" ){ echo 'class="active"'; } ?>>En</a></li>
            </ul> -->

            <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="">Instagram</a></li>
            </ul>
        </div>
        

            <div class="container">
                <div class="header-menu">    
                    <!-- <h1 class="site-title animated fadeInUpBig"> <img src="assets/img/logo2.png" width="120px" alt=""> </h1> -->
                    <h1 class="site-title"> <img src="assets/img/logo2.png" width="120px" alt=""> </h1>

                    <nav>
                        <ul class="main-menu">
                            <li class="menu-item animated fadeInUp "><a href="
                                <?php if ( $pg == "portfolio" ) { echo "index.php";}  ?>#sobre"> <?php $lang->get('SOBRE'); ?> </a></li>
                            <li class="menu-item animated fadeInUp delay-30ms "><a href="#servicos"> <?php $lang->get('SERVICOS'); ?> </a></li>
                            <!-- <li class="menu-item animated fadeInUp delay-50ms "><a href="#portfolio"> <?php $lang->get('ORCAMENTO'); ?> </a></li> -->
                            <li class="menu-item animated fadeInUp delay-70ms "><a href="#contato"><?php $lang->get('CONTATO'); ?>  </a></li>
                        </ul>
                    </nav>
                </div>
            </div>




   
        
        

    </header>

