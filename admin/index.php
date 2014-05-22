<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>

<body>

    <div class="row-fluid">
        <div class="span12">


            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner"> <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->

                <ul class="nav">
                    <li><a href="../index.php"><i class="icon-home icon-large"></i>&nbsp;Main Home</a></li>
                    </li>
				</ul>
            </div>
                    <div class="container">

                      
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

               



                        <div class="nav-collapse collapse">
                            


                        </div>

                    </div>
                </div>
            </div>

            <div class="hero-unit-header">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">


                            <div class="row-fluid">
                                <div class="span6">
                                    <img src="images/head.png">
                                </div>
                                <div class="span6">

                                    <div class="pull-right">
                                        <i class="icon-calendar icon-large"></i>
                                        <?php
                                        $Today = date('y:m:d');
                                        $new = date('l, F d, Y', strtotime($Today));
                                        echo $new;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row-fluid">
                       <div class="span6">
                    <div class="hero-unit-3">
                        <div class="alert alert-info">Mission</div>
                        <p>
                            To provide academically stimulating, culturally diverse and quality learning environment that engenders research, innovation and technology development towards producing relevant human resources and leaders to contribute to attainment of national development goals

                        </p>
                    </div>
                    <div class="hero-unit-3">
                        <div class="alert alert-info">Vision</div>
                        <p>
                            To be a premier technological University excelling in quality Education, Research and Technology transfer for national development.
                        </p>
                    </div>
                </div>
                    <div class="span6">

                        <div class="alert alert-info"><strong>Login</strong> Please Enter The Details Below</div>
                        <!-- login -->
                        <form class="form-horizontal" method="post">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Username</label>
                                <div class="controls">
                                    <input type="text" name="username" id="inputEmail" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" id="inputPassword" placeholder="Password" required>
                                </div>
                            </div>


                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" name="login" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
                                </div>
<br>
                                <?php
                                if (isset($_POST['login'])) {

                                    function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return mysql_real_escape_string($str);
                                    }

                                    $username = clean($_POST['username']);
                                    $password = clean($_POST['password']);

                                    $query = mysql_query("select * from user where username='$username' and password='$password'") or die(mysql_error());
                                    $count = mysql_num_rows($query);
                                    $row = mysql_fetch_array($query);
									$f=$row['firstname'];
									$l=$row['lastname'];


                                    if ($count > 0) {
                                        session_start();
                                        session_regenerate_id();
                                        $_SESSION['id'] = $row['user_id'];
										mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'Admin')")or die(mysql_error());
                                        header('location:home.php');
                                        session_write_close();
                                        exit();
                                    } else {
                                        session_write_close();
                                        ?>

                                     
                                        <div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Access Denied</div>

                                        <?php
                                      
                                    }
                                }
                                ?>
                            </div>
                

                    </form>
                </div>
                   <?php include('footer_fixed.php'); ?>
            </div>
      
        </div>
    </div>
</div>


</body>
</html>


