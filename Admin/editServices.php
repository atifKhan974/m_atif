<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Your Services</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body >
    
<?php
    include ('config/dbconn.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $select_query = "SELECT * FROM `services` WHERE id='$id'";
        $select_query_run  = mysqli_query($conn, $select_query);
 
        
        if(mysqli_num_rows($select_query_run) >0){
            foreach($select_query_run as $row){
                if($id == $row["Id"]){
                    $service = $row["service"];
                    $totalProjects = $row["totalProjects"];

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
                    <h4 class="text-center">Edit Your Service</h4>
                </div>
                <div class="card-body">
                    <form action="editServiceCode.php" method = "POST" >
                        <input type="hidden" name="service_id" value="<?php echo $id; ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Service Title</label>
                            <select class="form-select" aria-label="Default select example" name="service">
                                <option selected>Graphic Designing</option>
                                <option value="1">Website Development</option>
                                <option value="2">Android Development</option>
                                <option value="3">Database</option>
                                <option value="4">Programming</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Total Projects</label>
                            <input type="number" name="totalProjects" class="form-control" id="projects" value="<?php
                             echo $totalProjects; ?>">
                        </div>
                        
                        <button type="submit" id="registerBtn" class="btn btn-primary" name="editService">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/login_footer.php');
?>

