<?php
$connect=mysqli_connect('localhost','root','','customer detail');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>