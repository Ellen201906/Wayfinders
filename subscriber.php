<?php
$myfile = fopen("subscriber1.txt", "a+") or die("Unable to open file!");

$data =$_POST["email"];

$NewData=$data.",";

fwrite($myfile, $NewData);



echo $data;
echo $myfile;

?>
<script>

</script>
