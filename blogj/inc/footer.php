<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>


	<?php
	$query = "SELECT * FROM tbl_copyright WHERE id = '1'";
	$copyright = $db->select($query);
	if ($copyright) {
	while ($result = $copyright->fetch_assoc()) {
	?>

    <p>&copy <?php echo $result['copyright'];?> <?php date('Y'); ?></p>

<?php } }?>
	</div>


<?php
    $query = "SELECT * FROM tbl_social WHERE id = '1'";
    $social = $db->select($query);
    if ($social) {
        while ($result = $social->fetch_assoc()) {
?>
	<div class="fixedicon clear">
		<a href="<?php echo $result['facebook'];?>"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="<?php echo $result['twitter'];?>"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="<?php echo $result['linkedin'];?>"><img src="images/in.png" alt="LinkedIn"/></a>
		<a href="<?php echo $result['googleplus'];?>"><img src="images/gl.png" alt="GooglePlus"/></a>
	</div>
<?php } }?>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>