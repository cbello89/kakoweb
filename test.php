<?php
/**
 * Created by PhpStorm.
 * User: claudia
 * Date: 9/15/2016
 * Time: 2:00 PM
 */

var_dump(include_once("connetion.php"));
$dir = "./images/portfolio/";


/*the queries*/
/*proyectos*/

//$query_common="SELECT * FROM fotos WHERE Subcategory='common'";
//$query_gente="SELECT * FROM fotos WHERE Subcategory='gente'";
//$query_hermosa="SELECT * FROM fotos WHERE Subcategory='hermosa'";
//$query_pio ="SELECT * FROM fotos WHERE Subcategory='landscape'";
//var_dump($query_pio);

//$getfotos_common = mysqli_query($connection, $query_common);
//$getfotos_gente = mysqli_query($connection, $query_gente);
//$getfotos_hermosa = mysqli_query($connection, $query_hermosa);
//$getfotos_pio = mysqli_query($kako, $query_pio);
//var_dump($getfotos_pio);

//$result=mysqli_fetch_all($getfotos_pio);
//var_dump($result);
//$size=sizeof($result);
//$portada_path=$dir.$result[0][2].'/'.$result[0][3].'/'.$result[0][1];
//echo" <img src='$portada_path'>";

//for($i=1;$i<$size;$i++){
//    $photo_path=$dir.$result[$i][2].'/'.$result[$i][3].'/'.$result[$i][1];
//    echo" <img src='$photo_path'>";
//}

//*lo que habria que hacer un fetch_all por cada query que yo tenga que no son pocos...y no estoy segura cuando optimo sea eso*/

//var_dump(sizeof($result));
//var_dump($result);

//$result=mysqli_fetch_assoc($getfotos_pio);
//var_dump($result);
//$photo_path=$dir.$result["Category"].'/'.$result["Subcategory"].'/'.$result["F_name"];
//var_dump($photo_path);
//echo" <img src='$photo_path'>";

//while($result=mysqli_fetch_assoc($getfotos_pio)){
//    $photo_path=$dir.$result["Category"].'/'.$result["Subcategory"].'/'.$result["F_name"];
//    echo" <img src='$photo_path'>";
//}

//var_dump(sizeof($result));
//var_dump($result);

$query_tpp="SELECT * FROM fotos WHERE Subcategory='tpp'";
$getfotos_tpp = mysqli_query($kako, $query_tpp);

$result_tpp=mysqli_fetch_all($getfotos_tpp);
var_dump($result_tpp);
$size_tpp=sizeof($result_tpp);

for($i=0;$i<$size_tpp;$i++){
    $photo_path=$dir.$result_tpp[$i][2].'/'.$result_tpp[$i][3].'/'.$result_tpp[$i][1];
    echo" <img src='$photo_path'>";
}