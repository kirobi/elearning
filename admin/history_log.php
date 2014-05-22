<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>

            <div class="container">

                <div class="row-fluid">

                      


	

<div id="element" class="hero-body">
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Date/Time</th>
				<th>Action</th>
				<th>Data</th>
				<th>User</th>
				</tr>
			</thead>
			<tbody>

<?php $history_query=mysql_query("select * from history");
while($row=mysql_fetch_array($history_query)){  ?>

<tr class="">
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['action']; ?></td>
	<td><?php  echo $row['data']?></td>
	<td><?php echo $row['user'] ?></td>
	




	
	</tr>
<?php }?>
			</tbody>
		</table>


	</div>	

<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">?</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
		
		
                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>
