<?php
include 'config.php';
$conn = new mysqli("localhost","root","","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    
    $chk=mysqli_query($conn,"select username from reg where username='$u'");
$resultt=mysqli_fetch_array($chk);
if($resultt){
echo '<script>alert("user already exists")</script>' ;}
else{
    $i="insert into reg(name,username,password,city,gender)value('$t','$u','$p','$c','$g')";
    $q=mysqli_query($conn, $i);
    if($q){
        echo '<script>alert("USER REGISTERED SUCCESSFULLY")</script>';
    }
}}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet"  href="stylelogin.css">
        <script src="fun.js"></script>



    </head>
    <body style="background: linear-gradient(-70deg, #30b0fa 0%, rgba(0, 0, 0, 0) 0%), url('s.jpg')">


    

        <form method="POST" enctype="multipart/form-data" >

<div class="flat-form">
            <ul class="tabs">
                <li>
                    <a href="userlogin.php" class="active">Login</a>
                </li>
                
                
            </ul>
            <table>
                <tr>
                    <td>
                        Enter Name
                        <input type="text" name="text" placeholder="student Name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                      Enter Username
                        <input type="text" name="user" placeholder="student UserName" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" name="pass" placeholder="password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="city">Choose your city:</label>

<select name="city" id="city">
  <option value="sialkot">sialkot</option>
  <option value="gujranwala">gujranwala</option>
  <option value="multan">multan</option>
  <option value="sakhar">sakhar</option>
</select>
                    </td>
                </tr>
                <tr>
                    <td></br>
                        Gender
                        <input type="radio"name="gen" id="gen" value="male" required>male
                        <input type="radio" name="gen" id="gen" value="female">female
                    </td>
                </tr>
               
                <tr>
                    <td>
                    </br>
                        <input type="submit" value="SIGNUP" name="sub" class="button" >
                               
                    </td>
                </tr>
            </table>
    </body>
</html>
