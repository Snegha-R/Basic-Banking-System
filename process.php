<?php include 'database.php'; ?>

<?php

// create a variable
$Afrom=$_POST['Afrom'];
$Ato=$_POST['Ato'];
$amount=$_POST['amount'];


//Execute the query


mysqli_query($connect,"INSERT INTO transfer (Afrom,Ato,amount)  VALUES ('$Afrom','$Ato','$amount')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Details Added</p>";
	
} else {
	echo "Details NOT Added<br />";
	
	echo mysqli_error ($connect);
}
?>
<!DOCTYPE >
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index1.php">Back</a>

</body>
</html>

