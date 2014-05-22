<?php
include('connect.php');
$get_id=$_GET['id'];

mysql_query("delete from student where student_id='$get_id'")or die(mysql_error());
mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Delete Student', NOW(),'Admin')")or die(mysql_error());
header('location:student.php');


?>