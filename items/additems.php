<?php 
include "../connect.php";
$items_name = filterRequest("items_name");
$items_name_ar = filterRequest("items_name_ar");
$items_descrbtion = filterRequest("items_descrbtion");
$items_descrbtion_ar = filterRequest("items_descrbtion_ar");
$items_count = filterRequest("items_count");
$items_price = filterRequest("items_price");
$items_reletion = filterRequest("items_reletion");
$items_image = imageUpload("items_image",'itemimage');

if ($items_image != 'fail') {
    $data = array(
        "items_name" => $items_name,
        "items_name_ar" =>  $items_name_ar,
        "items_descrbtion" => $items_descrbtion,
        "items_descrbtion_ar" =>  $items_descrbtion_ar,
        "items_count" => $items_count,
        "items_price" =>  $items_price,
        "items_reletion" =>  $items_reletion,
        "items_image" => $items_image,
    );
    insertData("items", $data);
}
