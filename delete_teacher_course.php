<?php
include('admin/connect.php');
$get_id=$_POST['id'];

mysql_query("delete from class where class_id='$get_id'")or die(mysql_error());
header('location:teacher_subject.php');
mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Delete Course', NOW(),'Teacher')")or die(mysql_error());

?>