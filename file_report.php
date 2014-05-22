<a href="report.php">Back </a>
<div align="center">Files Report From:<strong> <?php echo $_POST['dayfrom']; ?></strong>&nbsp;&nbsp;To:<strong> <?php echo $_POST['dayto']; ?>
<br />
    </strong></div>
<table border="1px" style="margin:0 auto;"	>
  <tr>
    <th width="85">Date</th>
    <th width="174">File</th>
    <th width="294">Description </th>
  </tr>
  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("elearning", $con);


$a=$_POST['dayfrom'];
$b=$_POST['dayto'];
 
$result1 = mysql_query("SELECT * FROM files WHERE fdatein BETWEEN '$a' AND '$b'");

while($row = mysql_fetch_array($result1))
{
  echo '<tr>';
    echo '<td>'.$row['fdatein'].'</td>';
    echo '<td>'.$row['fname'].'</td>';
	echo '<td>'.$row['fdesc'].'</td>';
    
	
	echo '</div></td>';
    
  echo '</tr>';
 }

mysql_close($con);
?>  

      </div></td>
  </tr>
</table><br /><br />

