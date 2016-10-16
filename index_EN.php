<?php

include_once("connetion.php");
include_once("queries.php");
$dir = "./images/portfolio/";

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Kako Escalona</title>



<!-- font awesome -->
<link href="css/font-awesome.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<!--<link rel="stylesheet" href="assets/animate/set.css" />-->
<link rel="stylesheet" href="assets/animate/proyectos.css" />
<link rel="stylesheet" href="assets/animate/reportaje.css" />
<link rel="stylesheet" href="assets/animate/filmografia.css" />
<link rel="stylesheet" href="assets/animate/ademas.css" />
<link rel="stylesheet" href="assets/animate/news.css"/>

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<!--<link rel="shortcut icon" class="fa fa-camera-retro">-->
<!--<link rel="icon"  class="fa-camera-retro">-->


<link rel="stylesheet" href="assets/style.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="150">
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container-fluid">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"> <div class="main_name">KAKO ESCALONA</div></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                  <li class="active"><a href="#home">Home</a></li>
                  <li ><a href="#about">About</a></li>
<!--                  <li ><a href="#news">Noticias</a></li>-->

                  <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" onmouseover="show_dropdown('dropdown_proyecto')" onmouseout="hide_dropdown('dropdown_proyecto')"   href="#proyectos">Projects<span class="caret"></span></a>
                      <ul class="dropdown-menu" id="dropdown_proyecto" onmouseover="show_dropdown('dropdown_proyecto')" onmouseout="hide_dropdown('dropdown_proyecto')">
                          <li onclick="go_view('common_EN')"><a id="common" >Common Places</a></li>
                          <li onclick="go_view('gente_EN')"><a id="gente">People of Cocodrilos</a></li>
                          <li onclick="go_view('hermosa_EN')"><a id="hermosa">The most beautiful land </a></li>
                          <li><a  onclick="go_view('piotai_EN')"id="piotai">Pio Tai</a></li>
                      </ul>
                  </li>

                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" onmouseover="show_dropdown('dropdown_reportajes')" onmouseout="hide_dropdown('dropdown_reportajes')"  href="#reportajes">Reportages<span class="caret" ></span></a>
                      <ul class="dropdown-menu" id="dropdown_reportajes" onmouseover="show_dropdown('dropdown_reportajes')" onmouseout="hide_dropdown('dropdown_reportajes')">
                          <li onclick="go_view('riomaximo_EN')"><a id="riomaximo">The pink Flamingos of Maximo's river</a></li>
                          <li onclick="go_view('remedios_EN')"><a id="remedios">Surreal Cuba: Christmas Rousing</a></li>
                          <li onclick="go_view('baloons_EN')"><a id="baloons">Rubber match: Men vs. Fish in Cuba</a></li>
                      </ul>
                  </li>

                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  onmouseover="show_dropdown('dropdown_ademas')" onmouseout="hide_dropdown('dropdown_ademas')" href="#ademas">Also..<span class="caret" ></span></a>
                      <ul class="dropdown-menu" id="dropdown_ademas" onmouseover="show_dropdown('dropdown_ademas')" onmouseout="hide_dropdown('dropdown_ademas')">
                          <li>
                              <?php
                                  $result_tpp=mysqli_fetch_assoc($getfotos_tpp);
                                  $first_photo_path_tpp=$dir.$result_tpp['Category'].'/'.$result_tpp['Subcategory'].'/'.$result_tpp['F_name'];
                                  echo "<a href='$first_photo_path_tpp' data-gallery='#tpp'>Travel/People/Places</a>"
                              ?>
                          </li>
                          <li>
                              <?php
                                  $result_concert=mysqli_fetch_assoc($getfotos_concert);
                                  $first_photo_path_concert=$dir.$result_concert['Category'].'/'.$result_concert['Subcategory'].'/'.$result_concert['F_name'];
                                  echo "<a href='$first_photo_path_concert' data-gallery='#concert'>Concerts</a>"
                              ?>
                          </li>
                          <li>
                              <?php
                                  $result_landscape=mysqli_fetch_assoc($getfotos_landscape);
                                  $first_photo_path_landscape=$dir.$result_landscape['Category'].'/'.$result_landscape['Subcategory'].'/'.$result_landscape['F_name'];
                                  echo "<a href='$first_photo_path_landscape' data-gallery='#landscape'>Landscape</a>"
                              ?>
                          </li>
                          <li>
                              <?php
                                  $result_advertise=mysqli_fetch_assoc($getfotos_advertise);
                                  $first_photo_path_advertise=$dir.$result_advertise['Category'].'/'.$result_advertise['Subcategory'].'/'.$result_advertise['F_name'];
                                  echo "<a href='$first_photo_path_advertise' data-gallery='#advertise'>Advertise</a>"
                              ?>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  onmouseover="show_dropdown('dropdown_film')" onmouseout="hide_dropdown('dropdown_film')" href="#filmografia">Films <span class="caret"></span> </a>
                      <ul class="dropdown-menu" id="dropdown_film" onmouseover="show_dropdown('dropdown_film')" onmouseout="hide_dropdown('dropdown_film')" >
                          <li>
                              <?php
                                  $result_ellatrabaja=mysqli_fetch_assoc($getfotos_ellatrabaja);
                                  $first_photo_path_ellatrabaja=$dir.$result_ellatrabaja['Category'].'/'.$result_ellatrabaja['Subcategory'].'/'.$result_ellatrabaja['F_name'];
                                  echo "<a href='$first_photo_path_ellatrabaja' data-gallery='#ellatrabaja'>She Works</a>"
                              ?>
                          </li>
                          <li>
                              <?php
                                  $result_matahambre=mysqli_fetch_assoc($getfotos_matahambre);
                                  $first_photo_path_matahambre=$dir.$result_matahambre['Category'].'/'.$result_matahambre['Subcategory'].'/'.$result_matahambre['F_name'];
                                  echo "<a href='$first_photo_path_matahambre' data-gallery='#matahambre'>South of Matahambre</a>"
                              ?>
                          </li>

                          <li>
                              <?php
                                  $result_cocodrilos=mysqli_fetch_assoc($getfotos_cocodrilos);
                                  $first_photo_path_cocodrilos=$dir.$result_cocodrilos['Category'].'/'.$result_cocodrilos['Subcategory'].'/'.$result_cocodrilos['F_name'];
                                  echo "<a href='$first_photo_path_cocodrilos' data-gallery='#cocodrilos'>People of Cocodrilos</a>"
                              ?>
                          </li>
                      </ul>

                  </li>

                 <!--<li ><a href="#works">Portafolio</a></li>-->
                 <li ><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->

