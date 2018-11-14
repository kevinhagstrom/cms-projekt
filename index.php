<?php
session_start();
include('inc/db_connect.php');

if(isset($_GET) && !empty($_GET)){
  if($_GET['action'] == 'logout'){
    unset($_SESSION['user']);
    header('Location: index.php');
  }
}

include('head.php');
?>
  <body>
    <div class="container">
      <?php
      include('header.php');
      ?>
    </div>
    <main role="main" class="container">
      <h3>Products</h3>
      <a class="btn btn-secondary" href="index.php?action=all">All</a>
      <a class="btn btn-secondary" href="index.php?action=fruit">Fruit</a>
      <a class="btn btn-secondary" href="index.php?action=vegetables">Vegetables</a>
      <a class="btn btn-secondary" href="index.php?action=berries">Berries</a>
      <?php
      if(isset($_SESSION['user'])){
        echo '<a class="btn btn-secondary" href="add.php">Add</a>';
      }
      ?>
      <div class="row">
        <div class="col">
          <?php
          $all_select = "SELECT * FROM product INNER JOIN prodcategory ON product.id=productid INNER JOIN category ON categoryid=category.id";
          $all_stmt = $conn->query($all_select);

          $fruit_select = "SELECT * FROM product INNER JOIN prodcategory ON product.id=productid INNER JOIN category ON categoryid=category.id WHERE name='fruit'";
          $fruit_stmt = $conn->query($fruit_select);

          $vege_select = "SELECT * FROM product INNER JOIN prodcategory ON product.id=productid INNER JOIN category ON categoryid=category.id WHERE name='vegetable'";
          $vege_stmt = $conn->query($vege_select);

          $berry_select = "SELECT * FROM product INNER JOIN prodcategory ON product.id=productid INNER JOIN category ON categoryid=category.id WHERE name='berry'";
          $berry_stmt = $conn->query($berry_select);

          $output = '';
          if(isset($_GET) && !empty($_GET)){
            if($_GET['action'] == 'all'){
              while($row = $all_stmt->fetch(PDO::FETCH_ASSOC)){
                if($row['name'] == 'berry'){
                  $output .= '<div id="products">
                  <p>Product: '.$row['prodname'].'</p>
                  <p>Price: '.$row['price'].'€/kg</p>';
                  if(isset($_SESSION['user'])){
                    $output .= '<a href="delete.php?id=' . $row['productid'] . '">Delete</a>
                    <a href="update.php?id=' . $row['productid'] . '">Update</a>
                    </div>';
                  } else{
                    $output .= '</div>';
                  }
                } else{
                  $output .= '<div id="products">
                  <p>Product: '.$row['prodname'].'</p>
                  <p>Price: '.$row['price'].'€</p>';
                  if(isset($_SESSION['user'])){
                    $output .= '<a href="delete.php?id=' . $row['productid'] . '">Delete</a>
                    <a href="update.php?id=' . $row['productid'] . '">Update</a>
                    </div>';
                  } else{
                    $output .= '</div>';
                  }
                }
              }
            }
            if($_GET['action'] == 'fruit'){
              while($row = $fruit_stmt->fetch(PDO::FETCH_ASSOC)){
                $output .= '<div id="products">
                <p>Product: '.$row['prodname'].'</p>
                <p>Price: '.$row['price'].'€</p>';
                if(isset($_SESSION['user'])){
                  $output .= '<a href="delete.php?id=' . $row['productid'] . '">Delete</a>
                  <a href="update.php?id=' . $row['productid'] . '">Update</a>
                  </div>';
                } else{
                  $output .= '</div>';
                }
              }
            }
            if($_GET['action'] == 'vegetables'){
              while($row = $vege_stmt->fetch(PDO::FETCH_ASSOC)){
                $output .= '<div id="products">
                <p>Product: '.$row['prodname'].'</p>
                <p>Price: '.$row['price'].'€</p>';
                if(isset($_SESSION['user'])){
                  $output .= '<a href="delete.php?id=' . $row['productid'] . '">Delete</a>
                  <a href="update.php?id=' . $row['productid'] . '">Update</a>
                  </div>';
                } else{
                  $output .= '</div>';
                }
              }
            }
            if($_GET['action'] == 'berries'){
              while($row = $berry_stmt->fetch(PDO::FETCH_ASSOC)){
                $output .= '<div id="products">
                <p>Product: '.$row['prodname'].'</p>
                <p>Price: '.$row['price'].'€/kg</p>';
                if(isset($_SESSION['user'])){
                  $output .= '<a href="delete.php?id=' . $row['productid'] . '">Delete</a>
                  <a href="update.php?id=' . $row['productid'] . '">Update</a>
                  </div>';
                } else{
                  $output .= '</div>';
                }
              }
            }
            if(!empty($output)){
              echo $output;
            } else{
              echo '<div id="products">No products</div>';
            }
          } else{
            while($row = $all_stmt->fetch(PDO::FETCH_ASSOC)){
              if($row['name'] == 'berry'){
                $output .= '<div id="products">
                <p>Product: '.$row['prodname'].'</p>
                <p>Price: '.$row['price'].'€/kg</p>';
                if(isset($_SESSION['user'])){
                  $output .= '<a href="delete.php?id=' . $row['productid'] . '">Delete</a>
                  <a href="update.php?id=' . $row['productid'] . '">Update</a>
                  </div>';
                } else{
                  $output .= '</div>';
                }
              } else{
                $output .= '<div id="products">
                <p>Product: '.$row['prodname'].'</p>
                <p>Price: '.$row['price'].'€</p>';
                if(isset($_SESSION['user'])){
                  $output .= '<a href="delete.php?id=' . $row['productid'] . '">Delete</a>
                  <a href="update.php?id=' . $row['productid'] . '">Update</a>
                  </div>';
                } else{
                  $output .= '</div>';
                }
              }
            }
            if(!empty($output)){
              echo $output;
            } else{
              echo '<div id="products">No products</div>';
            }
          }
          ?>
        </div>
      </div>
    </main>

    <?php
    include('footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
