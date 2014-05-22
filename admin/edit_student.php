<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php  $get_id=$_GET['id']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>
                 <?php
                        $student_query=mysql_query("select * from student where student_id='$get_id'")or die(mysql_error());
                        $row=mysql_fetch_array($student_query);
                 ?>
            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="student.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="username" value="<?php echo $row['username']; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="text" name="password" id="inputPassword" value="<?php echo $row['password']; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Firstname</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Lastname</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="lastname" value="<?php echo $row['lastname']; ?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Middlename</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="middlename" value="<?php echo $row['middle_name']; ?>" required>
                                    </div>
                                </div>
									<div class="control-group">
	<label class="control-label" for="input01">Image:</label>
    <div class="controls">
	<input type="file" name="image" class="font"> 
    </div>
    </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Class:</label>
                                    <div class="controls">

                                        <select name="cys" class="span4" required>
                                            <option><?php echo $row['cys']; ?></option>
                                            <?php
                                            $query = mysql_query("select * from sws");
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
                                    <div class="controls">

                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            
							</form>

                            <?php
                            if (isset($_POST['save'])) {
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $middlename = $_POST['middle_name'];
                                $class = $_POST['cys'];

								$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

				move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
			$location="uploads/" . $_FILES["image"]["name"];
			
			
			mysql_query("update student set username='$username',password='$password',firstname='$firstname',lastname='$lastname',middle_name='$middlename',
			cys='$class',location='$location' where student_id='$get_id'")or die(mysql_error());
			mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Edit Student', NOW(),'Admin')")or die(mysql_error());

                                header('location:student.php');
                            }
                            ?>
                        </div>

                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>





</body>
</html>