<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="images/1.jpg" alt="banner">
        </div>
      </div>
    </div>
<!-- #Slider Ends -->
</div>




<!--columns start-->
<div id="about" class="container-fluid spacer about">
   <div class="row">
       <div class="col-sm-3 profile_photo">
            <img src="images/DSC_0017.jpg" class="img-responsive">
       </div>

       <div class="col-sm-6">
           <div class="row">
               <h2 class="text-center">Carlos Ernesto Escalona Martí</h2>
           </div>


           <p><strong>Havana, March 21, 1984.</strong> Photographer, documentarian, professor. Received as Bachelor in Cinematography at Arts University of Havana (ISA) on 2008.
               Contributes to “The stand Global” and “Progreso Semanal”. Exhibitor at 12th Biennial of Havana with “Gente de Cocodrilos” (“People of Cocodrilos”).
               1st place in Landscape in “Naturaleza digital 2014” nature photography contest.
           </p>

           <p> Director of Photography in documentary movies  “She Works” (2006), “South of Matahambre”(2008) and “People of Cocodrilos” (2013).
               From 2012 has taught the workshop “Photojournalism and Social Documentary” at ISA, University of Havana (UH) and American University of Washington D.C (AU). Lecturer in photography for AU, Nebraska-Lincoln University, New Jersey College, UH, ISA, School of Creative Photography of Havana.
           </p>

           <div class="row text-center">
               <a class="btn btn-primary" href=" CV%20Carlos%20Ernesto%20Escalona.pdf"><i class="fa fa-download"></i> Download Resume</a>
           </div>
       </div>

       <div class="col-sm-3">
           <div class="row news">
               <div class="col-sm-4 date">
                   <div class="row first"><strong>Feb</strong></div>
                   <div class="row second"><strong>2017</strong></div>
               </div>

               <div class="col-sm-8 text">
                   <div class="row">Exhibición de la serie fotográfica "Lugares Comunes|Common Places" en el espacio La Pared Negra de la Fabrica de Arte Cubano </div>
               </div>
           </div>

           <div class="row news1">
               <div class="col-sm-4 date1">
                   <div class="row first" style="font-size: 50px;"><strong>28</strong></div>
                   <div class="row first" style="font-size: 30px"><strong>May</strong></div>
                   <div class="row second"><strong>2016</strong></div>
               </div>

               <div class="col-sm-8 text">
                   <div class="row">Presentacion de la ponencia "Cine para antropologos o Etnografia para cineastas. Multidiciplinariedad en el proyecto documental 'Hombres de Cocodrilos'. Congreso de Latin American Studies Association (LASA). NY, EUA"</div>
               </div>
           </div>

           <div class="row news1">
               <div class="col-sm-4 date1">
                   <div class="row first"><strong>Abr</strong></div>
                   <div class="row second"><strong>2015</strong></div>
               </div>

               <div class="col-sm-8 text">
                   <div class="row">"Gente de Cocodrilos" se exhibe como parte del proyecto "Zona Franca", exposiciones colaterales a la XII Bienal de La Habana. Fortaleza San Carlos de la Cabaña</div>
               </div>
           </div>

       </div>

   </div>
