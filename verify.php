<html>
<head></head>
<body>

<?php
$conn=mysqli_connect("localhost","root","","resdb");
if(!$conn){
	die("Cannot connect to database");}
	
$username=$_POST['username'];
$password=$_POST['psw'];

$sql="SELECT uid,name,password FROM USER WHERE username='$username' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
       
	   if($password==$row['password']){
			$id=$row['uid'];
			$name=$row['name'];
			echo "<a href='u_home.php?id=$id&name=$name' style='color:blue; text-align:center;'> Start choosing</a>";
	   }
	   else{
			echo "Incorrect password ";
	   }
    }
} else {
    echo "No such username present";
}

mysqli_close($conn);
?>


</body>
</html>