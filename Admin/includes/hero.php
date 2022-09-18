<?php
    if(isset($_POST['upload_logo'])){
        $logoImg = $_FILES['logoImg']['name'];

        $target1 = "images/". $logoImg;


        $update_hero_query = "UPDATE `hero` SET `logoImg` = '$target1' WHERE `hero`.`Id` = 1";

        $update_hero_query_run = mysqli_query($conn, $update_hero_query);
        

        if($update_hero_query_run){
            move_uploaded_file($_FILES["logoImg"]["tmp_name"],$target1);
            ?>
                <script>
                    alert("Logo Updated Successsfully");
                </script>        
            <?php    
        }
    }
?>
<?php
    if(isset($_POST['upload_heroImg'])){
        $heroImg = $_FILES['heroImg']['name'];

        $target2 = "images/". $heroImg;


        $update_hero_query = "UPDATE `hero` SET `heroImg` = '$target2' WHERE `hero`.`Id` = 1";

        $update_hero_query_run = mysqli_query($conn, $update_hero_query);
        

        if($update_hero_query_run){
            move_uploaded_file($_FILES["heroImg"]["tmp_name"],$target2);
            ?>
                <script>
                    alert("Hero Image Updated Successsfully");
                </script>        
            <?php    
        }
    }
?>
<?php
    if(isset($_POST['upload_hero'])){
        $name = $_POST['name'];
        $profession = $_POST['profession'];
        $heroContent = $_POST['heroContent'];


        $update_hero_query = "UPDATE `hero` SET `name` = '$name', `profession` = '$profession', `heroContent` = '$heroContent' WHERE `hero`.`Id` = 1";

        $update_hero_query_run = mysqli_query($conn, $update_hero_query);
        

        if($update_hero_query_run){
            ?>
                <script>
                    alert("Hero Section Updated Successsfully");
                </script>        
            <?php    
        }
    }
?>

<?php
    $select_query = "SELECT * FROM `hero`";
    $select_query_run = mysqli_query($conn, $select_query);
    $row =  mysqli_fetch_row($select_query_run);
?>


<div id="hero" style="background-color: #f7f7f7;" class="p-3 mt-2">
    <h4>Hero Section</h4>
    <form action="./main.php" enctype="multipart/form-data" method="post">
        <div class="form-group my-3">
            <label for="">Logo (80 x 80) - PNG Image</label>
            <br>
            <input type="file" name="logoImg" class="form-control-file" id="logo" accept=".png" required>
        </div>
        <div class="form-group">
            <img src="<?php echo $row[1]; ?>" alt="logo" width="100" class="border border-2">
            <button type="submit" name="upload_logo" class="btn btn-primary my-2 float-end">Update</button>
            <hr class="mt-5">
        </div>
    </form>

    <form action="./main.php" enctype="multipart/form-data" method="post">
        <div class="form-group my-3">
            <label for="">Hero Image (350 x 500) - PNG Image</label>
            <br>
            <input type="file" name="heroImg" class="form-control-file" id="heroImg" accept=".png" required>
        </div>
        <div class="form-group">
            <img src="<?php echo $row[2]; ?>" alt="hero_image" width="100" class="border border-2">
            <button type="submit" name="upload_heroImg" class="btn btn-primary my-2 float-end">Update</button>
        <hr class="mt-5">
        </div>
    </form>

    <form action="./main.php" enctype="multipart/form-data" method="post">
        <div class="form-group my-3">
            <label for="">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Content Here"  value ="<?php echo $row[3]; ?>">
        </div>
        <div class="form-group my-3">
            <label for="">Your Profession / Service</label>
            <input type="text" name="profession" class="form-control" id="profession" placeholder="Profession Here"  value ="<?php echo $row[4]; ?>">
        </div>
        <div class="form-group my-3">
            <label for="">Hero Content</label>
            <textarea class="form-control" id="content" rows="3" name="heroContent"
                placeholder="Less than 120 characters"  value =""><?php echo $row[5]; ?></textarea>
        </div>
            <button type="submit" name="upload_hero" class="btn btn-primary my-2 float-end">Update</button>
    </form>
</div>