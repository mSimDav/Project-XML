<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>

  <body class="size-1140">
     
      
      
  	<!-- PREMIUM FEATURES BUTTON -->
  	    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="index.php" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="img/premium-features.png" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="img/premium-features.png" alt="">
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login as administrator</a></li>
              
              </ul>
            </div>
          </div>  
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">EUFORIA TRAVEL</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">Travel. Your money will return. Your time won’t.</p>
            </div>  
          </header>
            
<?php
$data=simplexml_load_file('images.xml');
foreach($data->date as $date){
?>
             
          <div class="background-white full-width"> 
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="" title="">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10"><?php echo $date->title; ?></h3>
                    <p class="text-white text-size-14 margin-bottom-20"></p><?php echo $date->description; ?>  </div> 
                </div> 
                <img  src="<?php echo $date->image;?>" />
              </a>	
            </div>
              
              
       
            
     <?php
    
}
?>      
            
          </div>  
        </article>
      </main>
      
      <!-- FOOTER -->
      <footer>
        <!-- Contact Us -->
        <div class="background-dark padding text-center footer-social">
          <a class="margin-right-10" target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">FACEBOOK</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">TWITTER</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.instagram.com"><i class="icon-instagram_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">INSTAGRAM</span></a>
          <a target="_blank" href="https://www.linkedin.com"><i class="icon-linked_in_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">LINKEDIN</span></a>                                                                         
        </div>

        <!-- Main Footer -->
        
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
        
        <!-- Bottom Footer -->
        <section class="padding background-dark full-width">
          <div class="text-center">
            <p class="text-size-12">Copyright 2021</p>
          </div>
        </section>
      </footer>
    </div>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>