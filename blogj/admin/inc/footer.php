<?php

    $query = "SELECT * FROM tbl_copyright WHERE id = '1'";
    $copyright = $db->select($query);

    if ($copyright) {
    while ($result = $copyright->fetch_assoc()) {
?>


<div class="clear">
</div>
</div>
<div class="clear">
</div>
<div id="site_info">
	<p>
		&copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
	</p>
</div>

<?php } } ?>


<!-- BEGIN: load jquery -->
<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
        <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
        <!-- END: load jquery -->
        <!--jQuery Date Picker-->
        <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.progressbar.min.js" type="text/javascript"></script>
        <!-- jQuery dialog related-->
        <script src="js/jquery-ui/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.draggable.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.position.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.ui.dialog.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.effects.blind.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui/jquery.effects.explode.min.js" type="text/javascript"></script>
        <!-- jQuery dialog end here-->
        <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
        <!--Fancy Button-->
        <script src="js/fancy-button/fancy-button.js" type="text/javascript"></script>
        <script src="js/setup.js" type="text/javascript"></script>
        <!-- Load TinyMCE -->
        <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
</body>
</html>
