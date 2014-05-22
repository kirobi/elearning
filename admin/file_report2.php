<?php
include('header.php');
include ('session.php');

?>
<a href="report3.php">Back </a>
<div align="center">Files Report Date:</strong>&nbsp;&nbsp;<strong> <?php echo $_POST['dayto']; ?>
<br />
    </strong></div>
<table border="1px" style="margin:0 auto;"	>
  <tr>
    <th width="174">Date Uploaded</th>
    <th width="174">File Name</th>
    <th width="294">Description </th>
	<th>Action</th>
	
  </tr>
  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("elearning", $con);

$b=$_POST['dayto'];
 
$result1 = mysql_query("SELECT * FROM files where fdatein between '$b' and '$b+1'");

while($row = mysql_fetch_array($result1))
{
$file_id = $row['file_id'];
?>
  <tr>
   
      <!-- script -->
                            <script type="text/javascript">
                                $(document).ready(function(){
                                                                    
                                    $('#d<?php echo $file_id; ?>').tooltip('show')
                                    $('#d<?php echo $file_id; ?>').tooltip('hide')
                                });
                            </script>
	<td><?php echo $row['fdatein']; ?></td>
	<td><?php echo $row['fname'] ?></td>
    <td><?php echo $row['fdesc']; ?></td> 
    <td width="50">
	 
	<a href="<?php echo $row['floc']; ?>" rel="tooltip"  title="Download File" id="d<?php echo $file_id; ?>"  role="button"  data-toggle="modal" class="btn btn-info"><i class="icon-download-alt icon-large"></i></a>
    
	
	</div></td>
    
  </tr>
<?php }

mysql_close($con);

?>
      </div></td>
  </tr>
</table><br /><br />

