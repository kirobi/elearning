<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php  $get_id=$_GET['id']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>
                 <?php
                        $course_query=mysql_query("select * from course where course_id='$get_id'")or die(mysql_error());
                        $row=mysql_fetch_array($course_query);
                 ?>
            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="course.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Course Code :</label>
                                    <div class="controls">

                                        <select name="cys" class="span4" required>
										
                                            <option><?php echo $row['cys']; ?></option>
											
                                            <?php
                                            $query = mysql_query("select * from course ");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['cys']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
							
								 
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department:</label>
                                    <div class="controls">
									
                                <?php  $course_query=mysql_query("select * from course where course_id='$get_id'")or die(mysql_error());
                        $row=mysql_fetch_array($course_query);?>
						
                                        <select name="department" class="span4" required>
                                          
										  <option><?php echo $row['department']; ?></option>
                                            <?php
                                            $query = mysql_query("select * from course ");
                                            while ($row = mysql_fetch_array($query)) {
                                            ?>
                                             <option><?php echo $row['department']; ?></option>
                                             <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>								 
                                
								<div class="control-group">
                                    <label class="control-label" for="major">Major</label>
                                    <div class="controls">
                                        <input type="text" id="inputMajor" name="major" value="<?php echo $row['major']; ?>" required>
                                    </div>
								</div>
								<div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                      </div>
                            
							</form>

                            <?php
                            if (isset($_POST["save"])) {
                                $major = $_POST['major'];
                                $cys = $_POST['cys'];
								$department = $_POST['department'];

                                                
			mysql_query("update course set cys='$cys',department='$department', major='$major' where course_id='$get_id'
			")or die(mysql_error());
			mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Edit Course', NOW(),'Admin')")or die(mysql_error());
			

                                header('location:course.php');
                            }
                            ?>
                               
							         

                    </div>
                </div>
               
            </div>
			 <?php include('footer.php'); ?>
        </div>
    </div>





</body>
</html>


