<?php
include('header.php');
include('session.php');
include('header2.php');


$user_query = mysql_query("select * from teacher where teacher_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>
<body>
 <?php include('navhead_user.php'); ?>

    <div class="container">
        <div class="row-fluid">

            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">
                        <li class="nav-header">Links</li>
                        <li   class="active">
                            <a href="teacher_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li>
                            <a href="teacher_class.php"><i class="icon-group icon-large"></i>&nbsp;Class
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="teacher_subject.php"><i class="icon-file-alt icon-large"></i>&nbsp;Subjects
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="students.php"><i class="icon-group icon-large"></i>&nbsp;Students
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
						 <li>
                            <a href="report.php"><i class="icon-group icon-large"></i>&nbsp;History
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>


                    </ul>
                </div>

            </div>

            <div class="span9">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Head Up!</strong>&nbsp;Learners College E-Learning Site.
                </div>
               
                </div>
                <!-- end slider -->
 
<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
} 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}
</script>
				
	<table id="contentbox">
		<tr>
			<td id="content">
				
				<div id="report">
				Select category:
				<select name="portal" id="cboOptions" onChange="showDiv('div',this)">
					<option value="1">...</option>
					<option value="2">Daily report</option>
					<option value="3">Monthly report</option>
				</select>
				<br /><br />
						  
				<div id="div1" style="display:none;"></div>	
				<div id="div2" style="display:none;">
					<form action="file_report2.php" method="post" >
						Daily report: 
						<select name="masterfile">
							<option value="">...</option>
							<option value="">Files</option>
						</select>&nbsp;&nbsp;&nbsp;
						Date: <input name="dayto" size="24px"  type="text" class="tcal" />
						<input name="" type="submit" style="cursor:pointer;" value="Print Report" />
					</form>
				</div>
				
				<div id="div3" style="display:none;">
					<form action="file_report.php" method="post" >
						Monthly report: 
						<select name="masterfile">
							<option value="">...</option>
							<option value="">Files</option>
						</select>&nbsp;&nbsp;&nbsp;
						From: <input name="dayfrom" size="24px"  type="text" class="tcal" />&nbsp;&nbsp;
						To: <input name="dayto" size="24px"  type="text" class="tcal" />
						<input name="" type="submit" style="cursor:pointer;" value="Print Report" />
					</form>
				</div>
				
				</div>
			</td>
		</tr>
	</table>
	 </div>

     
        <?php include('footer.php'); ?>
    
</div>
</div>






</body>
</html>
						
      