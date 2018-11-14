<?php
include('inc/db_connect.php');

if(isset($_POST) && !empty($_POST)){
  $prod_sql = "SELECT * FROM product";
  $prod_res = $conn->query($prod_sql);
  $n = 0;
  while($row = $prod_res->fetch(PDO::FETCH_ASSOC)){
    if($_POST['prodname'] === $row['prodname']){
      $n = 1;
    }
  }

  if($n != 1){
    $prod_insert = "INSERT INTO product (prodname, price) VALUES (:prodname, :price)";
    $row = array(
      ':prodname' => $_POST['prodname'],
      ':price' => $_POST['price']
    );
    $prod_insert_res = $conn->prepare($prod_insert)->execute($row);
  } else{
    $output = 'Product already exists';
    header('Location: add.php?error=' . $output);
    exit;
  }

  $prod_select = "SELECT id FROM product WHERE prodname=:prodname";
  $prod_select_res = $conn->prepare($prod_select);
  $prod_select_res->execute(array(':prodname' => $_POST['prodname']));
  $prod_select_fetch = $prod_select_res->fetch();
  $prodid = $prod_select_fetch['id'];

  $sql = "SELECT * FROM category";
  $res = $conn->query($sql);
  $i = 0;
  while($row = $res->fetch(PDO::FETCH_ASSOC)){
    if($_POST['category'] === $row['name']){
      $i = 1;
    }
  }

  if($i === 1){
    $cat_select = "SELECT id FROM category WHERE name=:category";
    $cat_select_res = $conn->prepare($cat_select);
    $cat_select_res->execute(array(':category' => $_POST['category']));
    $cat_select_fetch = $cat_select_res->fetch();
    $catid = $cat_select_fetch['id'];
  } else{
    $output = 'Please enter a valid category';
    header('Location: add.php?error=' . $output);
  }

  if($n != 1){
    $prodcat_insert = "INSERT INTO prodcategory (categoryid, productid) VALUES (:catid, :prodid)";
    $result = $conn->prepare($prodcat_insert)->execute(array(':catid' => $catid, ':prodid' => $prodid));
  } else{
    $output = 'Product already exists';
    header('Location: add.php?error=' . $output);
    exit;
  }

  header('Location: index.php');
} else{
  $output = 'Something went wrong';
  header('Location: add.php?error=' . $output);
}
?>
