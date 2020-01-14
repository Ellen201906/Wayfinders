<?php
$data =$_POST["email"];

 include "dbcon.php";
 $result = mysqli_query($dbh, "SELECT * FROM products");

$sql="INSERT INTO products (ProdName) VALUES ('$data')";

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
window.history.go(-1)
</script>
