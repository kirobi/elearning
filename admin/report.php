<?php  
include('session.php');
include('header.php');
include('header2.php');
 ?>
<body>
     <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
    
							<div id="element" class="hero-body">
								<table class="users-table">


									<div class="demo_jui">


										<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
											<thead>
												<tr>
												<th>Date/Time</th>
												<th>Action</th>
												<th>Data</th>
												<th>User</th>
												</tr>
											</thead>
											<tbody>

												<?php 
													$history_query=mysql_query("select * from history");
													while($row=mysql_fetch_array($history_query)){  
												?>

													<tr class="">
														<td><?php echo $row['date']; ?></td>
														<td><?php echo $row['action']; ?></td>
														<td><?php echo $row['data']?></td>
														<td><?php echo $row['user'] ?></td>
													</tr>
														<?php }?>
											</tbody>
										</table>


	
											
		
		
		                            </div>

							</div>
						</div>
							<?php include('footer.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>