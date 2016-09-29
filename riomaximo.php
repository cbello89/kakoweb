﻿
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

$query_riomaximo="SELECT * FROM fotos WHERE Subcategory='riomaximo'";
$getfotos_riomaximo = mysqli_query($kako, $query_riomaximo);
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
                        <li onclick="go_view('index')"><a >Inicio</a></li>
                        <li ><a >Acerca de Kako</a></li>
                        <li ><a >Noticias</a></li>

                        <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" onmouseover="show_dropdown('dropdown_proyecto')" onmouseout="hide_dropdown('dropdown_proyecto')"   href="#proyectos">Proyectos<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown_proyecto" onmouseover="show_dropdown('dropdown_proyecto')" onmouseout="hide_dropdown('dropdown_proyecto')">
                                <li onclick="go_view('common')"><a id="common" >Lugares en Comun</a></li>
                                <li onclick="go_view('gente')"><a id="gente">Gente de Cocodrilos</a></li>
                                <li onclick="go_view('hermosa')"><a id="hermosa">La Tierra mas Hermosa</a></li>
                                <li onclick="go_view('piotai')"><a  id="piotai">Pio Tai</a></li>
                            </ul>
                        </li>

                        <li class=" active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" onmouseover="show_dropdown('dropdown_reportajes')" onmouseout="hide_dropdown('dropdown_reportajes')"  href="#reportajes">Reportajes<span class="caret" ></span></a>
                            <ul class="dropdown-menu" id="dropdown_reportajes" onmouseover="show_dropdown('dropdown_reportajes')" onmouseout="hide_dropdown('dropdown_reportajes')">
                                <li onclick="go_view('riomaximo')"><a id="riomaximo">Flamencos</a></li>
                                <li onclick="go_view('remedios')"><a id="remedios">Parrandas de Remedio</a></li>
                                <li onclick="go_view('baloons')"><a id="baloons">Pescadores</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  onmouseover="show_dropdown('dropdown_ademas')" onmouseout="hide_dropdown('dropdown_ademas')" href="#ademas">Ademas..<span class="caret" ></span></a>
                            <ul class="dropdown-menu" id="dropdown_ademas" onmouseover="show_dropdown('dropdown_ademas')" onmouseout="hide_dropdown('dropdown_ademas')">
                                <li onclick="go_view('tpp')"><a id="tpp">Travel People and Places</a></li>
                                <li onclick="go_view('concert')"><a id="concert">Conciertos</a></li>
                                <li onclick="go_view('landscape')"><a id="landscape">Paisajes</a></li>
                                <li onclick="go_view('advertise')"><a id="advertise">Publicidad</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  onmouseover="show_dropdown('dropdown_film')" onmouseout="hide_dropdown('dropdown_film')" href="#filmografia">Filmografia <span class="caret"></span> </a>
                            <ul class="dropdown-menu" id="dropdown_film" onmouseover="show_dropdown('dropdown_film')" onmouseout="hide_dropdown('dropdown_film')" >
                                <li onclick="go_view('ellatrabaja')"><a id="ellatrabaja">Ella Trabaja</a></li>
                                <li onclick="go_view('matahambre')"><a id="matahambre">Al sur de Matahambre</a></li>
                                <li onclick="go_view('cocodrilos')"><a id="cocodrilos">Hombres de Cocodrilos</a></li>
                            </ul>

                        </li>

                        <!--<li ><a href="#works">Portafolio</a></li>-->
                        <li ><a href="#contact">Contacto</a></li>
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
                <h2 class="text-center wowload fadeInUp" style="margin-left: 15px">Los flamencos Rosados de Río Máximo</h2>
            </div>
            <div class="row wowload fadeInLeft">
                <p>Ya llegan. La multitud de aves se aproxima rodeada por los hombres y los niños de Mola que los dirigen gritando en tanto agitan los brazos.
                    Pero esto es más que un simple pastoreo. El graznido de los flamencos se mezcla con las voces de los hombres.
                    Marchan juntos y una energía extraña se deja sentir, emergiendo de la comunión del ave y el hombre que no la lleva a un corral o a un matadero,
                    sino a dar un paso más en su estudio y su cuidado.</p>
            </div>

            <div class="row wowload fadeInLeft">
                <div class="col-md-12 text-center ">
                    <a class="btn btn-primary" href="http://oncubamagazine.com/oncuba-media/los-flamencos-rosados-de-rio-maximo/"><i class="fa fa-sign-in"></i> Ir al Reportaje</a>
                </div>
            </div>

        </div>

        <div class="col-md-6 wowload fadeInLeft">
            <?php
                while($result_riomaximo=mysqli_fetch_assoc($getfotos_riomaximo)){
                    $photo_path=$dir.$result_riomaximo["Category"].'/'.$result_riomaximo["Subcategory"].'/'.$result_riomaximo["F_name"];
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
        <a href="#" class="face wowload fadeInUp"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="#" class="insta wowload fadeInUp"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="#" class="twitter wowload fadeInUp"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="#" class="linkedin wowload fadeInUp"><i class="fa fa-linkedin fa-2x"></i></a>
    </div>
    <div class="row">
        <p>&copy; 2016 Kako Escalona. Todos los derechos reservados.</p>
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