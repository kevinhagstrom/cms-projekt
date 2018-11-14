<?php
include('inc/db_connect.php');

if(isset($_GET) && !empty($_GET)){
  $sql = "DELETE FROM product WHERE id=:id";
  $res = $conn->prepare($sql)->execute(array(':id' => $_GET['id']));

  header('Location: index.php');
}
?>