</div>
<!--columns start-->

<!-- proyectos -->
<div id="proyectos"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp long_title">
        <img src="images/portadas/1.common.jpg" alt="img01"/>
        <figcaption>
            <h2>Common Places</h2>
            <p><a href="common.php">View more</a></p>
        </figcaption>
    </figure>

     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portadas/1.Gente.jpg" alt="img01"/>
        <figcaption>
            <h2>People of Cocodrilos</h2>
            <p><a href="gente.php">View more</a></p>
        </figcaption>
    </figure>

    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portadas/1.hermosa.jpg" alt="img01"/>
        <figcaption>
            <h2>The most beautiful land</h2>
            <p><a href="hermosa.php">View more</a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar wowload fadeInUp short_title">
        <img src="images/portadas/1.piotai.jpg" alt="img01"/>
        <figcaption>
            <h2>Pio Tai</h2>
            <p><a href="piotai.php">View more</a></p>
        </figcaption>
    </figure>

</div>
<!-- proyectos -->

<!-- reportages -->
<div id="reportajes"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp long_title">
        <img src="images/portadas/Sabana Camaguey 08-2011382.jpg" alt="img01"/>
        <figcaption>
            <h2>The pink Flamingos of Maximo river</h2>
            <p><a href="riomaximo.php">View more</a></p>
        </figcaption>
    </figure>

    <figure class="effect-oscar  wowload fadeInUp long_title">
        <img src="images/portadas/2.parrandas.jpg" alt="img01"/>
        <figcaption>
            <h2>Surreal Cuba: Christmas Rousing</h2>
            <p><a href="remedios.php">View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp long_title">
        <img src="images/portadas/2.baloon.jpg" alt="img01"/>
        <figcaption>
            <h2>Rubber match: Men vs. Fish in Cuba</h2>
            <p><a href="baloons.php">View more</a></p>
        </figcaption>
    </figure>
</div>
<!-- reportages -->


