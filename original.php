<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
</head>
<body background="108.jpg">
<img src="logo.png" align="left" width="75" height="35" />
		  <img src="name.jpg" align="left" width="70" height="30" />
		  
<div id="login">
 <form action="" method="post">
<p align="right" >  <font size="3" face="New Times Roman" Color="white">email/username:
<input  type="text" name="username" size="18" placeholder="email@example.com" />
Password:
<input type="password" name="password" size="10" placeholder="Password" />
<input name="signin" type="submit" value=" signin ">
</form>
<div  style='margin-left:800px' style="color:red;">				
</div>

<br><br>
<pre>
<div  class="container" >
	<font size="4.5" face="Viner Hand ITC" Color="white">																								<font size="10" face="Bradley Hand ITC" color="aqua"><b>Create New Account</b></font><br /><form method="POST" action="">
																									<label style="color:white">Email:</label>		<input type="email" placeholder="Enter Email" name="s_email"  required autofocus/>
																									<label style="color:white">Username:</label>	<input type="text" placeholder="Enter Username" name="u_name"  required />
																									<label style="color:white">Mobile:</label>		<input type="number" placeholder="Enter Phone no" name="pno"  required />
																									<label style="color:white">Password:</label>	<input type="password" placeholder="Enter Password" name="pwd" required minlength="8"/>
							
							
							
							
							
							
							
																									<input type="submit" name ="submit" value="Signup"/></form></div></pre>

																									<footer>
	<center>For any queries contact: bigasiasubhanshu@gmail.com</center>
</footer>

</body>
</html>
<?php
$name ="";
$email="";
$pno="";
$password="";

$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('company',$con)or die(mysql_error());
if(isset($_POST['submit']))
{
$name =$_POST['u_name'];
$email=$_POST['s_email'];
$pno=$_POST['pno'];
$password=$_POST['pwd'];
$query="insert into login(email,username,mobile,password) value('$email','$name',$pno,'$password')";
if(mysql_query($query))
{
echo"<script>alert('you are successfully Registered')</script>";

}
}
if (isset($_POST['signin'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$password' AND username='$username'", $con);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: top2.html"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($con); // Closing Connection
}
}
?>
