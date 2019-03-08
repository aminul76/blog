<?php include_once 'inc/header.php';?>
<?php include_once 'inc/sidebar.php';?>
<div class="grid_10">

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fb = $_POST['facebook'];
        $tw = $_POST['twitter'];
        $ln = $_POST['linkedin'];
        $gp = $_POST['googleplus'];

        $fb = mysqli_real_escape_string($db->link, $fb);
        $tw = mysqli_real_escape_string($db->link, $tw);
        $ln = mysqli_real_escape_string($db->link, $ln);
        $gp = mysqli_real_escape_string($db->link, $gp);

        if (
            $fb == "" ||
            $tw == "" ||
            $ln == "" ||
            $gp == "") {
            echo "<span class='error'>Field must not be empty !! </span>";
        } else {
            $query = "UPDATE tbl_social SET 
                      facebook = '$fb',
                      twitter = '$tw',
                      linkedin = '$ln',
                      googleplus = '$gp'
                      WHERE id = '1' ";
            $result = $db->update($query);
            if ($result) {
                echo "<span class='error'>Data Updated successfully </span>";
            } else {
                echo "<span class='error'>data not Updated successfully</span>";
            }
        }
    }    ?>





    <div class="box round first grid">
        <h2>Update Social Media</h2>

        <?php
            $query = "SELECT * FROM tbl_social WHERE id = '1'";
            $socialmedia = $db->select($query);
            if ($socialmedia) {
                while ($results = $socialmedia->fetch_assoc()) {
                    ?>

        <div class="block">
            <form action="social.php" method="post">
                <table class="form">
                    <tr>
                        <td>
                            <label>Facebook</label>
                        </td>
                        <td>
                            <input type="text" name="facebook" value="<?php echo $results['facebook']; ?>"
                                class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Twitter</label>
                        </td>
                        <td>
                            <input type="text" name="twitter" value="<?php echo $results['twitter']; ?>"
                                class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>LinkedIn</label>
                        </td>
                        <td>
                            <input type="text" name="linkedin" value="<?php echo $results['linkedin']; ?>"
                                class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Google Plus</label>
                        </td>
                        <td>
                            <input type="text" name="googleplus" value="<?php echo $results['googleplus']; ?>"
                                class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Update" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <?php
                }
            }
            
            ?>
    </div>
</div>
<?php include_once 'inc/footer.php'; ?>
