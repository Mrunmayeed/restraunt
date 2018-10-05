<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
s
<h1>Baker's Street</h1>

<?php
echo "Hello ".$_GET['name'];
?>
<br>
<a href="home.php">Sign Out</a>

<ul>
  <li><a class="active" href="u_home.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Home</a></li>
  <li><a href="u_menu.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Menu</a></li>
  <li><a href="u_cart.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Cart</a></li>
  <li><a href="u_order.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">My Orders</a></li>
  <li><a href="u_about.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">About</a></li>
</ul>


<p class="content">
The "Baker's Street" known for the quality of food it serves, brings before you variety of food items including snacks and drinks.
This page's objective is to make customer service more easy by providing online facility which enables customer to have their own accounts where they can select food items any time they want. <br>
<i>Hope you enjoy it!!!</i>
</p>

</body>
</html>