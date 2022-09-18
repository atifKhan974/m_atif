

<?php
    include ('config/dbconn.php');


if(isset($_POST['editService'])){
    $newService = $_POST['service'];
    $newTotalProjects = $_POST['totalProjects'];
    $service_id = $_POST['service_id'];

    $update_service_query = "UPDATE `services` SET `service` = 'Programming', `totalProjects` = '$newTotalProjects', `icon` = 'fa-solid fa-code' WHERE `services`.`Id` = $service_id";
    $update_service_query_run = mysqli_query($conn,$update_service_query);
    
    if($update_service_query_run){
        header("Location: main.php");
        ?>
        <script>
            alert("Service Updated Successfully!");
        </script>
        <?php
    }
    

    
}
else{
    ?>
    <script>
        alert("Not ISSET");
    </script>
    <?php 
}
?>