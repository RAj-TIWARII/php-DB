<?php
$localhost = 'localhost';
$root = 'root';
$password = '';           
$db = 'loginform';                         
$con = mysqli_connect($localhost, $root, $password, $db); 
/*/mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');/ */

if ($con)
{
	//echo "ok";       
	}
if(isset($_POST['submit']))     
{    
    $username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

    
	
	
  	$loginsert = mysqli_query($con, "INSERT INTO login(user,email,phone,message)  VALUES ('$username','$email','$phone','$message')");
	  if($loginsert)
	  {
		  echo "<b> form submitted!! </b>";           
		  //header("location:index.php");
	  }
	  else
	  { 
		 echo "form not submitted"/*. mysqli_error($con)*/;  
		  }    
} 
?> 

<html>
<head>
 <title>PHP Form</title>
</head>


<body>
<h1>LOGIN FORM</h1>
 <form action="" method="POST">
   <input type="text" name="username" placeholder="username" > <br>
   <input type="text" name="email" placeholder="Gmail"> <br> 
   <input type="text" name="phone" placeholder="Phone no."> <br>
   <input type="message" name="message" placeholder="Message"> <br>
   <input type="Submit" name="submit"> 

















Hostname:
localhost
Database:
voltvoya_indexlogin
Username:
voltvoya_indexlogin
Password:
eW8wwQqvGNXacRAa2XFQ
   
 </form>
</body>
</html>
