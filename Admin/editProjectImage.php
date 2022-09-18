<?php
include ('config/dbconn.php');

if(isset($_POST['editProjectImage'])){
    $newImg = $_FILES['project_img']['name'];
    $project_id = $_POST['projectImage_id'];
    $target =  "images/". $newImg;

    $edit_project_query = "UPDATE `projects` SET `project_img` = '$target' WHERE `projects`.`Id` = '$project_id'";

    $edit_project_query_run = mysqli_query($conn, $edit_project_query);


    if($edit_project_query_run){
        move_uploaded_file($_FILES["project_img"]["tmp_name"],$target);
        header("Location: main.php");
        ?>
            <script>
                alert("Project has been Updated Successsfully");
            </script>        
        <?php    
    }
    else{
        ?>
            <script>
                alert("Project has not been Updated Successsfully");
            </script>        
        <?php 
    }
    
}
?>