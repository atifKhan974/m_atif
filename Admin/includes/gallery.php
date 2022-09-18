<?php
    if(isset($_POST['updateGallery'])){
        $gallHeading = $_POST['gallHeading'];
        $gallContent = $_POST['gallContent'];

        $update_gallery_query = "UPDATE `gallery` SET `gallHeading` = '$gallHeading', `galContent` = '$gallContent' WHERE `gallery`.`Id` = 1";

        $update_gallery_query_run = mysqli_query($conn,$update_gallery_query);

        if($update_gallery_query_run){
            ?>
            <script>
                alert("Gallery Heading Content updated successfully!");
            </script>
            <?php
        }
    }

?>

<?php
    $select_query = "SELECT * FROM `gallery`";
    $select_query_run = mysqli_query($conn, $select_query);
    $row =  mysqli_fetch_row($select_query_run);
?>


<div id="gallery" style="background-color: #f7f7f7;" class="mt-2 p-3">
    <h4>Gallery Section</h4>
    <form action="./main.php" method="post">
        <div class="form-group my-3">
            <label for="">Heading of Gallery Section</label>
            <input type="text" class="form-control" id="heading" name="gallHeading" placeholder="max 10 characters"
            value = "<?php echo $row[1]; ?>">
        </div>
        <div class="form-group my-3">
            <label for="">Content of Gallery Section</label>
            <input type="text" class="form-control" id="heading" name="gallContent" placeholder="max 25 characters"
            value = "<?php echo $row[2]; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary my-2 float-end" name="updateGallery">Update</button>
    </form>
</div>