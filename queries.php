<?php
/**
 * Created by PhpStorm.
 * User: claudia
 * Date: 10/16/2016
 * Time: 11:54 AM
 */

/*the queries*/

/*ADEMAS*/
/*TPP*/
$query_tpp="SELECT * FROM fotos WHERE Subcategory='tpp'";
$getfotos_tpp = mysqli_query($kako, $query_tpp);



/*CONCIENTOS*/
$query_concert="SELECT * FROM fotos WHERE Subcategory='concert'";
$getfotos_concert = mysqli_query($kako, $query_concert);


/*PAISAJES*/
$query_landscape="SELECT * FROM fotos WHERE Subcategory='landscape'";
$getfotos_landscape = mysqli_query($kako, $query_landscape);


/*publicidad*/
$query_advertise ="SELECT * FROM fotos WHERE Subcategory='advertise'";
$getfotos_advertise = mysqli_query($kako, $query_advertise);


/*FILMOGRAFIA*/
/*ELLA TRABAJA*/
$query_ellatrabaja="SELECT * FROM fotos WHERE Subcategory='ellatrabaja'";
$getfotos_ellatrabaja = mysqli_query($kako, $query_ellatrabaja);


/*MATAHAMBRE*/
$query_matahambre="SELECT * FROM fotos WHERE Subcategory='matahambre'";
$getfotos_matahambre = mysqli_query($kako, $query_matahambre);


/*COCODRILO*/
$query_cocodrilos="SELECT * FROM fotos WHERE Subcategory='cocodrilos'";
$getfotos_cocodrilos = mysqli_query($kako, $query_cocodrilos);