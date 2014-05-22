<?php
include('header.php');
include ('session.php');
$user_query = mysql_query("select * from student where student_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>


    <?php include('navhead_student.php'); ?>

    <div class="container">
        <div class="row-fluid">

					<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
						<tr>
							<td><p align="center"><img src="admin/images/computer.jpg" width="170" height="33" alt="About" /></p>
								<table width="759" border="0" align="center" cellpadding="0">
        
									<table width="90%" align="center" border="2" style="background:#FFFFFF">
										<tr >
											<td align="center" colspan="3"><h1>INSTITUTE  LIBRARY</h1></center></td>
										</tr>
										<tr>
											<td align="center">MATERIAL</td><td align="center">UNIT (s)</td><td align="center">DESCRIPTION</td>
										</tr>
										<tr>
											<td align="left"> 1.Introduction To Calculus</td><td align="center">calculus I</td><td align="center"> This PDF  .Click on the icon to download <a href="downloads/calculus1.pdf"><img src="images/pdf.jpg" width="40"height="40"/></td>
										</tr>
										<tr>
											<td align="left">Designing User Interfaces</td><td align="center">Software Engineering Principles</td><td align="center">Word document Interfaces.Click on the icon to download <a href="downloads/user interfaces.doc"><img src="images/word.png" width="40"height="40"/></td>
										</tr>
										<tr>
											<td align="left">Solving Matrices</td><td align="center">Linear algebra</td><td align="center">PDF document .Click on the icon to download.<a href="downloads/calculus1.pdf"><img src="images/pdf.jpg" width="40"height="40"/></td>
										</tr>
										<tr>
											<td align="left">VBA programming </td><td align="center">introduction to structured programming</td><td align="center"> An flv Video file <a href="downloads/vba.flv">click here to download<img src="images/movie.jpg" width="40" height="40"</a></td>
										</tr>
										<tr>
											<td align="left">Computer networks Revised</td><td align="center">Data communication</td><td align="center">This  is a web file.Click to <a href="data.html"> Open</a></td>
										</tr>
										<tr>
											<td align="left">Sorting Algorithms Explained</td><td align="center">Data Structures</td><td align="center">A powerpoint presentation.Download by cicking on the icon&nbsp; <a href="downloads/sorting.pptx"><img src="images/powerpoint.png" width="40"height="40"/></td></td>
										</tr>
										<tr>
											<td align="left">Not Available..</td><td align="center">Not Available..</td><td align="center">Not Available..</td>
										</tr>
 
										<tr>
											<td align="center" colspan="3"><p align="center"><a href="student.php"><img border="0" src="admin/images/cooltext457951462.png" onmouseover="this.src='admin/images/cooltext457951462MouseOver.png';" onmouseout="this.src='admin/images/cooltext457951462.png';" /></p></td>
										</tr>
 
									</table>
								</table>
					</table>
     
    
						<h1 align="center" class="heading">&nbsp;</h1>


        </div>
			<?php include('footer.php'); ?>
    </div>

