<?php 
include_once 'inc/header.php'; 


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$fname = $format->validate($_POST['firstname']);
	$lname = $format->validate($_POST['lastname']);
	$email = $format->validate($_POST['email']);
	$body = $format->validate($_POST['body']);

	$fname = mysqli_real_escape_string($db->link, $fname);
	$lname = mysqli_real_escape_string($db->link, $lname);
	$email = mysqli_real_escape_string($db->link, $email);
	$body = mysqli_real_escape_string($db->link, $body);

	$error = "";

	if(empty($fname)){
		$error= "<span>First name must not be empty!!</span>";
	} elseif(empty($lname)){
		$error = "<span>last name must not be empty!!</span>";
	} elseif(empty($email)){
		$error = "<span>Please enter your email</span>";
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error = "<span>Invalid email</span>";
	} elseif(empty($body)){
		$error = "<span>Field must not be empty!!</span>";
	} else { 
		$query = "INSERT INTO `tbl_contact` (`firstname`, `lastname`, `email`, `body`) VALUES ('$fname', '$lname', '$email', '$body')";
		$msg = $db->insert($query);
		if($msg){
			$msg = "<span class='success'>Message sent successfully</span>";
		} else {
			$error = "<span class='success'>Error!! Message not sent!!</span>";
		}
	}
	
}

?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>
				<?php 
				  if(isset($error)){
					  echo "<span style='color:red'> $error </span>";
				  } 
				  if(isset($msg)){
					echo "<span style='color:green'> $msg </span>";
				  }
				?>
					
			<form action="" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" />
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname"  />
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="email" name="email" />
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Send"/>
					</td>
				</tr>
		</table>

	<form>				
 </div>

		</div>
		<?php include_once 'inc/sidebar.php'; ?>
	</div>

<?php include_once 'inc/footer.php'; ?>