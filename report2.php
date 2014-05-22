<?php 
include("header.php");
include("forms/config.php");
?>
<section id="page"><font color="#FFFFFF"></font>
<!--<header id="pageheader" class="homeheader">
<h1 class="sitedescription"><h2>&nbsp;</h2></h1>
</header>-->
<article class="post">
<header class="postheader">
<div class="clear"></div>
<div class="clear"></div>
<h2><p align="center"><u>THE GENERAL REPORT</u></p></h2><h3>&nbsp;</h3>
<h3><p align="center">OFFICE OF THE REGISTRAR</p></h3>
<a href="#"></a></p>
<!--<header>-->
<?php
$resulta=mysql_query("select*from birthc");
$num_rows=mysql_num_rows($resulta);
$resultd=mysql_query("select*from deathc");
$num_row=mysql_num_rows($resultd);
$resultm=mysql_query("select*from birthc where sex='M'");
$num_rowm=mysql_num_rows($resultm)

?>
<h3><p align="center"><u>UPDATE REPORT ON THE DEATHs AND BIRTHs RECORDS</u></p></h3>
<h3><p align="center"><a href="dashboard.php"><b>&lt;&lt;BACK</b></a></h3>
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
<table width="800" cellspacing="5" cellpadding="1" border="1">

           <tr>
		   <td align="center" colspan="15"><h2>RECORD ON&nbsp&nbsp&nbsp<?php echo date("D.M.Y")?></h2></td></tr>
		   <td colspan="15"><strong><h3>ALL THE RECORDS SUMMARY</h3></strong></td></tr>
		   <tr>
		   <th Height="" colspan="2"><b>BIRTHS CERTS APPLIED</b></th>
		   <th><b>DEATH CERTIFICATES APPLIED</b></th>
		   <th colspan="3"><b>TOTAL CERTIFICATES</b></th>
		   <tr>
		   <th Height="" colspan="2"><?php echo $num_rows?></th>
		   <th><?php echo $num_row?></th>
		   <th><?php echo $num_row+$num_rows?></th>
		   <tr>
		   <td colspan="15"><strong><h3>BIRTH CERTIFICATES APPLICATIONS</h3></strong></td></tr>
		   <tr>
		   <th colspan="2"><b>TOTAL MALE APPLICATIONS</b></th>
		   <th colspan="2"><b>TOTAL FEMALE APPLICATIONS</b></th></tr>
		   <tr>
		   <td colspan="2"><b><?php echo $num_rowm ?></td>
		 <?php  $result=mysql_query("select*from birthc where sex='F'");
                $num_rowf=mysql_num_rows($result)?>
		        <td colspan="2"><?php echo $num_rowf ?></th></tr>
				<tr>
		   <td colspan="15"><strong><h3>DEATH CERTIFICATES APPLICATIONS</h3></strong></td></tr>
		   <tr>
		   <th colspan="2"><b>TOTAL MALE APPLICATIONS</b></th>
		   <th colspan="2"><b>TOTAL FEMALE APPLICATIONS</b></th></tr>
		   <tr>
		   <td colspan="2"><?php echo $num_rowf ?></th>
		   <td colspan="2"><?php echo $num_rowf ?></th></tr>
				<tr>
				<th colspan="15" width="20"><strong><h3>STATISTICAL COMPARISON OF APPLICATION<strong><h3></th></tr>
				<tr>
				<th colspan="2"><b>Rate of birth application</b></th>
		        <th colspan="3"><b>Rate of death application</b></th></tr>
				<?php $rate=$num_row+$num_rows?>
				<tr>
				<th colspan="2"><?php echo $num_rows/$rate*100?>%</th>
				<th colspan="2"><?php echo $num_row/$rate*100?>%</td>
                </tr>
				<tr>
				<tr><td colspan="15" size=""><h3>NUMERICAL REPRESENTATION OF DEATH CAUSES</h3></td></tr>
				
				<tr>
		         <th Height="" colspan="2"><b>Accident</b></th>
		         <th><b>Natural</b></th>
		         <th colspan="3">Uknown<b></b></th></tr>
				 <?php
				 $causea=mysql_query("select*from deathc where typeofdeath='Accidental'");
                 $num_rowa=mysql_num_rows($causea)?>
				 <?php 
				 $causen=mysql_query("select*from deathc where typeofdeath='Natural'");
                 $num_rown=mysql_num_rows($causen)?>
				 <?php 
				 $causeu=mysql_query("select*from deathc where typeofdeath='Uknown'");
                 $num_rowu=mysql_num_rows($causeu)?>
				 <tr>
				 <th Height="25" colspan="2"><?php echo $num_rowa ?></th>
		         <th><b></b><?php echo $num_rown ?></th>
		         <th colspan="3"><?php echo $num_rowu ?><b></b></th></tr>
				 <tr>
				 <?php
				 $causes=mysql_query("select*from deathc where typeofdeath='Sudden'");
                 $num_rowas=mysql_num_rows($causes)?>
				 <?php 
				 $causesu=mysql_query("select*from deathc where typeofdeath='Suicide'");
                 $num_rowsu=mysql_num_rows($causesu)?>
				 <?php 
				 $causev=mysql_query("select*from deathc where typeofdeath='Violence'");
                 $num_rowv=mysql_num_rows($causev)?>
				 <th Height="" colspan="2"><b>Sudden</b></th>
		         <th><b>Suicide</b></th>
		         <th colspan="3">Violence<b></b></th>
				 <tr>
				 <th Height="25" colspan="2"><b><?php echo $num_rowas ?></b></th>
		         <th><b></b><?php echo $num_rowsu ?></th>
		         <th colspan="3"><b><?php echo $num_rowv ?></b></th><tr>
				 <tr>
				 <?php 
				 $causeo=mysql_query("select*from deathc where typeofdeath='Other'");
                 $num_rowo=mysql_num_rows($causeo)?>
				 <th Height="" colspan="2"><b>Other(Diseases)</b></th></tr>
		         <tr><th><b><?php echo $num_rowo ?></b></th>
				 </tr>
				 
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
<?php include("footer.php"); ?>