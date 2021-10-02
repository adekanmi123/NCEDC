

<!DOCTYPE html>
<html>
<head>
	<title> Employee Login</title>
	<link rel="stylesheet" href="main.css">
	<center><img src="../images/tradewinds.jpg"></center> 
	
	
</head>
<body>
		<center><form method="POST" action="viewEmployees.php">
			<header><h1>Welcome To The NCEDC Portal</h1></header>
			<p></p>
			<h2>Enter Username and Password to Login</h2>
				<label>Enter Your User Name: </label> <input type="text" name="username" placeholder="username" />	
				<p></p>
				<label>Enter Your Password: </label><input type="password" name="password" placeholder="password"/>
			</div>
			<p></p>
			<input type="submit" value="LOGIN"/>
		</form></center>
	</div>
<footer>
        <p>&copy; <?php echo date("Y"); ?> NCEDC, Inc.</p>
    </footer>
</body>
</html>



