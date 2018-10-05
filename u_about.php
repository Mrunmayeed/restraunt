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
<a href="home.php" >Sign Out</a>

<ul>
  <li><a href="u_home.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Home</a></li>
  <li><a href="u_menu.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Menu</a></li>
  <li><a href="u_cart.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">Cart</a></li>
  <li><a href="u_order.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">My Orders</a></li>
  <li><a class="active" href="u_about.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['name'];?>">About</a></li>
</ul>


<p class="content">
Mrunmayee Dhapre:<br>
Phone No.:9757234148.<br>
Email:mvdhapre@gmail.com.<br>
<br><br>
Sanskruti Bijwe:<br>
Phone No.:7045263320<br>
Email:sanskruti_bijwe@rediffmail.com<br>
</p>

</body>
</html>