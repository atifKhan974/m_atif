<?php
    $gallery_select_query = "SELECT * FROM `gallery`";
    $gallery_select_query_run = mysqli_query($conn, $gallery_select_query);
    $row =  mysqli_fetch_row($gallery_select_query_run);
?>

<section class="gallery" id="gallery">
            <div class="container animGallary">
                <p class="text-center color-secondary">GALLERY</p>
                <h1 class="text-center"><?php echo $row[1]; ?></h1>
                <p class="text-center padding-inline"> <?php echo $row[2]; ?></p>
                <div class="grid">
                <?php 
                    $project_select_query = "SELECT * FROM `projects`";
                    $project_select_query_run = mysqli_query($conn, $project_select_query);
                    $projects_row =  mysqli_fetch_row($project_select_query_run);
                    $project_image = "admin/".$projects_row[3]."";

                    if(mysqli_num_rows($project_select_query_run) >0){
                        foreach($project_select_query_run as $row){
                            $path = "Admin/".$row['project_img']."";
                            ?>
                                <div class="imgDiv ">
                                    <img src="<?php echo $path; ?>" class="image" >
                                    <div class="imgOverlay">
                                        <a href="./projects.php?id=<?php echo $row["Id"]; ?>" class="projectLink" target="_blank">View Project</a>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
                    
                    
                    
                </div>
            </div>
        </section>