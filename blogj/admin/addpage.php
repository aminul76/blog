
<?php include_once  'inc/header.php'?>
<?php include_once  'inc/sidebar.php'?>
<div class="grid_10">

    <div class="box round first grid">
        <h2>Add New Page</h2>
        <div class="block">
        
        <form action="addpage.php" method="post">

<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $name  = mysqli_real_escape_string($db->link,  $_POST['name']);
    $body   = mysqli_real_escape_string($db->link, $_POST['body']);
    
    if ($name == "" || $body == ""){
	    echo "<span class='error'>Field must not be empty !!  </span>";
    } else {
  
        $query = "INSERT INTO tbl_page (name, body)
                VALUES ('$name' ,'$body')";

        $inserted_rows = $db->insert($query);

        if ($inserted_rows){
	        echo "<span class='error'>Data inserted successfully </span>";
        } else {
	        echo "<span class='error'>data not added successfully</span>";
        }
    }
 }
?>

        <table class="form">

            <tr>
                <td><label>Page Name</label></td>
                <td>
                    <input type="text" name="name"  class="medium" />
                </td>
            </tr>

            
            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Content</label>
                </td>
                <td>
                    <textarea class="tinymce" name="body"></textarea>
                </td>
            </tr>
           
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Save" />
                </td>
            </tr>
        </table>
            </form>
        </div>
    </div>
</div>


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
        <script type="text/javascript">
            $(document).ready(function () {
                setupTinyMCE();
                setDatePicker('date-picker');
                $('input[type="checkbox"]').fancybutton();
                $('input[type="radio"]').fancybutton();
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                setupLeftMenu();
                setSidebarHeight();
            });
        </script>
        <!-- /TinyMCE -->



<?php include_once  'inc/footer.php'; ?>


