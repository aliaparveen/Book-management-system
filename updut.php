<?php
$conn=mysqli_connect("localhost","root","");
$conn = new mysqli("localhost","root","","cart_system");

if(isset($_POST['update'])){
   $id=$_POST['r'];
    $ro=$_POST['dep'];
    $ad=$_POST['add'];
    $res=mysqli_query($conn,"UPDATE product set product_price='$ro',product_qty='$ad' where id='$id'");
    if($res){
        echo '<script> alert("updated successfully");</script>'; 
    }
}
?>