<?php
$data =$_POST["email"];

$NewData=$data.",";

$fileName = './subscriber.txt';

file_put_contents($fileName,$NewData,FILE_APPEND);

echo $data;

?>
<script>

</script>