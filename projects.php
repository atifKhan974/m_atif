<?php
    include ('Admin/config/dbconn.php');
    include ('includes/head_and_nav.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $project_select_query = "SELECT * FROM `projects`";
        $project_select_query_run = mysqli_query($conn, $project_select_query);
        // $projects_row =  mysqli_fetch_row($project_select_query_run);

    }
?>

    <header class="banner">
        <div class="bg">
            <?php
            if(mysqli_num_rows($project_select_query_run) >0){
                foreach($project_select_query_run as $row){
                    if($id == $row["Id"]){
                        $path = "Admin/".$row['project_img']."";
                        ?>
                        <img src="<?php echo $path; ?>" alt="" class="bgImage">
                        <?php
                    }
                }
            }
            ?>
        </div>
    </header>

    <section class="projectContent">
        <div class="container">
            <h1>About Project</h1>
            <?php
            if(mysqli_num_rows($project_select_query_run) >0){
                foreach($project_select_query_run as $row){
                    if($id == $row["Id"]){
                        ?>
                        <h3 class="color-secondary subHeading" id="title"><?php echo $row['title']; ?></h3>
                        <?php
                    }
                }
            }
            ?>
            <h3 class="subHeading">Description</h3>
            <?php
            if(mysqli_num_rows($project_select_query_run) >0){
                foreach($project_select_query_run as $row){
                    if($id == $row["Id"]){
                        ?>
                        <p class="content" id="content"><?php echo $row['description']; ?></p>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </section>

    <?php
    include ('includes/footer.php');
    ?>