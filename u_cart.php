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
  <li><a class="active" href="u_cart.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Cart</a></li>
  <li><a href="u_order.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">My Orders</a></li>
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
	<th>Remove from Cart</th>
</tr>
<?php

$conn = mysqli_connect("localhost","root","","resdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$uid=$_GET['id'];

$sql = "SELECT item,size,quantity,cost*quantity AS Cost,cart.fid FROM cart LEFT JOIN food ON cart.fid=food.fid WHERE uid=$uid";

$result = mysqli_query($conn,$sql);
$count=1;

if (mysqli_num_rows($result) > 0) {
	
 
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><th>".$count."</th><th>".$row['item']."</th><th>".$row['size']."</th><th>".$row['quantity']."</th><th>".$row['Cost']."</th><th>
		<form id='f$count' action='".$_SERVER['PHP_SELF']."?id=". $_GET['id']."&name=".$_GET['name']."' method='post'>
		<input type='text' name='n$count' value='".$row['fid']."' hidden><input type='submit' name='s$count' value='Remove'></form>
		</th></tr>";
			
		$count++;
    }
} else {
    echo "No item in cart";
	
	
}

$it=1;
while($it<$count){
	$s="s$it";
	if($_POST[$s])
	{	$n="n$it";
		$fd=$_POST[$n];
		$sql1="CALL removeitem('$uid','$fd')";
		if(mysqli_query($conn,$sql1))
			{echo "Item removed";}
		else
			{echo "Error";}
		
	}
	$it++;
}

echo "
</table>
	
<form class='content' action=". $_SERVER['PHP_SELF']."?id=".$_GET['id']."&name=".$_GET['name']." method='post'>
<input type='submit' name='scl' value='Clear cart'><br>
<input type='submit' name='so' value='Order'>
</form>" ;




if($_POST['scl']){
	$sql3="CALL clearcart('$uid')";
	if(mysqli_query($conn,$sql3))
		echo "Cleared Cart";
}		

if($_POST['so']){
	$sql3="CALL ordering('$uid')";
	if(mysqli_query($conn,$sql3))
	{
		$sql4="CALL clearcart('$uid')";
		if(mysqli_query($conn,$sql4))
			echo "Ordered the items.";
		
	}	
}	
mysqli_close($conn);
	

?>
</p>

</body>
</html>