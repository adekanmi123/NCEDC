<?php 
$username1 = filter_input(INPUT_POST, 'username');
$password1 = filter_input(INPUT_POST, 'password');

require_once('../inc/db_connect.php');


$queryEmployees = "SELECT * FROM employees WHERE username='$username1' and password='$password1'";

$statement2 = $db1->prepare($queryEmployees);			  
$statement2->execute();
$result = $statement2->fetch();
$statement2->closeCursor();

if($result == true){
	echo "Login Successful!";
} else {
	echo "Invalid Username or password";
	include 'index.php';
	exit;
}

?>

<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>NCEDC, Inc.</title>
    <link rel="stylesheet" href="main.css" >
</head>

<!-- the body section -->
<body>
<main>
<header><h1>NCEDC Portal</h1></header>
<section>
<h2>View Customer Information</h2>
<a href="../customers/viewCustomers.php">Access Customer Information</a>
<p></p>
<h2>View Employee Information</h2>
<a href="../employees/employeeInformation.php">Access Employee Information</a>
<p></p>
<h2>View Supplier Information</h2>
<a href="../suppliers/viewSuppliers.php">Access Supplier Information</a>
<p></p>
<h2>View Order Information</h2>
<a href="../productOrders/viewProductOrders.php">Access Order Information</a>
<p></p>
<h2>View Invoice Information</h2>
<a href="../invoices/viewInvoices.php">Access Invoice Information</a>
<p></p>
<h2>View Purchase Order Information</h2>
<a href="../purchaseOrders/viewpurchaseOrders.php">Access Purchase Order Information</a>
<p></p>
</section>

</main>
<footer>
        <p>&copy; <?php echo date("Y"); ?> NCEDC, Inc.</p>
    </footer>
</body>
</html>
