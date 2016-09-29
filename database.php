<?php
/**
 * Created by JetBrains PhpStorm.
 * User: claudia
 * Date: 2/6/16
 * Time: 10:26 p.m.
 */

//database connection
// Create connection
//$servername = "localhost";
//$username = "cbello";
//$password = "root";
//$dbname = "kako";


/*$kako = mysqli_connect("localhost", "cbello", "root", "kako");
// Check connection
if (!$kako) {
    die("Connection failed: " . mysqli_connect_error());
}*/

include_once("connetion.php");

$dir = "./images/portfolio/";
$dir_array=scandir($dir);
$size=count($dir_array);
//echo $size;

for ($x = 2; $x <=$size-1; $x++) {
    $category=$dir_array[$x];
    $query2 = "INSERT INTO category(C_ID,Cat_name) VALUES (NULL,'$category')";

    if (mysqli_query($kako, $query2)) {
        echo "New record created successfully";
        echo "";

    } else {
        echo "Error: " . $query2 . "<br>" . mysqli_error($kako);
    }

    echo $category;
    $newdir=$dir.$dir_array[$x];
    print_r ($newdir);
    $newdir_array=scandir($newdir);
    $size1=count($newdir_array);

    for ($y = 2; $y <=$size1-1; $y++) {
        $subcategory=$newdir_array[$y];
        $query3 = "INSERT INTO subcategory (Sub_ID,Sub_name) VALUES (NULL,'$subcategory' )";

        if (mysqli_query($kako, $query3)) {
            echo "New record created successfully";
            echo " ";
        } else {
            echo "Error: " . $query3 . "<br>" . mysqli_error($kako);
        }

        echo $subcategory;
        $newpath=$newdir.'/'.$newdir_array[$y];
        $newpath_array=scandir($newpath);
        $size2=count($newpath_array);

        for ($z = 2; $z <=$size2-1; $z++){
            $temp_name=explode( ".", $newpath_array[$z]);

            //si tiene extension y la extension no es .db
            if(($temp_name[1]!= null)&&($temp_name[1]!="db")){
                $query1 = "INSERT INTO fotos (ID,F_name,Category,Subcategory) VALUES (NULL,'$newpath_array[$z]','$category', '$subcategory' )";
                if (mysqli_query($kako, $query1)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $query1 . "<br>" . mysqli_error($kako);
                }

            //si es una carpeta
            } elseif($temp_name[1]== null) {
                $path=$newpath.'/'. $newpath_array[$z];
                $final_array=scandir($path);
                $size3=count($final_array);

                for ($i=2; $i<=$size3-1; $i++){
                    $temp=explode( ".", $final_array[$i]);

                    if($temp[1]=="db"){
                        break;
                        }
                    else {

                        $query1 = "INSERT INTO fotos (ID,F_name,Category,Subcategory) VALUES (NULL,'$final_array[$i]','$category', '$subcategory' )";

                        if (mysqli_query($kako, $query1)) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $query1 . "<br>" . mysqli_error($kako);
                        }
                    }
                }
            }
            else {
                break;
            }






        }
    }

}
?>