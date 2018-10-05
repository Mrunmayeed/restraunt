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
  <li><a class="active" href="u_menu.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Menu</a></li>
  <li><a href="u_cart.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Cart</a></li>
  <li><a href="u_order.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">My Orders</a></li>
  <li><a href="u_about.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">About</a></li>
</ul>


<p class="content">
<table>
<tr>
	<th>Sr. No.</th>
	<th>Item</th>
	<th> Size</th>
	<th> Cost</th>
	<th> Add to Cart</th>
</tr>

<tr>
	<th>1.</th>
	<th>Burger</th>
	<th>Mediem</th>
	<th>70</th>
	<th>
		<form id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>" method="post">
            <input name="s1" type="submit" value="Add" />
        </form>
	</th>
</tr>

<tr>
	<th>2.</th>
	<th>Burger</th>
	<th>Large</th>
	<th>100</th>
	<th>
		<form id="f2" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>" method="post">
            <input name="s2" type="submit" value="Add" />
        </form>
	</th>
</tr>

<tr>
	<th>3.</th>
	<th>French Fries </th>
	<th>Medium</th>
	<th>40</th>
	<th>
		<form id="f3" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>" method="post">
            <input name="s3" type="submit" value="Add" />
        </form>
	</th>
</tr>

<tr>
	<th>4.</th>
	<th>French Fries </th>
	<th>Large</th>
	<th>60</th>
	<th>
		<form id="f4" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>" method="post">
            <input name="s4" type="submit" value="Add" />
        </form>
	</th>
</tr>

<tr>
	<th>5.</th>
	<th>Coke</th>
	<th>Small</th>
	<th>50</th>
	<th>
		<form id="f5" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>" method="post">
            <input name="s5" type="submit" value="Add" />
        </form>
	</th>
</tr>

<tr>
	<th>6.</th>
	<th>Coke</th>
	<th>Medium</th>
	<th>70</th>
	<th>
		<form id="f6" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>" method="post">
            <input name="s6" type="submit" value="Add" />
        </form>
	</th>
</tr>

</table>
<?php

$conn=mysqli_connect("localhost","root","","resdb");
if(!$conn){
	die("Cannot connect to database");}
	
$uid=$_GET['id'];
if($_POST['s1'])
	{
		$sql="CALL additem('$uid',1)";
		if(mysqli_query($conn,$sql)){
			echo "Item 1 added";
		}
		else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

else if($_POST['s2'])
	{
	 $sql="CALL additem('$uid',2)";
		if(mysqli_query($conn,$sql)){
			echo "Item 2 added";
		}
		else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	
else if($_POST['s3'])
	{
	 $sql="CALL additem('$uid',3)";
		if(mysqli_query($conn,$sql)){
			echo "Item 3 added";
		}
		else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

else if($_POST['s4'])
	{
	 $sql="CALL additem('$uid',4)";
		if(mysqli_query($conn,$sql)){
			echo "Item 4 added";
		}
		else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

else if($_POST['s5'])
	{
	 $sql="CALL additem('$uid',5)";
		if(mysqli_query($conn,$sql)){
			echo "Item 5 added";
		}
		else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}
	
else if($_POST['s6'])
	{
	 $sql="CALL additem('$uid',6)";
		if(mysqli_query($conn,$sql)){
			echo "Item 6 added";
		}
		else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}

mysqli_close($conn);
?>
</p>

</body>
</html>