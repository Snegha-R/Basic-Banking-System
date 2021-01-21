<head>
	<title>Table With Database</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 80%;
			color: white;
			font-family: monospace;
			font-size: 20px;
			text-align: center;
			outline-style:ridge;

		}
		th{
			
			background-color: black;
			color: black;

		}
		body
		{
			background-image:url("bb2.JPG");
		    background-color:transparent;
		    height: 100vh;
            background-size: cover;
            background-position: center;
		}
	</style>
</head>
<body>


<table>
	<tr>
		
		
	</tr>
<?php
	//create connection
$connection = mysqli_connect("localhost", "root", "", "customer detail");

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM customer");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>

<html>
<br>
<br><h3>
<a href="Home.html">Back</a></h3>
</html>
