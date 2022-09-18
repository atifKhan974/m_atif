<?php
    if(isset($_POST['updateService'])){
        $serviceHeading = $_POST['serviceHeading'];
        $serviceContent = $_POST['serviceContent'];

        $update_service_query = "UPDATE `serviceheadings` SET `heading` = '$serviceHeading', `content` = '$serviceContent' WHERE `serviceheadings`.`Id` = 1";

        $update_service_query_run = mysqli_query($conn,$update_service_query);

        if($update_service_query_run){
            ?>
            <script>
                alert("Services Heading Content updated successfully!");
            </script>
            <?php
        }
    }

?>

<?php
    $select_query = "SELECT * FROM `serviceHeadings`";
    $select_query_run = mysqli_query($conn, $select_query);
    $row =  mysqli_fetch_row($select_query_run);
?>


<div id="services" style="background-color: #f7f7f7;" class="mt-2 p-3">
    <h4>Services Section</h4>
    <form action="./main.php" method="post">
        <div class="form-group my-3">
            <label for="">Heading of Services Section</label>
            <input type="text" class="form-control" id="heading" name="serviceHeading" placeholder="max 10 characters"
            value = "<?php echo $row[1]; ?>">
        </div>
        <div class="form-group my-3">
            <label for="">Content of Services Section</label>
            <input type="text" class="form-control" id="heading" name="serviceContent" placeholder="max 25 characters"
            value = "<?php echo $row[2]; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary my-2 float-end" name="updateService">Update</button>
    </form>
</div>