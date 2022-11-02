<?php 
include "../connect.php" ; 
//$alldata['status'] = "success" ; 
$id = filterRequest("id");
$categories = getAllData("items" , "items_reletion = $id ")  ;
 





