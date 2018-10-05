<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Baker's Street</h1>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="menu.php">Menu</a></li>
  <li><a class="active" href="signin.php">Sign In</a></li>
  <li><a href="signup.php">Sign Up</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<form class="content" action="verify.php" method="post"><br>
Username:<input type="text" name="username" required><br><br>
Password:<input type="password" name="psw" required><br><br>
<input type="submit" value="Sign In">
</form>