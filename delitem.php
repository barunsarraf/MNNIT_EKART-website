<?php

include "config.php";

//print_r($_GET);
$res=mysqli_query($db,"DELETE FROM product WHERE prod_id='".$_GET['id']."'");


if($res===TRUE)
echo "Y";
else
echo "N";


?>