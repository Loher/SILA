
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>


<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta http-equiv="Content-Language" content="fr" />
 <meta name="author" content="Loher" />
 
 <link rel="stylesheet" href="main.css" />

 
 <title>Skate In Lorient</title>
   <?php
 	include 'database.php';
  ?>
</head>

<body>

<table class="tableContainer">
	<tr>
		<td>
			<img src="img/logoSila.png" class="logoSila" alt="SILA" />
		</td>
		<td>
			<h1>Skate In Lorient</h1>
		</td>
		<td>
			<img src="img/logoEsf.png" class="logoEsf" alt="SILA" />
		</td>
	</tr>
</table>


<div class="loginContainer">

<form action="administration.php" method="POST">
	<div class="firstField loginFieldContainer">
		<span>Login</span>
		<input type="text" name="login">
	</div>
	
	<div class="loginFieldContainer">
		<span>Password</span>
		<input type="password" name="password">
	</div>
	<input class="submitButton" type="submit" value="Connect">
</form>
	
</div>	


</body>

</html>