<?php
include ('config/dbconn.php');
if(isset($_POST['editProject'])){
    $newTitle = $_POST['title'];
    $newDescription = $_POST['description'];
    $project_id = $_POST['project_id'];

    $edit_project_query = "UPDATE `projects` SET `title` = '$newTitle', `description` = '$newDescription' WHERE `projects`.`Id` = '$project_id'";

    $edit_project_query_run = mysqli_query($conn, $edit_project_query);


    if($edit_project_query_run){
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