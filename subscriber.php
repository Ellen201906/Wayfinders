﻿<?php
$data =$_POST["email"];

$NewData=$data.",";

 include "dbcon.php";
 $result = mysqli_query($dbh, "SELECT * FROM products");

$sql="INSERT INTO products (ProdName) VALUES ('$NewData')";

 $result = mysqli_query($dbh, $sql);
	 if ($result)
	{
	 print("New Record was inserted");
	}
	else
	{
	 print("no success");
	}

echo $data;


?>
<script>

</script>
