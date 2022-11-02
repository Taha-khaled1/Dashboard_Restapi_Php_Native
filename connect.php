<?php
$dsn = "mysql:host=localhost;dbname=ecommerce";
$user = "root";
$pass = "";
$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);
$countrowinpage = 9;
try {
   $con = new PDO($dsn, $user, $pass, $option);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
   include "functions.php";
   // if (!isset($notAuth)) {
   //    checkAuthenticate();
   // }
} catch (PDOException $e) {
   echo $e->getMessage();
}
//-------------------------------------------------------------
// <?php
// $dsn = "mysql:host=sql206.epizy.com;dbname=epiz_32589387_ecommerce" ;                   //متغير هنحط فيه مسار قاعدة البينات اللي انشاتها في sql 
// $user = "epiz_32589387" ;                                                    /// متغير بيحمل صلاحيات المستخدم هل هو ادمن ام شخص عادي
// $pass = "iMhl5By0AqkUm" ; 
// $option = array(
//    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
// );
// $countrowinpage = 9;
// try {
//    $con = new PDO($dsn, $user, $pass, $option);
//  //  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  //  header("Access-Control-Allow-Origin: *");
//   // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
//   // header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
//    include "functions.php";
//    // if (!isset($notAuth)) {
//    //    checkAuthenticate();
//    // }
// } catch (PDOException $e) {
//    echo $e->getMessage();
// }
