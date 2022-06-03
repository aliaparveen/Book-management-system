<?php

	
	$conn = new mysqli("localhost","root","","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}

	
	$title = "Add new book";
	
	$conn = new mysqli("localhost","root","","cart_system");
	


	
	include 'config.php';
	if(isset($_POST['add'])){
		$t=$_POST['title'];
		$u=$_POST['price'];
		
		$c=$_POST['quantity'];
		$g=$_POST['code'];
		//$a=$_POST['isbn'];
		$k=$_POST['id'];
		if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
		$img="image/".$_FILES['f1']['name'];
		}
		$chk=mysqli_query($conn,"select id from product where id='$k'");
	$resultt=mysqli_fetch_array($chk);
	if($resultt){
	echo '<script>alert("Book already exists")</script>' ;}
	else{
		$i="insert into product(id,product_name,product_price,product_qty,product_image,product_code)value('$k','$t','$u','$c','$img','$g')";
		$q=mysqli_query($conn, $i);
		if($q){
			echo '<script>alert("New record insereted")</script>';
		}
	}}
	?>

<html>
	<head>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="style.css">

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
    </style>
<head/>
<body>
	<div class="navigation">
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
	<button  type="submit" value="Search"  class="btn btn-primary">search</button>
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
</nav></div>
<h3 align="center">***Add New Book***</h3>
<fieldset class="form-group">
	
	<form method="post" action="admin_add.php" enctype="multipart/form-data" class="no">
		<table class="table">

		<tr>
				<th>book id</th>
				<td><input type="text" name="id" required></td>
			</tr> 
		
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<th>product price</th>
				<td><input type="text" name="price" required></td>
			</tr>
			
				<th>product_quantity</th>
				<td><input type="text" name="quantity" /></td>
			</tr>

			<tr>
				<th>Image</th>
				<td><input type="file" name="f1"></td>
			</tr>
			<tr>

			<tr>
				<th>Product_code</th>
				<td><input type="text" name="code" required></td>
			</tr>
			<!--<tr>
				<th>book isbn</th>
				<td><input type="text" name="isbn" required></td>
			</tr>
			<tr>
				<th>book id</th>
				<td><input type="text" name="i" required></td>
			</tr>-->

		</table>
		<input  type="submit" name="add" value="Add new book" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	</body></fieldset>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	
?>