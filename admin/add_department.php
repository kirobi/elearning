<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>

            <div class="container">

                <div class="row-fluid">
                    <div class="span2">
                        <!-- left nav -->
                        <ul class="nav nav-tabs nav-stacked">

                            <li class="active">
                                <a href="add_department.php"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Department</a>
                                <a href="department.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            </li>


                        </ul>
                        <!-- right nav -->
                    </div>
                    <div class="span10">
                        <div class="hero-unit-3">
                            <ul class="thumbnails">
                                <li class="span7">
                                    <div class="thumbnail">
                                        <div class="alert alert-info"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Department Entry</div>

                                        <form class="form-horizontal" method="POST">

                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Department:</label>
                                                <div class="controls">
                                                    <input type="text" name="d" id="inputPassword" placeholder="Department" required>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Person In Charge:</label>
                                                <div class="controls">
                                                    <input type="text" name="p" id="inputPassword" placeholder="Person In Charge" required>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Title:</label>
                                                <div class="controls">
                                                    <input type="text" name="t" id="inputPassword" placeholder="Title" required>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">

                                                    <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save Department</button>
                                                </div>
                                            </div>
                                        </form>

                                        <?php
                                        if (isset($_POST['save'])) {


                                            $d = $_POST['d'];
                                            $p = $_POST['p'];
                                            $t = $_POST['t'];



                                            mysql_query("insert into department (department,incharge,title) values ('$d','$p','$t')") or die(mysql_error());
                                            mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Add Department', NOW(),'Admin')")or die(mysql_error());
                                        }
											header('location:department.php');
											
                                        ?>

                                    </div>
                                </li>

                            </ul>
                        </div>


                    </div>
                </div>

                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>




</body>
</html>


