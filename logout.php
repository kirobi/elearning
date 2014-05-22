<?php
include('admin/connect.php');
include('session.php');

$logout_query=mysql_query("select * from teacher where teacher_id=$session_id");
$row=mysql_fetch_array($logout_query);

$logout_query1=mysql_query("select * from student where student_id=$session1_id");
$row1=mysql_fetch_array($logout_query1);

if ($_SESSION['id']){
session_start();
$f=$row['firstname'];
$l=$row['lastname'];
$k=$row['teacher_id'];

$f1=$row1['firstname'];
$l1=$row1['lastname'];
$n=$row1['student_id'];

session_destroy();

if($k){
mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Logout', NOW(),'Teacher')")or die(mysql_error());
}
else if($n){
mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f1 $l1', 'Logout', NOW(),'Student')")or die(mysql_error());
}
header('location:index.php');
}

?>