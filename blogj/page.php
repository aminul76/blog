<?php include_once 'inc/header.php'; ?>



<?php
if (!isset($_GET['pageid']) || $_GET['pageid'] == null){
    header('Location:404.php');
} else {
    $id = $_GET['pageid'];
}
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

			<?php
            $query = "SELECT * FROM tbl_page WHERE id='$id'";
            $pagedata = $db->select($query);
            
            if($pagedata){
            	while ($result = $pagedata->fetch_assoc()){

            ?>
			<div class="about">
				<h2><?php echo $result['name'];?></h2>
	
				<?php echo $result['body'];?>
	</div>

<?php } } else {
	header('Location:404.php');
} ?>

		</div>
		<?php include_once 'inc/sidebar.php'; ?>
	</div>

<?php include_once 'inc/footer.php'; ?>