﻿
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
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
include_once("queries.php");
$dir = "./images/portfolio/";

$query_gente="SELECT * FROM fotos WHERE Subcategory='gente'";

$getfotos_gente = mysqli_query($kako, $query_gente);


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
                        <li ><a onclick="go_view('index')">Inicio</a></li>
                        <li ><a onclick="go_tag('index','about')" >Acerca de Kako</a></li>

                        <li class=" active dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" onmouseover="show_dropdown('dropdown_proyecto')" onmouseout="hide_dropdown('dropdown_proyecto')"   href="#proyectos">Proyectos<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="dropdown_proyecto" onmouseover="show_dropdown('dropdown_proyecto')" onmouseout="hide_dropdown('dropdown_proyecto')">
                                <li onclick="go_view('common')"><a id="common" >Lugares Comunes</a></li>
                                <li onclick="go_view('gente')"><a id="gente">Gente de Cocodrilos</a></li>
                                <li onclick="go_view('hermosa')"><a id="hermosa">La Tierra más Hermosa</a></li>
                                <li onclick="go_view('piotai')"><a  id="piotai">Pio Tai</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" onmouseover="show_dropdown('dropdown_reportajes')" onmouseout="hide_dropdown('dropdown_reportajes')"  href="#reportajes">Reportajes<span class="caret" ></span></a>
                            <ul class="dropdown-menu" id="dropdown_reportajes" onmouseover="show_dropdown('dropdown_reportajes')" onmouseout="hide_dropdown('dropdown_reportajes')">
                                <li onclick="go_view('riomaximo')"><a id="riomaximo">Los flamencos Rosados de Río Máximo</a></li>
                                <li onclick="go_view('remedios')"><a id="remedios">Surreal Cuba: Christmas Rousing</a></li>
                                <li onclick="go_view('baloons')"><a id="baloons">Rubber match: Men vs. Fish in Cuba</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  onmouseover="show_dropdown('dropdown_ademas')" onmouseout="hide_dropdown('dropdown_ademas')" href="#ademas">Ademas..<span class="caret" ></span></a>
                            <ul class="dropdown-menu" id="dropdown_ademas" onmouseover="show_dropdown('dropdown_ademas')" onmouseout="hide_dropdown('dropdown_ademas')">
                                <li>
                                    <?php
                                    $result_tpp=mysqli_fetch_assoc($getfotos_tpp);
                                    $first_photo_path_tpp=$dir.$result_tpp['Category'].'/'.$result_tpp['Subcategory'].'/'.$result_tpp['F_name'];
                                    echo "<a href='$first_photo_path_tpp' data-gallery='#tpp'>Viajes/Gente/Lugares</a>"
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $result_concert=mysqli_fetch_assoc($getfotos_concert);
                                    $first_photo_path_concert=$dir.$result_concert['Category'].'/'.$result_concert['Subcategory'].'/'.$result_concert['F_name'];
                                    echo "<a href='$first_photo_path_concert' data-gallery='#concert'>Conciertos</a>"
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $result_landscape=mysqli_fetch_assoc($getfotos_landscape);
                                    $first_photo_path_landscape=$dir.$result_landscape['Category'].'/'.$result_landscape['Subcategory'].'/'.$result_landscape['F_name'];
                                    echo "<a href='$first_photo_path_landscape' data-gallery='#landscape'>Paisajes</a>"
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $result_advertise=mysqli_fetch_assoc($getfotos_advertise);
                                    $first_photo_path_advertise=$dir.$result_advertise['Category'].'/'.$result_advertise['Subcategory'].'/'.$result_advertise['F_name'];
                                    echo "<a href='$first_photo_path_advertise' data-gallery='#advertise'>Encargos Profesionales</a>"
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  onmouseover="show_dropdown('dropdown_film')" onmouseout="hide_dropdown('dropdown_film')" href="#filmografia">Filmografia <span class="caret"></span> </a>
                            <ul class="dropdown-menu" id="dropdown_film" onmouseover="show_dropdown('dropdown_film')" onmouseout="hide_dropdown('dropdown_film')" >
                                <li>
                                    <?php
                                    $result_ellatrabaja=mysqli_fetch_assoc($getfotos_ellatrabaja);
                                    $first_photo_path_ellatrabaja=$dir.$result_ellatrabaja['Category'].'/'.$result_ellatrabaja['Subcategory'].'/'.$result_ellatrabaja['F_name'];
                                    echo "<a href='$first_photo_path_ellatrabaja' data-gallery='#ellatrabaja'>Ella Trabaja</a>"
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    $result_matahambre=mysqli_fetch_assoc($getfotos_matahambre);
                                    $first_photo_path_matahambre=$dir.$result_matahambre['Category'].'/'.$result_matahambre['Subcategory'].'/'.$result_matahambre['F_name'];
                                    echo "<a href='$first_photo_path_matahambre' data-gallery='#matahambre'>Al sur de Matahambre</a>"
                                    ?>
                                </li>

                                <li>
                                    <?php
                                    $result_cocodrilos=mysqli_fetch_assoc($getfotos_cocodrilos);
                                    $first_photo_path_cocodrilos=$dir.$result_cocodrilos['Category'].'/'.$result_cocodrilos['Subcategory'].'/'.$result_cocodrilos['F_name'];
                                    echo "<a href='$first_photo_path_cocodrilos' data-gallery='#cocodrilos'>Hombres de Cocodrilos</a>"
                                    ?>
                                </li>
                            </ul>

                        </li>

                        <!--<li ><a href="#works">Portafolio</a></li>-->
                        <li ><a onclick="go_tag('index','contact')">Contacto</a></li>
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
        <div class="col-md-6">
            <div class="row wowload fadeInLeft">
                <h2 class="text-center wowload fadeInUp">Gente de Cocodrilos</h2>
            </div>
            <div class="row wowload fadeInLeft">
                <p><strong>(2013) </strong>Serie de retratos de diez habitantes de poblado a punto de desaparecer. Ubicado en lo
                    profundo de la Ciénaga de Zapata, “Cocodrilos” es uno de los sitios en Cuba de naturaleza más hostil a la vida humana.
                    En el año 2002, la zona fue declarada Área Natural Protegida, lo que provocó que fuera prohibida la fabricación de
                    carbón, actividad económica fundamental del pueblo durante siglos. Negados a abandonar su tierra, un grupo pequeño
                    de personas recurre a las formas más elementales de supervivencia. El uso del retrato ambiental no solo muestra los
                    rostros, sino también el vestuario y las herramientas de trabajo de los cenagueros. Gente de Cocodrilos es un
                    homenaje al valor de quienes persisten en no abandonar su tierra.</p>

                <p>La idea de realizar el proyecto Gente de Cocodrilos parte de las vivencias adquiridas durante la filmacion del documental
                    Hombres de Cocodrilos (Dir. Livan Magdaleno, 2013) El objetivo es mostrar como evidencia gráfica las difíciles
                    condiciones de vida de esa comunidad de la Ciénaga de Zapata. La propuesta consiste en una serie de ratratos de
                    personajes tipos que, si bien reflejan la particularidad del entorno, trascienden esa condición para convertirse en
                    representaciones de lo humano. A pesar del sustrato documental, las piezas contienen una alta dosis conceptual y
                    simbólica verificable en sus diferentes niveles de lectura. (Catálogo de “Zona Franca”, exhibiciones colaterales a la XII
                    Bienal de La Habana)</p>
            </div>

            <div class="row wowload fadeInLeft">
                <div class="col-md-12 text-center ">
                    <a class="btn btn-primary" href="./images/pdf/002%20Gente%20de%20Cocodrilos%20ES%20web.pdf"><i class="fa fa-download"></i> Descargar PDF</a>
                </div>
            </div>

        </div>

        <div class="col-md-6 wowload fadeInLeft">
            <?php
            while($result_gente=mysqli_fetch_assoc($getfotos_gente)){
                $photo_path=$dir.$result_gente["Category"].'/'.$result_gente["Subcategory"].'/'.$result_gente["F_name"];
                echo "<div class='row photo_row'>
                            <img src='$photo_path' class='img-responsive photo' ></div>";
            }
            ?>
        </div>

    </div>
</div>

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


<!-- Footer Starts -->
<div id="footer" class="col-md-12 text-center">
    <div class="row social ">
        <a href="https://www.facebook.com/Kako.Escalona" class="face wowload fadeInUp"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="http://instagram.com/kakoescalona" class="insta wowload fadeInUp"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="http://twitter.com/kakoescalona" class="twitter wowload fadeInUp"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="#" class="linkedin wowload fadeInUp"><i class="fa fa-linkedin fa-2x"></i></a>
        <a href="#" class="flickr wowload fadeInUp"><i class="fa fa-flickr fa-2x"></i></a>
        <a href="#" class="wordpress wowload fadeInUp"><i class="fa fa-wordpress fa-2x"></i></a>
    </div>
    <div class="row">
        <p>&copy; 2016 Kako Escalona. Todos los derechos reservados.</p>
    </div>
</div>

<!-- # Footer Ends -->

<!-- # Flechita hacia arriba -->
<!--<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>-->

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