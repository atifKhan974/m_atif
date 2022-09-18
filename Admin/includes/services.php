<?php

    if(isset($_POST['add_services_btn'])){
        $selectedCategory = $_POST['category'];
        $numOfProjects = $_POST['totalProjects'];

        $select_service_query = "SELECT * FROM `services`";
        $select_service_query_run = mysqli_query($conn,$select_service_query);

        if(mysqli_num_rows($select_service_query_run) >= 3){
            ?>
            <script>
                alert("No more than 3 services can be added!");
            </script>
            <?php
        }
        else{
        switch ($selectedCategory) {
            case '0': // Graphic
                $insert_service_query = "INSERT INTO `services` (`service`, `totalProjects`, `icon`) VALUES ('Graphic Designing', '$numOfProjects', 'fa-solid fa-pen-nib')";
                $insert_service_query_run = mysqli_query($conn,$insert_service_query);
                
                if($insert_service_query_run){
                    ?>
                    <script>
                        alert("Service Added Successfully!");
                    </script>
                    <?php
                }
            case '1': // Website
                $insert_service_query = "INSERT INTO `services` (`service`, `totalProjects`, `icon`) VALUES ('Website Development', '$numOfProjects', 'fa-solid fa-earth-americas')";
                $insert_service_query_run = mysqli_query($conn,$insert_service_query);
                
                if($insert_service_query_run){
                    ?>
                    <script>
                        alert("Service Added Successfully!");
                    </script>
                    <?php
                }
            break;
            case '2': // Android
                $insert_service_query = "INSERT INTO `services` (`service`, `totalProjects`, `icon`) VALUES ('Android Development', '$numOfProjects', 'fa-brands fa-android')";
                $insert_service_query_run = mysqli_query($conn,$insert_service_query);
                
                if($insert_service_query_run){
                    ?>
                    <script>
                        alert("Service Added Successfully!");
                    </script>
                    <?php
                }
            break;
            case '3': // Database
                $insert_service_query = "INSERT INTO `services` (`service`, `totalProjects`, `icon`) VALUES ('Databases', '$numOfProjects', 'fa-sharp fa-solid fa-database')";
                $insert_service_query_run = mysqli_query($conn,$insert_service_query);
                
                if($insert_service_query_run){
                    ?>
                    <script>
                        alert("Service Added Successfully!");
                    </script>
                    <?php
                }
            break;
            case '4': // Programming
                $insert_service_query = "INSERT INTO `services` (`service`, `totalProjects`, `icon`) VALUES ('Programming', '$numOfProjects', 'fa-solid fa-code')";
                $insert_service_query_run = mysqli_query($conn,$insert_service_query);
                
                if($insert_service_query_run){
                    ?>
                    <script>
                        alert("Service Added Successfully!");
                    </script>
                    <?php
                }
            break;
            
            default:
                break;
        }
    }
            
    }
?>
<!-- PHP For delete service  -->
<?php
    if(isset($_POST['deleteService'])){
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $delete_query = "DELETE FROM `services` WHERE `services`.`Id` = $id";
            $delete_query_run = mysqli_query($conn,$delete_query);
            
            if($delete_query_run){
                ?>
                <script>
                  alert('Service Deleted Successfully');
                </script>
                <?php
            }
            
        }
    }
?>

<!-- Services Section -->
<section class="d-none" id="servicesSection">
    <div class="row"> 
        <h2 class="col-lg-10">Services Details</h2>
        <button class="btn btn-primary btn-sm col-lg-1 addNewServiceBtn">Add New <i class="fa fa-plus" aria-hidden="true"></i></button>
    </div>
    <hr>
    <!-- add new projects page  -->
    <div class="row m-3 p-2 rounded d-none addNewService" style="background-color: #f7f7f7;">
        <form action="./main.php" method = "POST" enctype="multipart/form-data">
            <div class="form-group my-3">
            <select class="form-select" aria-label="Default select example" name="category">
                <option selected>Graphic Designing</option>
                <option value="1">Website Development</option>
                <option value="2">Android Development</option>
                <option value="3">Database</option>
                <option value="4">Programming</option>
            </select>
            </div>
            <div class="form-group my-3">
                <label for="">Number of Projects</label>
                <input type="number" name="totalProjects" class="form-control" id="projects">
            </div>

            <button type="submit" class="btn btn-primary" name="add_services_btn">Add</button>
        </form>
    </div>

    <!-- Recent Services  -->
    <div class="viewServices d-block">
        <h3>Recent Services</h3>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>

                    <th scope="col" class="col-sm-2">S.No</th>
                        <th scope="col" class="col-sm-4">Service</th>
                        <th scope="col" class="col-sm-4">Projects</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query = "SELECT * FROM `services`";
                    $select_query_run = mysqli_query($conn, $select_query);

                    if(mysqli_num_rows($select_query_run) >0){
                        foreach($select_query_run as $row){
                            ?>
                            <tr>
                                <td scope='col'> <?php echo $row["Id"]; ?></td>
                                <td scope='col'> <?php echo $row["service"]; ?></td>
                                <td scope='col'> <?php echo $row["totalProjects"]; ?></td>
                                <td>
                                    <form action="./main.php?id=<?php echo $row["Id"]; ?>" method="post">
                                    <a class="btn btn-sm btn-primary" href="./editServices.php?id=<?php echo $row["Id"];?>" target="_blank" name="editService" >Edit</a>
                                    <button class="btn btn-sm btn-danger" name="deleteService">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <h5 class="bg-warning p-3">No Services Exists</h5>
                            <?php
                    }
                    ?>
                    </tbody>    
            </table>
        </div>
    </div>
</section>