
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
<link rel="stylesheet" href="assets/animate/common.css" />
<!--<link rel="stylesheet" href="assets/animate/proyectos.css" />-->
<!--<link rel="stylesheet" href="assets/animate/reportaje.css" />-->
<!--<link rel="stylesheet" href="assets/animate/filmografia.css" />-->
<!--<link rel="stylesheet" href="assets/animate/ademas.css" />-->


<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" class="fa fa-camera-retro">
<link rel="icon"  class="fa-camera-retro">


<link rel="stylesheet" href="assets/style.css">
<!--The queries-->
<!--common-->
<?php

include_once("connetion.php");
$dir = "./images/portfolio/";

$query_remedios="SELECT * FROM fotos WHERE Subcategory='remedios'";
$getfotos_remedios = mysqli_query($kako, $query_remedios);
//$result_common=mysqli_fetch_all($getfotos_common);
//$size_common=sizeof($result_common);

?>
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
                        <li><a onclick="go_view('index_EN')">Home</a></li>
                        <li ><a onclick="go_tag('index_EN','about')" >About</a></li>
                        <!--                  <li ><a href="#news">Noticias</a></li>-->

                        <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" onmouseover="show_dropdown('dropdown_proyecto')" onmouseout="hide_dropdown('dropdown_proyecto')"   href="#proyectos">Projects<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown_proyecto" onmouseover="show_dropdown('dropdown_proyecto')" onmouseout="hide_dropdown('dropdown_proyecto')">
                                <li onclick="go_view('common_EN')"><a id="common" >Common Places</a></li>
                                <li onclick="go_view('gente_EN')"><a id="gente">People of Cocodrilos</a></li>
                                <li onclick="go_view('hermosa_EN')"><a id="hermosa">The most beautiful land </a></li>
                                <li><a  onclick="go_view('piotai_EN')"id="piotai">Pio Tai</a></li>
                            </ul>
                        </li>

                        <li class="dropdown  active"><a class="dropdown-toggle" data-toggle="dropdown" onmouseover="show_dropdown('dropdown_reportajes')" onmouseout="hide_dropdown('dropdown_reportajes')"  href="#reportajes">Reportages<span class="caret" ></span></a>
                            <ul class="dropdown-menu" id="dropdown_reportajes" onmouseover="show_dropdown('dropdown_reportajes')" onmouseout="hide_dropdown('dropdown_reportajes')">
                                <li onclick="go_view('riomaximo_EN')"><a id="riomaximo">The pink Flamingos of Maximo's river</a></li>
                                <li onclick="go_view('remedios_EN')"><a id="remedios">Surreal Cuba: Christmas Rousing</a></li>
                                <li onclick="go_view('baloons_EN')"><a id="baloons">Rubber match: Men vs. Fish in Cuba</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  onmouseover="show_dropdown('dropdown_ademas')" onmouseout="hide_dropdown('dropdown_ademas')" href="#ademas">Also..<span class="caret" ></span></a>
                            <ul class="dropdown-menu" id="dropdown_ademas" onmouseover="show_dropdown('dropdown_ademas')" onmouseout="hide_dropdown('dropdown_ademas')">
                                <li><a>Travel/People/Places</a></li>
                                <li><a>Concerts</a></li>
                                <li><a>Landscape</a></li>
                                <li><a>Advertise</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  onmouseover="show_dropdown('dropdown_film')" onmouseout="hide_dropdown('dropdown_film')" href="#filmografia">Film <span class="caret"></span> </a>
                            <ul class="dropdown-menu" id="dropdown_film" onmouseover="show_dropdown('dropdown_film')" onmouseout="hide_dropdown('dropdown_film')" >
                                <li><a>She Works</a></li>
                                <li><a>South of Matahambre</a></li>
                                <li><a>People of Cocodrilos</a></li>
                            </ul>

                        </li>

                        <!--<li ><a href="#works">Portafolio</a></li>-->
                        <li ><a  onclick="go_tag('index_EN','contact')">Contact</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
</div>
<!-- #Header Starts -->


<div id="common" class="container-fluid main spacer">
    <div class="row">
        <div class="col-md-6" style="margin-top: 150px">
            <div class="row wowload fadeInLeft">
                <h2 class="text-center wowload fadeInUp" style="margin-left: 15px">Surreal Cuba: Christmas Rousing</h2>
            </div>
            <div class="row wowload fadeInLeft">
                <p>Desde que la celebración surgió en Remedios (200 millas al este La Habana) se ha replicado en otros pueblos del centro de Cuba.
                    El evento es parte espectáculo de Las Vegas, parte Carnaval de Venecia, parte Festival de Fuegos Artificiales de San Sebastián.
                    Durante un año entero, los dos barrios de Remedios trabajan en secreto para producir las carrozas más elaboradas, los mejores trabajos de plaza, y la mayor pirotecnia.</p>
            </div>

            <div class="row wowload fadeInLeft">
                <div class="col-md-12 text-center ">
                    <a class="btn btn-primary" href="https://thestandglobal.com/surreal-cuba-christmas-rousing/"><i class="fa fa-sign-in"></i> Ir al Reportaje</a>
                </div>
            </div>

        </div>

        <div class="col-md-6 wowload fadeInLeft">
            <?php
                while($result_remedios=mysqli_fetch_assoc($getfotos_remedios)){
                    $photo_path=$dir.$result_remedios["Category"].'/'.$result_remedios["Subcategory"].'/'.$result_remedios["F_name"];
                    echo "<div class='row photo_row'>
                            <img src='$photo_path' class='img-responsive photo' ></div>";
                }
            ?>
        </div>

    </div>



</div>


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