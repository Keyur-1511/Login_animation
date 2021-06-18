<?php

// Database Conenction
$servername = "localhost";
$username = "root";
$password = "";
$database = "summer1";

$conn = mysqli_connect($servername, $username, $password, $database,3325);

if(!$conn){
    die("CAN NOT CONNECT ERROR : " . mysqli_connect_error()) ;
}
    // echo "Connected";


if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	// $result = $obj->query("select * from register where email='$email' and password='$password'");

    $sql = " select * from register where email='$email' and password='$password' ";

    $result = mysqli_query($conn, $sql) or die(mysql_error());
	$rowcount = $result->num_rows;


	if($rowcount==1)
	{
        $row = $result->fetch_object();
		$id = $row->id;   /// $row["id"]
		header("location:home1.php?userid=$id");
	}
	else
	{
		echo "<script>alert('Invalid Email or Password')</script>";
	}


}


?>

<html>
<head>
	<title>User Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
	<h1 align="center" style="margin-top: 100px;">User Login</h1>
	<form method="post">
		<table  align="center" cellpadding="10" cellspacing="0">
			
			<tr>
				<td>Email</td>
				<td>
                    <input type="text" id="email" name="email">
                </td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
                    <input type="text" id="password" name="password">
                </td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" id="submit" name="submit" value="Login">
				</td>
			</tr>
            <tr>
                <td>
                    <a href="register.php">New Registration ?</a>
                </td>
            </tr>
		</table>
	</form>

</body>
</html>



