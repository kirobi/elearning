<?php
include('admin/connect.php');

$get_id = $_POST['id'];
$class_id=$_POST['class_id'];

mysql_query("delete from sws where sws_id='$get_id'") or die(mysql_error());
mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Delete Student', NOW(),'Teacher')")or die(mysql_error());
?>


<script type="text/javascript">
    window.location="class.php<?php echo '?id=' . $class_id; ?>";                          
</script>


