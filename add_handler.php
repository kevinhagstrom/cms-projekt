<?php
include('inc/db_connect.php');

if(isset($_POST) && !empty($_POST)){
  $prod_insert = "INSERT INTO product (prodname, price) VALUES (:prodname, :price)";
  
}
?>