<!-- ademas -->
<div id="ademas"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp long_title">
        <img src="images/portadas/3.tpp.jpg" alt="img01"/>
        <figcaption>
            <h2>Travel /People
                /Places</h2>
            <?php
             $result_tpp=mysqli_fetch_assoc($getfotos_tpp);
             $first_photo_path_tpp=$dir.$result_tpp['Category'].'/'.$result_tpp['Subcategory'].'/'.$result_tpp['F_name'];
                echo "<p><a href='$first_photo_path_tpp' data-gallery='#tpp'>View more</a></p>"
            ?>
        </figcaption>
    </figure>


    <figure class="effect-oscar  wowload fadeInUp short_title">
        <img src="images/portadas/3.concerts.jpg" alt="img01"/>
        <figcaption>
            <h2>Concerts</h2>
            <?php
                $result_concert=mysqli_fetch_assoc($getfotos_concert);
                $first_photo_path_concert=$dir.$result_concert['Category'].'/'.$result_concert['Subcategory'].'/'.$result_concert['F_name'];
                echo "<p><a href='$first_photo_path_concert' data-gallery='#concert'>View more</a></p>"
            ?>

        </figcaption>
    </figure>

    <figure class="effect-oscar  wowload fadeInUp short_title">
        <img src="images/portadas/3.landscape.jpg" alt="img01"/>
        <figcaption>
            <h2>Landscape</h2>
            <?php
                $result_landscape=mysqli_fetch_assoc($getfotos_landscape);
                $first_photo_path_landscape=$dir.$result_landscape['Category'].'/'.$result_landscape['Subcategory'].'/'.$result_landscape['F_name'];
                echo "<p><a href='$first_photo_path_landscape' data-gallery='#landscape'>View more</a></p>"
            ?>

        </figcaption>
    </figure>
    <figure class="effect-oscar wowload fadeInUp short_title">
        <img src="images/portadas/3.advertise.jpg" alt="img01"/>
        <figcaption>
            <h2>Advertise</h2>
            <?php
                $result_advertise=mysqli_fetch_assoc($getfotos_advertise);
                $first_photo_path_advertise=$dir.$result_advertise['Category'].'/'.$result_advertise['Subcategory'].'/'.$result_advertise['F_name'];
                echo "<p><a href='$first_photo_path_advertise' data-gallery='#advertise'>View more</a></p>"
            ?>
        </figcaption>
    </figure>
</div>
<!-- ademas -->

<!--las galerias-->
<!--TPP-->
<div id="links">
    <?php
   
    while($result_tpp=mysqli_fetch_assoc($getfotos_tpp)){
        $photo_path=$dir.$result_tpp['Category'].'/'.$result_tpp['Subcategory'].'/'.$result_tpp['F_name'];
        echo "<p><a href='$photo_path' data-gallery='#tpp'></a></p>";
    }
    ?>
</div>

<!--CONCIERTOS-->
<div id="links">
    <?php
    while($result_concert=mysqli_fetch_assoc($getfotos_concert)){
        $photo_path=$dir.$result_concert['Category'].'/'.$result_concert['Subcategory'].'/'.$result_concert['F_name'];
        echo "<p><a href='$photo_path' data-gallery='#concert'></a></p>";
    }
    ?>


</div>

<!--LANDSCAPE-->
<div id="links">
    <?php
    while($result_landscape=mysqli_fetch_assoc($getfotos_landscape)){
        $photo_path=$dir.$result_landscape['Category'].'/'.$result_landscape['Subcategory'].'/'.$result_landscape['F_name'];
        echo "<p><a href='$photo_path' data-gallery='#landscape'></a></p>";
    }
    ?>
</div>

<!--ADVERTISE-->
<div id="links">
    <?php
    while($result_advertise=mysqli_fetch_assoc($getfotos_advertise)){
        $photo_path=$dir.$result_advertise['Category'].'/'.$result_advertise['Subcategory'].'/'.$result_advertise['F_name'];
        echo "<p><a href='$photo_path' data-gallery='#advertise'></a></p>";
    }
    ?>
</div>


<!-- filmografia-->
<div id="filmografia"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp short_title ">
        <img src="images/portadas/4.sHeworks1.jpg" alt="img01"/>
        <figcaption>
            <h2>She Works</h2>
            <?php
                $result_ellatrabaja=mysqli_fetch_assoc($getfotos_ellatrabaja);
                $first_photo_path_ellatrabaja=$dir.$result_ellatrabaja['Category'].'/'.$result_ellatrabaja['Subcategory'].'/'.$result_ellatrabaja['F_name'];
                echo "<p><a href='$first_photo_path_ellatrabaja' data-gallery='#ellatrabaja'>View more</a></p>"
            ?>
        </figcaption>
    </figure>

    <figure class="effect-oscar  wowload fadeInUp short_title">
        <img src="images/portadas/4.Matahambre2.jpg" alt="img01"/>
        <figcaption>
            <h2>South of Matahambre</h2>
            <?php
                $result_matahambre=mysqli_fetch_assoc($getfotos_matahambre);
                $first_photo_path_matahambre=$dir.$result_matahambre['Category'].'/'.$result_matahambre['Subcategory'].'/'.$result_matahambre['F_name'];
                echo "<p><a href='$first_photo_path_matahambre' data-gallery='#matahambre'>View more</a></p>"
            ?>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp short_title">
        <img src="images/portadas/4.DoPCocodrilos2.jpg" alt="img01"/>
        <figcaption>
            <h2>People of Cocodrilos</h2>
            <?php
                $result_cocodrilos=mysqli_fetch_assoc($getfotos_cocodrilos);
                $first_photo_path_cocodrilos=$dir.$result_cocodrilos['Category'].'/'.$result_cocodrilos['Subcategory'].'/'.$result_cocodrilos['F_name'];
                echo "<p><a href='$first_photo_path_cocodrilos' data-gallery='#cocodrilos'>View more</a></p>"
            ?>
        </figcaption>
    </figure>
