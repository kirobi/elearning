<?php
include('header.php');
include('session.php');
include('header3.php');


$user_query = mysql_query("select * from teacher where teacher_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>
<body>
<div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>

            <div class="container">

                <div class="row-fluid">

                     <div class="span12">
 
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
					<option value="2">Specific Date report</option>
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
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>





</body>
						
      