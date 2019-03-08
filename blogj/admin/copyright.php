<?php include_once  'inc/header.php'?>
<?php include_once  'inc/sidebar.php'?>



<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $copyright = $_POST['copyright'];
        $link = $_POST['link'];
        

        $copyright = mysqli_real_escape_string($db->link, $copyright);
        $link = mysqli_real_escape_string($db->link, $link);
        

        if (
            $copyright == "" ||
            $link == "" ) {
            echo "<span class='error'>Field must not be empty !! </span>";
        } else {
            $query = "UPDATE tbl_copyright SET 
                      copyright = '$copyright',
                      link = '$link'
                      WHERE id = '1' ";
            $result = $db->update($query);
            if ($result) {
                echo "<span class='error'>Data Updated successfully </span>";
            } else {
                echo "<span class='error'>data not Updated successfully</span>";
            }
        }
    }    ?>

<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Copyright Text</h2>
        <div class="block copyblock">


 <?php
            $query = "SELECT * FROM tbl_copyright WHERE id = '1'";
            $copyright = $db->select($query);
            if ($copyright) {
                while ($results = $copyright->fetch_assoc()) {
                    ?>
            <form action="" method="post">
                <table class="form">
                    <tr>
                        <td>
                            <label>Copyright Note</label>
                        </td>
                        <td>
                            <input type="text" value="<?php echo $results['copyright'];?>" name="copyright" class="large" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Official Link</label>
                        </td>
                        <td>
                            <input type="text" value="<?php echo $results['link'];?>" name="link" class="large" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit" Value="Update" />
                        </td>
                    </tr>
                </table>

            </form>
        <?php } } ?>

        </div>
    </div>
</div>
<?php
include_once  'inc/footer.php';
