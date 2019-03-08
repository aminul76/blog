<?php include_once  'inc/header.php'; ?>
<?php include_once  'inc/sidebar.php'; ?>
<?php 

	$query = "SELECT * FROM tbl_contact";
	$contactData = $db->select($query);
	if($contactData){
		while($results = $contactData->fetch_assoc()){

		}
	}


?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$serial = 1;

					$query = "SELECT * FROM tbl_contact WHERE status ='0' ORDER BY id DESC";
					$contactData = $db->select($query);
					if($contactData){
						while($results = $contactData->fetch_assoc()) { ?>
							<tr class="odd gradeX">
							<td><?php echo $serial; ?></td>
							<td><?php echo $results['firstname'] ." ". $results['lastname'] ;?></td>
							<td><?php echo $results['email']; ?></td>
							<td><?php echo $fm->textShort($results['body'], 30); ?></td>
							<td><?php echo $fm->dateFormat($results['date']); ?></td>
							<td>
								<a href="viewmsg.php?msgid=<?php echo $results['id'];?>">View</a> || 
								<a href="replymsg.php?msgid=<?php echo $results['id'];?>">Reply</a> ||
								<a href="?id=<?php echo $results['id'];?>">Seen</a>
							</td>
						</tr>
						
					<?php		
					$serial++; 
						}
				
					} 


				?>
			
					</tbody>
				</table>
               </div>
            </div> <!-- / End of Inbox -->


	<!-- Seen inbox section -->
			<div class="box round first grid">
                <h2>Seen Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$serial = 1;

					$query = "SELECT * FROM tbl_contact WHERE status ='0' ORDER BY id DESC";
					$contactData = $db->select($query);
					if($contactData){
						while($results = $contactData->fetch_assoc()) { ?>
							<tr class="odd gradeX">
							<td><?php echo $serial; ?></td>
							<td><?php echo $results['firstname'] ." ". $results['lastname'] ;?></td>
							<td><?php echo $results['email']; ?></td>
							<td><?php echo $fm->textShort($results['body'], 30); ?></td>
							<td><?php echo $fm->dateFormat($results['date']); ?></td>
							<td>
								<a href="contact.php?id=<?php echo $results['id'];?>">Edit</a> || 
								<a href="delmsg.php?id=<?php echo $results['id'];?>">Delete</a>
							</td>
						</tr>
						
					<?php		
					$serial++; 
						}
				
					} 


				?>
						
						
						
					</tbody>
				</table>
               </div>
            </div>
        </div>
        <script type="text/javascript">

            $(document).ready(function () {
                setupLeftMenu();

                $('.datatable').dataTable();
                setSidebarHeight();


            });
        </script>


        <?php include_once 'inc/footer.php' ;?>