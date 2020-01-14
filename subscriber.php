<?php
$data =$_POST["email"];

$NewData=$data.",";

 include "dbcon.php";

$sql="INSERT INTO products (ProdName) VALUES ('$NewData')";



echo $data;


?>
<script>

</script>
