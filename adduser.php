<html>
<head></head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resdb";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name=$_POST['name'];
$username=$_POST['userid'];
$password=$_POST['psw'];
$email=$_POST['mail'];
$phone=$_POST['phone'];

$sql = "INSERT INTO user(name,username,email,password,phone)
VALUES ('$name','$username','$email','$password','$phone')";

if (mysqli_query($conn, $sql)) {
    echo "New user account created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
<a href="home.php" style="color:blue;">Return to main site</a>
</html>