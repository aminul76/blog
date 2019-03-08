
<?php include_once  'inc/header.php'?>
<?php include_once  'inc/sidebar.php'?>

<style>
    
  .deletepage {
    border: 1px solid #ddd;
    color: #444;
    cursor: pointer;
    font-size: 20px;
    padding: 2px 10px;
    background: #ddd;
    font-weight: normal;
}
</style>

<?php
if (!isset($_GET['pageid']) || $_GET['pageid'] == null){
    header('Location:index.php');
} else {
    $id = $_GET['pageid'];
}
?>


<div class="grid_10">

    <div class="box round first grid">
        <h2>Edit Page</h2>
        <div class="block">
        
        <form action="" method="post">

<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $name  = mysqli_real_escape_string($db->link,  $_POST['name']);
    $body   = mysqli_real_escape_string($db->link, $_POST['body']);
    
    if ($name == "" || $body == ""){
	    echo "<span class='error'>Field must not be empty !!  </span>";
    } else {
            $query = "UPDATE tbl_page
                      SET 
                     name = '$name',
                     body = '$body'
                     WHERE id ='$id'";

                $update_row = $db->update($query);

                if ($update_row) {
                    echo "<span class='success'>Page Updated Successfully !!  </span>";
                } else {
                    echo "<span class='error'> Error !! Page Not Updated !! </span>";
                }
    }
 }
?>



            <?php
            $query = "SELECT * FROM tbl_page WHERE id='$id'";
            $pagedata = $db->select($query);
            while ($result = $pagedata->fetch_assoc()){

            ?>

        <table class="form">

            <tr>
                <td><label>Page Name</label></td>
                <td>
                    <input type="text" name="name" value="<?php echo $result['name'];?>" class="medium" />
                </td>
            </tr>

            
            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Content</label>
                </td>
                <td>
                    <textarea class="tinymce" name="body">
                        <?php echo $result['body'];?>
                    </textarea>
                </td>
            </tr>
           
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Update" />
                    <span class="deletepage"><a onclick="return confirm('are you sure to delete this Page? ')" href="deletepage.php?pageid=<?php echo $result['id'];?>">Delete Page</a></span>
                </td>
            </tr>
        </table>
            </form>

        <?php }  ?>
        </div>
    </div>
</div>


        
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


