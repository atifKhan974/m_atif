<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Your Project</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body >
    
<?php
    include ('config/dbconn.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $select_query = "SELECT * FROM `projects` WHERE id='$id'";
        $select_query_run  = mysqli_query($conn, $select_query);
 
        
        if(mysqli_num_rows($select_query_run) >0){
            foreach($select_query_run as $row){
                if($id == $row["Id"]){
                    $proTitle = $row["title"];
                    $proDesc = $row["description"];
                    $proImg = $row["project_img"];
                }
            }
        }
    }




?>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow rounded">
                <div class="card-header">
                    <h4 class="text-center">Edit Your Project</h4>
                </div>
                <div class="card-body">
                    <form action="editProjectCode.php" method = "POST" enctype="multipart/form-data">
                        <input type="hidden" name="project_id" value="<?php echo $id; ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Project Title</label>
                            <input type="text" class="form-control" id="title" name="title" required value="<?php echo $proTitle; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Project Description</label>
                            <textarea class="form-control" id="" rows="5" name="description" required ><?php echo $proDesc; ?></textarea>

                            <button type="submit" id="registerBtn" class="btn btn-primary mt-2" name="editProject">Update</button>
                        </div>
                    </form>

                    <form action="editProjectImage.php" method = "POST" enctype="multipart/form-data">
                    <input type="hidden" name="projectImage_id" value="<?php echo $id; ?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Project Image</label>
                            <input type="file" class="form-control" id="image" name="project_img" required>
                            <img src="<?php echo $proImg; ?>" alt="project Image" width="150" class="border border-3 m-2">
                            <button type="submit" id="registerBtn" class="btn btn-primary mt-2 d-block" name="editProjectImage">Update</button>
                            
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/login_footer.php');
?>