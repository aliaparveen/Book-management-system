<html>
	<head>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <style>
  .navigation {
   /* fixed keyword is fine too */
   position: sticky;
   top: 0;
   z-index: 100;
   /* z-index works pretty much like a layer:
   the higher the z-index value, the greater
   it will allow the navigation tag to stay on top
   of other tags */
   
}
h3{
	   color:#30b0fa;
   }
    </style>

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
	<input type="text" name="query" placeholder="search" size="50" />
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
</nav></html>



<br>

<?php
$rl=$_REQUEST['id'];
$conn=mysqli_connect("localhost","root","");
$dbb=mysqli_select_db($conn,"cart_system");
$que=mysqli_query($conn,"select * from product where id='$rl'");
echo "<form action='updut.php' method='post' align='center' > ";
//echo "<label><h3>**** Edit Book****</h3></label>";
echo "<hr><fieldset>";
 
while($res=mysqli_fetch_assoc($que))
{
  Print "<h3>***Book Name***</h3>"."<h3>".$res['product_name']."</h3>"."<br>";
 
 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    echo 'book Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'<input type="text" name="r" value='.$res['id'].' disabled><br/><br>';
    echo 'product name:&nbsp;&nbsp;&nbsp;&nbsp;'.'<input type="text" name="na" value='.$res['product_name'].' disabled><br/><br>';
    echo 'product price:&nbsp;&nbsp;&nbsp;&nbsp;'.'<input type="text" name="dep" value='.$res['product_price'].'><br/><br/>';
    echo 'product quantity:&nbsp;&nbsp;&nbsp;&nbsp;'.'<input type="text" name="add" value='.$res['product_qty'].'><br/><br/>';
	echo 'product image:&nbsp;&nbsp;&nbsp;&nbsp;'.'<input type="text" name="ima" value='.$res['product_image'].' disabled><br/><br/>';
	echo 'product code:&nbsp;&nbsp;&nbsp;&nbsp;'.'<input type="text" name="code" value='.$res['product_code'].' disabled><br/><br/>';
    }

echo '<input type="submit" value="update" class="btn btn-primary my-2 my-sm-0" name="update">';
echo '<input type="reset" value="cancel" class="btn btn-default">';
echo "</fieldset></form>";
?>
