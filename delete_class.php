<?php
include('admin/connect.php');
$get_id=$_GET['id'];

mysql_query("delete from class where classs_id='$get_id'")or die(mysql_error());
header('location:teacher_class.php');
mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Delete Class', NOW(),'Teacher')")or die(mysql_error());

?>