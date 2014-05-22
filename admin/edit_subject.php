<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php  $get_id=$_GET['id']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>
                 <?php
                        $subject_query=mysql_query("select * from subject where subject_id='$get_id'")or die(mysql_error());
                        $row=mysql_fetch_array($subject_query);
                 ?>
            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="subject.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
             
								<div class="control-group">
                                    <label class="control-label" for="Subject_code">Subject_code</label>
                                    <div class="controls">
                                        <input type="text" id="subject_code" name="subject_code" value="<?php echo $row['subject_code']; ?>" required>
                                    </div>
                                
									<div class="control-group">
	
                                    </div>
									
									<div class="control-group">
										<label class="control-label" for="subject_title">Subject_title</label>
										<div class="controls">
											<input type="text" id="subject_title" name="subject_title" value="<?php echo $row['subject_title']; ?>" required>
										</div>
                                
										<div class="control-group">
	
                                    </div>
                            
							</form>

                            <?php
                            if (isset($_POST['save'])) {
                                $Subject_code = $_POST['subject_code'];
                                $Subject_title = $_POST['subject_title'];
							
                               
                              
			mysql_query("update subject set subject_code='$Subject_code',subject_title='$Subject_title' where subject_id='$get_id'
			")or die(mysql_error());
			mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Edit Subject', NOW(),'Admin')")or die(mysql_error());

                                header('location:subject.php');
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


