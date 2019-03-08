
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
        if (!isset($_GET['msgid']) || $_GET['msgid'] == null){
            echo"<script>window.location = 'inbox.php';</script>";
        } else {
            $id = $_GET['msgid'];
        }
        ?>
 

<div class="grid_10">

    <div class="box round first grid">
        <h2>View Message</h2>
        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   echo"<script>window.location = 'inbox.php';</script>";
}
?> 
        <div class="block">
        <form action="" method="post">
        <?php
            $query = "SELECT * FROM tbl_contact WHERE id='$id'";
            $msg = $db->select($query);
            while ($result = $msg->fetch_assoc()) {
        ?>
        <table class="form">
            <tr>
                <td><label>Name</label></td>
                <td>
                    <input type="text" value="<?php echo $result['firstname'] ." ". $result['lastname'];?>" class="medium" />
                </td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td>
                    <input type="text"  value="<?php echo $result['email'];?>" class="medium" />
                </td>
            </tr>
            <tr>
                <td><label>Date</label></td>
                <td>
                    <input type="text"  value="<?php echo $fm->dateFormat($result['date']); ?>" class="medium" />
                </td>
            </tr>            
            <tr>
                <td>
                    <label>Message</label>
                </td>
                <td>
                    <textarea class="tinymce" name="body"><?php echo $result['body'];?></textarea>
                </td>
            </tr>
           
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Ok" />
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


