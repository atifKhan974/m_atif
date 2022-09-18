<?php
    if(isset($_POST['add_project'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $project_img = $_FILES['project_img']['name'];

        $target = "images/".$project_img;

        $add_project_query = "INSERT INTO `projects` (`title`, `description`, `project_img`) VALUES ('$title', '$description', '$target');";

        $add_project_query_run = mysqli_query($conn,$add_project_query);

        if($add_project_query_run){
            move_uploaded_file($_FILES["project_img"]["tmp_name"],$target);
            ?>
            <script>
                alert("Project Added Successfully!")
            </script>
            <?php
        }
    }
?>



<!-- Projects -->
<section class="d-none" id="projectSection">
    
    <div class="row">
        <h2 class="col-lg-10">Projects Details</h2>
        <button class="btn btn-primary btn-sm col-lg-1 addNewBtn">Add New <i class="fa fa-plus" aria-hidden="true"></i></button>
    </div>
    <hr>
    <!-- add new projects page  -->
    <div class="row m-3 p-2 rounded d-none addNewProject" style="background-color: #f7f7f7;">
        <form action="./main.php" method = "POST" enctype="multipart/form-data">
            <div class="form-group my-3">
                <label for="">Title of Project</label>
                <input type="text" class="form-control" id="content" placeholder="Title Here" name="title">
            </div>
            <div class="form-group my-3">
                <label for="">Description of Project</label>
                <textarea class="form-control" id="" rows="5" name="description" placeholder="Project Description"></textarea>
            </div>

            <div class="form-group my-3">
                <label for="">Project Banner Image (350 x 170) </label><br>
                <input type="file" class="form-control-file" accept="image/*" id="chooseFile" name="project_img">
            </div>

            <button type="submit" class="btn btn-primary" name="add_project">Add</button>
        </form>
    </div>

    <!-- Recent Projects  -->
    <div class="viewProjects d-block">
        <h3>Recent Projects</h3>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>

                        <th scope="col" class="col-sm-1">S.No</th>
                        <th scope="col" class="col-sm-2">Title</th>
                        <th scope="col" class="col-sm-5">Description</th>
                        <th scope="col" class="col-sm-2">Image</th>
                        <th scope="col" class="col-sm-5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query = "SELECT * FROM `projects`";
                    $select_query_run = mysqli_query($conn, $select_query);

                    $singleRow = mysqli_fetch_row($select_query_run);
                    
                    if(mysqli_num_rows($select_query_run) >0){
                        foreach($select_query_run as $row){
                            ?>
                            <tr>
                                <td scope='col'> <?php echo $row["Id"]; ?></td>
                                <td scope='col'> <?php echo $row["title"]; ?></td>
                                <td scope='col'> <?php echo $row["description"]; ?></td>
                                <td scope='col'> <?php echo $row["project_img"]; ?></td>
                                <td>
                                    <form action="./main.php?id=<?php echo $row["Id"]; ?>" method="post">
                                    <a class="btn btn-sm btn-primary" href="./editProject.php?id=<?php echo $row["Id"];?>" target="_blank" name="editProject" >Edit</a>
                                    <button class="btn btn-sm btn-danger" name="deleteProject">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <h5 class="bg-warning p-3">No Projects Exists</h5>
                            <?php
                    }
                    ?>
                    </tbody>    
            </table>
        </div>
    </div>

</section>

<?php
    if(isset($_POST['deleteProject'])){
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $delete_query = "DELETE FROM `projects` WHERE `projects`.`Id` = $id";
            $delete_query_run = mysqli_query($conn,$delete_query);
            
            if($delete_query_run){
                ?>
                <script>
                  alert('Record Deleted Successfully');
                </script>
                <?php
            }
            
        }
          
    }
?>

<script>
    let edit = document.querySelector("#editProject");

    edit.addEventListener("click",(e)=>{
        e.preventDefault();
        console.log(edit);
        
    })
</script>