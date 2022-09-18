<!-- 
UPDATE `colors` SET `primary_200` = '#54545', `primary_400` = '#458454', `primary_600` = '#75878', `secondary` = '#45487' WHERE `colors`.`Id` = 1; -->

<?php
    if(isset($_POST['update_color'])){
        $p_200 = $_POST['p_200'];
        $p_400 = $_POST['p_400'];
        $p_600 = $_POST['p_600'];
        $sec = $_POST['sec'];

        $update_color_query = "UPDATE `colors` SET `primary_200` = '$p_200', `primary_400` = '$p_400', `primary_600` = '$p_600', `secondary` = '$sec' WHERE `colors`.`Id` = 1";

        $update_color_query_run = mysqli_query($conn, $update_color_query);

        if($update_color_query_run){
            ?>
            <script>
                alert("Updated Successsfully");
                alert("<?php echo $p_400; ?>");
                alert("<?php echo $p_600; ?>");
            </script>        
        <?php 
        }
    }
?>

<?php
    $select_color_query = "SELECT * FROM `colors`";
    $select_color_query_run  = mysqli_query($conn, $select_color_query);
    $color_row =  mysqli_fetch_row($select_color_query_run);

?>

<div id="color" style="background-color: #f7f7f7;" class="p-3">
    <form action="main.php" method="post">
        <h4>Color Selection</h4>
        <div class="form-group my-3">
            <label for="" class="form-label">Chose Primary Color-200</label>
            <div class="d-flex">
            <input type="color" class="form-control form-control-color" id="primaryColor"
                    value="<?php echo $color_row['1'] ?>" title="Choose your color">
                <input type="text" class="form-control" id="primaryColorInput" value="<?php echo $color_row['1'] ?>" name="p_200">
            </div>
            <label for="" class="form-label">Chose Primary Color-400</label>
            <div class="d-flex">
                <input type="color" class="form-control form-control-color" id="primaryColor_400"
                    value="<?php echo $color_row['2'] ?>" title="Choose your color">
                <input type="text" class="form-control" id="primaryColor_400_Input" value="<?php echo $color_row['2'] ?>" name="p_400">
            </div>
            <label for="" class="form-label">Chose Primary Color-600</label>
            <div class="d-flex">
                <input type="color" class="form-control form-control-color" id="primaryColor_600"
                    value="<?php echo $color_row['3'] ?>" title="Choose your color">
                <input type="text" class="form-control" id="primaryColor_600_Input" value="<?php echo $color_row['3'] ?>" name="p_600">
            </div>
        </div>
        <div class="form-group my-3">
            <label for="" class="form-label">Chose Secondary Color</label>
            <div class="d-flex">
                <input type="color" class="form-control form-control-color" id="secondaryColor"
                    value="<?php echo $color_row['4'] ?>" title="Choose your color">
                <input type="text" class="form-control" id="secondaryColorInput" value="<?php echo $color_row['4'] ?>" name="sec">
            </div>
        </div>
        
        <button type="submit" name="update_color" class="btn btn-primary my-2 float-end">Update</button>
    </form>
</div>



