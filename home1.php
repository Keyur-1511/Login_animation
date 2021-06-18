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


$id = $_GET["userid"];

// $result = $obj->query("select * from register where id='$id'");

$sql = " select * from register where id='$id'";

$result = mysqli_query($conn, $sql) or die(mysql_error());
	

$row = $result->fetch_object();

?>



    <!DOCTYPE html>
    <html>

    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style1.css">
        
    </head>

    <body>
        <div class="header">
            <h1>LOGIN APPLICATION</h1>
        </div>

        <div class="content">
            <div class="content-left">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </div>

            <div class="container2">
                <div class="folks">
                    <p>Hi
                        <b>
                            <?php echo $row->fullname;?> 
                        </b>, Welcome to Animation Club :)
                        <span class="blink-cursor">|</span>
                    </p>
                </div>
            </div>

            <div class="content-right">
                <p>User ID :
                    <?php echo $row->id;?>
                </p>
                <p>Full Name :
                    <?php echo $row->fullname;?>
                </p>
                <p>Email :
                    <?php echo $row->email;?>
                </p>
                <p>Contact :
                    <?php echo $row->contact;?>
                </p>
                <p>Address :
                    <?php echo $row->address;?>
                </p>
            </div>
        </div>

        <div class="footer">
            <h3>All Rights Reserved By Keyur Animation Club</h3>
        </div>
    </body>

    </html>