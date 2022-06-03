<?php
	session_start();
	
	$conn = new mysqli("localhost","root","","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
		
	}

	$title = "List book";

?><html>
	<head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>
<body>
	<!-- Navbar start -->
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="name.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Book Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
	  <li class="nav-item">
        <form action="search.php" method="GET" class="form-inline">
  <input class="form-control mr-sm-2" size="40" type="search" name="query" placeholder="Search" aria-label="Search">
  <button class="btn btn-primary my-2 my-sm-0" type="submit" >Search</button>
</form></li>

  <!--<li><a class="nav-link" href="search.php"><input type="search" name="search" value="search by code.." size="50"/></a></li></br></br>-->
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
</br></br>

<p class="lead"><a href="dashboard.php">dashboard</a></p>
	<p class="lead"><a href="admin_add.php">Add new book</a></p>
	
	<p class="lead"><a href="orders.php">orders</a></p>
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
	<!--<table class="table" style="margin-top: 20px" border="1" cell spacing="2">
		<tr class="table-primary">
			
			<th>Title</th>
			<th>Price</th>
			<th>Image</th>
			
			<th>product quantity</th>
			<th>product code</th>
			<th>ISBN</th>
			<th>Id</th>
			
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>-->
		<?php  
		/*$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
		while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['product_price']; ?></td>
			
			<td><img src="<?= $row['product_image'] ?>" class="card-img-top" height="70"></td>
			<td><?php echo $row['product_qty']; ?></td>
			<td><?php echo $row['product_code']; ?></td>
			<td><?php echo $row['book_isbn']; ?></td>
			<td><?php echo  $row['id']; ?></td>
			<td><a href="admin_edit.php?bookisbn=<?php echo $row['book_isbn']; ?>">Edit</a></td>
			<td><a href="admin_delete.php?bookisbn=<?php echo $row['book_isbn']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}

?>
<style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>*/
