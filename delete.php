<?php
require('connection.php');
if(isset($_GET['delete']))
{
	$del = $_GET['delete'];
	$sql = "DELETE FROM Crud_demo WHERE id=$del";
	$res = $conn->query($sql);
	header('location:table.php');

}
?>