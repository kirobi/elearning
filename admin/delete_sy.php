<?php
include('connect.php');
$get_id=$_GET['id'];
mysql_query("delete from sy where sy_id='$get_id'")or die(mysql_error());
mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Delete School Year', NOW(),'Admin')")or die(mysql_error());
header('location:sy.php');

?>
