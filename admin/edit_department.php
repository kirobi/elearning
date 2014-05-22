<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php  $get_id=$_GET['id']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>
                 <?php
                        $department_query=mysql_query("select * from department where dep_id='$get_id'")or die(mysql_error());
                        $row=mysql_fetch_array($department_query);
                 ?>
            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="department.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
             
								<div class="control-group">
                                    <label class="control-label" for="incharge">Incharge</label>
                                    <div class="controls">
                                        <input type="text" id="incharge" name="incharge" value="<?php echo $row['incharge']; ?>" required>
                                    </div>
                                
									<div class="control-group">
	
                                    </div>
									
									<div class="control-group">
										<label class="control-label" for="title">Title</label>
										<div class="controls">
											<input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required>
										</div>
                                
										<div class="control-group">
	
                                    </div>
									<div class="control-group">
										<label class="control-label" for="title">Department</label>
										<div class="controls">
											<input type="text" id="departnent" name="department" value="<?php echo $row['department']; ?>" required>
										</div>
                                
										<div class="control-group">
	
                                    </div>
                            
							</form>

                            <?php
                            if (isset($_POST['save'])) {
                                $incharge = $_POST['incharge'];
                                $title = $_POST['title'];
							    $department = $_POST['department'];
                               
                              
			mysql_query("update department set incharge='$incharge',title='$title', department = '$department' where dep_id='$get_id'
			")or die(mysql_error());
			mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Edit Department', NOW(),'Admin')")or die(mysql_error());

                                header('location:department.php');
                            }
                            ?>
                               </div>
							         <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                      </div>

                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>





</body>
</html>


