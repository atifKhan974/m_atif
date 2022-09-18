<?php
    $about_select_query = "SELECT * FROM `about`";
    $about_select_query = mysqli_query($conn, $about_select_query);
    $row =  mysqli_fetch_row($about_select_query);

    
        
    $doB_res = explode('-',$row[1]);
    $date = $doB_res[2];
    $month = $doB_res[1];
    $year = $doB_res[0];

    $newDoB = $date . "-" . $month . "-" . $year;
?>

<section class="aboutMe" id="aboutMe">
    <div class="container animAbout">
        <p class="text-center color-secondary">ABOUT ME</p>
        <h1 class="text-center" style="margin-bottom: 8px;">Intorduction</h1>
        <div class="split">
            <div class="col col-1">
                <h3 class="color-secondary">Introduction</h3>
                <p class="content"><span>DoB:</span> <?php echo $newDoB; ?></p>
                <p class="content"><span>Email:</span> <?php echo $row[2]; ?></p>
                <p class="content"><span>Address:</span> <?php echo $row[3]; ?></p>
            </div>
            <div class="col col-2">
                <h3 class="color-secondary">Education</h3>
                <p class="content"><?php echo $row[4]; ?></p>
            </div>
            <div class="col col-3">
                <h3 class="color-secondary">Skills</h3>
                <p class="content"><?php echo $row[5]; ?></p>
                <p class="content"><?php echo $row[6]; ?></p>
                <p class="content"><?php echo $row[7]; ?></p>
                <p class="content"><?php echo $row[8]; ?></p>
                <p class="content"><?php echo $row[9]; ?></p>
            </div>
        </div>
    </div>
</section>

