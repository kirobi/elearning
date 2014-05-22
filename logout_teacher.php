<?php
include('dbConnector.php');
include('session.php');

$logout_query=mysql_query("select * from teacher where student_id=$session_id");
$row=mysql_fetch_array($logout_query);
$f=$row['firstname'];
$l=$row['lastname'];
session_start();
session_destroy();

mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Logout', NOW(),'Teacher')")or die(mysql_error());


header('location:index.php');

?>