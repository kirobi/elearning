<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                        <section id="page"><font color="#FFFFFF"></font>
						<!--<header id="pageheader" class="homeheader">
						<h1 class="sitedescription"><h2>&nbsp;</h2></h1>
						</header>-->
						<article class="post">
							<header class="postheader">
						<div class="clear"></div>
                        <div class="clear"></div>
							<h2><p align="center"><u>The Genaral System Report</u></p></h2><h3>&nbsp;</h3>
							<h3><p align="center"></p></h3>
						<a href="#"></a></p>
						<!--<header>-->
					<?php
							$resulta=mysql_query("select*from teacher");
							$num_rows=mysql_num_rows($resulta);
							$resultd=mysql_query("select*from student");
							$num_row=mysql_num_rows($resultd);
							$resultm=mysql_query("select*from user");
							$num_rowm=mysql_num_rows($resultm);
							
					?>
							<h3><p align="center"><u>Update Report On The E-learning Portal</u></p></h3>
							
				<style>table {background:#f4f4f4; 
						width:730px; margin:25px auto 25px; 
						text-align:center; 
						display:block; 
						border:solid 5px #ccc; 
						border-color:#009900;
						border-style:groove 4px;
						font:normal 14px "Trebuchet MS", Arial, Helvetica, sans-serif; 
						line-height:22px; padding:55px;}
						a {color:#F60;}</style>
				<table width="800" cellspacing="6" cellpadding="1" border="1">

						<tr>
						<td align="center" colspan="15"><h2>RECORD ON&nbsp&nbsp&nbsp<?php echo date("D.M.Y")?></h2></td></tr>
						<td colspan="15"><strong><h3>System Users Summary</h3></strong></td></tr>
						<tr>
						<th colspan="2"><b>Teacher</b></th>
						<th colspan="2"><b>Students</b></th>
						<th colspan="2"><b>Administrators</b></th>
						<th colspan="2"><b>Total Users</b></th></tr>
						<tr>
						<th Height="" colspan="2"><?php echo $num_rows?></th>
						<th colspan="2"><?php echo $num_row?></th>
						<th colspan="2"><?php echo $num_rowm?></th>
						<th colspan="2"><?php echo $num_row+$num_rows+$num_rowm?></th>
						<tr>
						<td colspan="15"><strong><h3>Number of course, subjects, And  Department</h3></strong></td></tr>
						<?php  
						$result1=mysql_query("select*from course");
						$num_row1=mysql_num_rows($result1);
						$result2=mysql_query("select*from subject");
						$num_row2=mysql_num_rows($result2);
						$result3=mysql_query("select*from department");
						$num_row3=mysql_num_rows($result3);
						$result4=mysql_query("select*from class");
						$num_row4=mysql_num_rows($result3)
						?>
						<tr>
						<th colspan="2"><b>Course</b></th>
						<th colspan="2"><b>Subjects</b></th>
						<th colspan="2"><b>Departments</b></th>
						<th colspan="2"><b>Class</b></th></tr>
						<tr>
						<th Height="" colspan="2"><?php echo $num_row1 ?></th>
						<th colspan="2"><?php echo $num_row2?></th>
						<th colspan="2"><?php echo $num_row3?></th>
						<th colspan="2"><?php echo $num_row4?></th></tr>
						<tr>
						<th colspan="15" width="20"><strong><h3>Statistical Comparison Of Application<strong><h3></th></tr>
						<tr>
						<th colspan="15"><b>Rate of Teachers to students</b></th>
					<?php $rate=$num_row+$num_rows?>
						<tr>
						<th colspan="15"><?php echo $num_rows/$rate*100?>%</th>
						</tr>
						<tr>
						<tr><td colspan="15" size=""><h3>Number Of Files Uploaded</h3></td></tr>
						<tr>
						<th Height="" colspan="15"><b>Files</b></th>
						</tr>
					<?php
						$causea=mysql_query("select*from files");
						$num_rowa=mysql_num_rows($causea)?>
						<tr>
						<th Height="" colspan="15"><?php echo $num_rowa ?></th>
						<tr>
					
				 
						</table>
				
						</header>
						</article>
						<article class="post">
						<header class="postheader">
						<h1></h1>
						<p class="postinfo">&nbsp;</p>
						</header>
						<p></p></h2>
						<p></p></h2>
						<p><b></h2></p>
						<p><b></b></p>
						</article>
					<div class="clear"></div>

					<div class="clear"></div>
					</section>
                        </div>

                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>
</body>