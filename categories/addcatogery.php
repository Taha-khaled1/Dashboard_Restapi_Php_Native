<?php 
include "../connect.php" ; 
$categories_name = filterRequest("categories_name");
$categories_name_ar = filterRequest("categories_name_ar");
$categories_image = imageUpload("categories_image",'catogeryimages');

if ($categories_image != 'fail' ) {
    $data = array(
        "categories_name" => $categories_name,
        "categories_name_ar" =>  $categories_name_ar,
        "categories_image" => $categories_image,
     
    );
    insertData("categories" , $data) ; 

}


