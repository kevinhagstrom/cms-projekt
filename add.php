<?php

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/signin.css" rel="stylesheet">
    <title>Add product</title>
  </head>

  <body class="text-center">
    <form class="form-signin" action="add_handler.php" method="post">
      <?php if(!empty($_GET['error'])){ echo '<h3 class="alert alert-warning">' . $_GET['error'] . '<h3>'; } ?>
      <h1 class="h3 mb-3 font-weight-normal">Add product</h1>

      <label for="prodname" class="sr-only">Product name</label>
      <input type="text" name="prodname" id="prodname" class="form-control" placeholder="Product name" required autofocus>

      <label for="price" class="sr-only">Price</label>
      <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Price" required>

      <label for="category" class="sr-only">Category</label>
      <input list="category" name="category" class="form-control" placeholder="Category" required>
      <datalist id="category">
        <option value="Fruit"></option>
        <option value="Vegetable"></option>
        <option value="Berry"></option>
      </datalist>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
