<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Baker's Street</h1>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="menu.php">Menu</a></li>
  <li><a href="signin.php">Sign In</a></li>
  <li><a class="active" href="signup.php">Sign Up</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<form class="content" action="adduser.php" method="post" id="signup">

Name: <input type="text" name="name" required>*<br><br>
Username: <input type="text" name="userid" required>*<br><br>
Password: <input type="password" id="psw" name="psw" required>*<br>
<br>Email: <input type="text" name="mail"><br><br>
Phone No.: <input type="text" name="phone" required>*<br><br>
<input type="submit" value="Sign Up">
</form>
<p id="fault" ></p> <!-- add to content class and validation not working -->


<script>
function valid(e)
{
w = document.getElementById("psw").value;
if(w.length < 11){
	document.getElementById("fault")="password is too short.";
	}
if(w.search([0-9] == -1) {
	document.getElementById("fault")="No number present";
}
}

window.onload = function() {
  document.getElementById("signup").addEventListener("submit", function(e){
      valid(e);
  });
}
</script>

</body>
</html>
