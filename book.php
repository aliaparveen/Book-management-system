  <?php 
  
 
  $book_isbn = $_GET['id'];
  // connecto database
  require 'config.php';
 

  $query = "SELECT * FROM product WHERE id= '$book_isbn'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty book";
    exit;
  }

  $title = $row['product_name'];
 
?>


<html>
  <head>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<!-- Navbar start -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="name.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Book Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <form action="search.php" method="GET">
	<input type="text" name="query" placeholder="search" size="50"/>
	<button  type="submit" value="Search"  class="btn btn-primary">search</button>
</form></li>
          <a class="nav-link active" href="name.php"><i class="fas fa-book mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-light"></span></a>
        </li>
      </ul>
    </div>
</nav>
      <!-- Example row of columns --></br>
      <h4> <p class="lead" style="margin: 25px 0"><a href="name.php">Books</a> > <?php echo $row['product_name']; ?></p></h4>
      <div class="row">
        <div class="col-md-3 text-center">
        <img src="<?= $row['product_image'] ?>" class="card-img-top" height="350" ></a>
        </div>
        <div class="col-md-6">
  
          <h4>Book Details</h4>
          <table class="table">
          	<?php foreach($row as $key => $value){
              if( $key == "product_name"||$key == "product_image"  || $key == "product_name"){
                continue;
              }
              switch($key){
                case "book_isbn":
                  $key = "ISBN";
                  break;
                case "product_title":
                  $key = "Title";
                  break;
                
                case "product_price":
                  $key = "Price";
                  break;
                  case "product_name":
                    $key = "name";
                    break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
          <form method="post" action="addtocart.php" class="form-submit">
          <input type="hidden" name="bookisbn" value="<?php echo $book_isbn;?>">
           
   <!--<button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>-->

              
          </form>


  
             
    