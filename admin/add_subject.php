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
                                <a href="add_course.php"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Subject</a>
                                <a href="subject.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            </li>


                        </ul>
                        <!-- right nav -->
                    </div>
                    <div class="span10">
                        <div class="hero-unit-3">
                            <ul class="thumbnails">
                                <li class="span7">
                                    <div class="thumbnail">
                                        <div class="alert alert-info"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Subject Entry</div>

                                        <form class="form-horizontal" method="POST">

                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Subject Code:</label>
                                                <div class="controls">
                                                    <input type="text" name="sc" id="inputPassword" placeholder="Subject Code" required>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Subject Title:</label>
                                                <div class="controls">
                                                    <input type="text" name="st" id="inputPassword" placeholder="Subject Title" required>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Cateogry:</label>
                                                <div class="controls">
                                                 
                                                    <select name="c" required>
                                                        <option></option>
                                                        <option>Major</option>
                                                        <option>Minor</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">

                                                    <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save Subject</button>
                                                </div>
                                            </div>
                                        </form>

                                        <?php
                                        if (isset($_POST['save'])) {


                                            $sc = $_POST['sc'];
                                            $st = $_POST['st'];
                                            $category = $_POST['c'];



                                            mysql_query("insert into subject (subject_code,subject_title,category) values ('$sc','$st','$category')") or die(mysql_error());
                                            mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Add Subject', NOW(),'Admin')")or die(mysql_error());
											header('location:subject.php');
											
                                        }
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


