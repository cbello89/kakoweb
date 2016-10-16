<?php
/**
 * Created by PhpStorm.
 * User: claudia
 * Date: 5/27/2016
 * Time: 11:32 AM
 */

$kako = mysqli_connect("localhost", "kakoesca_claudia", "ICKKCk123!", "kakoesca_photos");
// Check connection
if (!$kako) {
    die("Connection failed: " . mysqli_connect_error());
}