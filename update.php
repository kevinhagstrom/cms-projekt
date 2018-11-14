<?php

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/signin.css" rel="stylesheet">
    <title>Update product</title>
  </head>

  <body class="text-center">
    <form class="form-signin" action="update_handler.php?update=<?php echo $_GET['id']; ?>" method="post">
      <?php if(!empty($_GET['error'])){ echo '<h3 class="alert alert-warning">' . $_GET['error'] . '<h3>'; } ?>
      <h1 class="h3 mb-3 font-weight-normal">Update product</h1>

      <label for="newname" class="sr-only">New name</label>
      <input type="text" name="newname" id="newname" class="form-control" placeholder="New name" required autofocus>

      <label for="newprice" class="sr-only">New price</label>
      <input type="number" step="0.01" name="newprice" id="newprice" class="form-control" placeholder="New price" required>

      <label for="newcategory" class="sr-only">Category</label>
      <input list="category" name="newcategory" class="form-control" placeholder="New category" required>
      <datalist id="category">
        <option value="Fruit"></option>
        <option value="Vegetable"></option>
        <option value="Berry"></option>
      </datalist>
      <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
