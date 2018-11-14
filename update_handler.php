<?php
include('inc/db_connect.php');

if(isset($_POST) && !empty($_POST)){

  $prod_update = "UPDATE product SET prodname=:newname, price=:newprice WHERE id=:id";
  $prod_res = $conn->prepare($prod_update);
  $prod_res->execute(array(':newname' => $_POST['newname'], ':newprice' => $_POST['newprice'], ':id' => $_GET['update']));

  $sql = "SELECT * FROM category";
  $res = $conn->query($sql);
  $i = 0;
  while($row = $res->fetch(PDO::FETCH_ASSOC)){
    if($_POST['newcategory'] === $row['name']){
      $i = 1;
    }
  }

  if($i === 1){
    $newcatid_select = "SELECT id FROM category WHERE name=:newcategory";
    $newcatid_res =$conn->prepare($newcatid_select);
    $newcatid_res->execute(array(':newcategory' => $_POST['newcategory']));
    $newcatid_fetch = $newcatid_res->fetch();
    $id_newcat = $newcatid_fetch['id'];
  } else{
    $output = 'Please enter a valid category';
    header('Location: update.php?i=' . $i . '&error=' . $output.'&id=' .  $_POST['id']);
  }

  $cat_update = "UPDATE prodcategory SET categoryid=:newcategoryid WHERE productid=:id";
  $cat_res = $conn->prepare($cat_update);
  $cat_res->execute(array(':newcategoryid' => $id_newcat, ':id' => $_GET['update']));

  header('Location: index.php');
} else{
  $output = 'Something went wrong';
  header('Location: update.php?error=' . $output);
}
?>
