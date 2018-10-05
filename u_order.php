<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<h1>Baker's Street</h1>

<?php
echo "Hello ".$_GET['name'];
?>
<br>
<a href="home.php">Sign Out</a>

<ul>
  <li><a href="u_home.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Home</a></li>
  <li><a href="u_menu.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Menu</a></li>
  <li><a href="u_cart.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Cart</a></li>
  <li><a class="active" href="u_order.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">My Orders</a></li>
  <li><a href="u_about.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">About</a></li>
</ul>


<p class="content">
<table>
<tr>
	<th>Sr. No.</th>
	<th>Food Item</th>
	<th> Size </th>
	<th>Quantity</th>
	<th>Cost</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","resdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$uid=$_GET['id'];

$sql1="CALL getoid('$uid',@t)";
$sql3= "SELECT @t AS od";
$re=mysqli_query($conn,$sql1);
$ret=mysqli_query($conn,$sql3);
$od = mysqli_fetch_assoc($ret);
$oid=$od['od'];

$sql = "SELECT item,size,quantity,cost*quantity AS Cost FROM ordered LEFT JOIN food ON ordered.fid=food.fid WHERE oid=$oid ";

$result = mysqli_query($conn,$sql);
$count=1;

if (mysqli_num_rows($result) > 0) {
	
 
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><th>".$count."</th><th>".$row['item']."</th><th>".$row['size']."</th><th>".$row['quantity']."</th><th>".$row['Cost']."</th><th>
		</th></tr>";
		$count++;
    }
} else {
    echo "No orders.";
	
	
}
echo "</table>";

$sql2 = "SELECT bill FROM orders WHERE oid=$oid";
$t = mysqli_query($conn, $sql2);
$tot = mysqli_fetch_assoc($t);
echo "Total bill: ".$tot['bill'];

mysqli_close($conn);
?>
</p>

</body>
</html>