</div>
<!--filmografia-->


<!--las galerias-->
<!--ELLATRABAJA-->
<div id="links">
    <?php
    while($result_ellatrabaja=mysqli_fetch_assoc($getfotos_ellatrabaja)){
        $photo_path=$dir.$result_ellatrabaja['Category'].'/'.$result_ellatrabaja['Subcategory'].'/'.$result_ellatrabaja['F_name'];
        echo "<p><a href='$photo_path' data-gallery='#ellatrabaja'></a></p>";
    }
    ?>
</div>

<!--MATAHAMBRE-->
<div id="links">
    <?php
    while($result_matahambre=mysqli_fetch_assoc($getfotos_matahambre)){
        $photo_path=$dir.$result_matahambre['Category'].'/'.$result_matahambre['Subcategory'].'/'.$result_matahambre['F_name'];
        echo "<p><a href='$photo_path' data-gallery='#matahambre'></a></p>";
    }
    ?>
</div>

<!--COCODRILOS-->
<div id="links">
    <?php
    while($result_cocodrilos=mysqli_fetch_assoc($getfotos_cocodrilos)){
        $photo_path=$dir.$result_cocodrilos['Category'].'/'.$result_cocodrilos['Subcategory'].'/'.$result_cocodrilos['F_name'];
        echo "<p><a href='$photo_path' data-gallery='#cocodrilos'></a></p>";
    }
    ?>
</div>



<!--Contact Begins-->
<div id="contact" class="spacer">
    <!--Contact Starts-->
    <div class="container contactform center">

        <h2 class="text-center  wowload fadeInUp">Contact</h2>

        <div id="contact-form" method="post" action="contacto.php">

            <div class="row wowload fadeInLeftBig">
                <div class="col-sm-6">
                    <input id="name" type="text"  placeholder="Your name *" required="required">
                </div>

                <div class="col-sm-6">
                    <input id="lastname" type="text"  placeholder="Your last name *" required="required">
                </div>

                <div class="col-sm-6">
                    <input id="e-mail" type="text"  placeholder="Your email *" required="required">
                </div>

                <div class="col-sm-6">
                    <input id="phone" type="text"   placeholder="Your phone number">
                </div>
                <div class="col-md-12">
                    <textarea id="message"  placeholder="Message for me *" rows="4" required="required"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button onclick="sendEmail()" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact Ends-->



<!-- Footer Starts -->
<div id="footer" class="col-md-12 text-center">
        <div class="row social ">
            <a href="https://www.facebook.com/Kako.Escalona" class="face wowload fadeInUp"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="http://instagram.com/kakoescalona" class="insta wowload fadeInUp"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="http://twitter.com/kakoescalona" class="twitter wowload fadeInUp"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="https://cu.linkedin.com/in/carlos-ernesto-escalona-mart%C3%AD-a2596887" class="linkedin wowload fadeInUp"><i class="fa fa-linkedin fa-2x"></i></a>
            <a href="https://twitter.com/KakoEscalona?lang=en" class="flickr wowload fadeInUp"><i class="fa fa-flickr fa-2x"></i></a>
            <a href="https://deaviaje.wordpress.com/tag/carlos-ernesto-escalona/" class="wordpress wowload fadeInUp"><i class="fa fa-wordpress fa-2x"></i></a>
        </div>
    <div class="row">
        <p>&copy; 2016 Kako Escalona. All rights reserved.</p>
    </div>
</div>

<!-- # Footer Ends -->

<!-- # Flechita hacia arriba -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" >
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>

<!--sign shows up when email attempt occur, in case of a correct send or a failed send -->


    <div id="email" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>


<!-- email script -->
<script src="js/default.js"></script>

</body>
</html>