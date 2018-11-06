<?php
session_start();
include('inc/db_connect.php');

if(isset($_POST) && !empty($_POST)){
  $sql = "SELECT * FROM login WHERE username=:username AND password=:password LIMIT 1";
  $row = array(
    ':username' => $_POST['username'],
    ':password' => $_POST['password']
  );
  $res = $conn->prepare($sql);
  $res->execute($row);
  if($res->fetchColumn() < 1){
    $output = 'Couldn\'t find user';
    header('Location: login.php');
  } else{
    $_SESSION['user'] = 1;
    header('Location: index.php');
  }
}
?>
