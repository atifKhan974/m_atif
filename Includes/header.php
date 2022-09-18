<?php
    $select_color_query = "SELECT * FROM `colors`";
    $select_color_query_run = mysqli_query($conn,$select_color_query);

    if($select_color_query_run){
        $color_row =  mysqli_fetch_row($select_color_query_run);
        ?>
            <div class="display_none" id="p_200"> <?php echo $color_row[1]; ?> </div>
            <div class="display_none" id="p_400"> <?php echo $color_row[2] ?> </div>
            <div class="display_none" id="p_600"> <?php echo $color_row[3] ?> </div>
            <div class="display_none" id="sec"> <?php echo $color_row[4] ?> </div>
        <?php
    }

?>

<?php
    $hero_select_query = "SELECT * FROM `hero`";
    $hero_select_query_run = mysqli_query($conn, $hero_select_query);
    $row =  mysqli_fetch_row($hero_select_query_run);
    $hero_image = "admin/".$row[2]."";
?>



<script>
    console.log('Get the colors: ' + p_200.innerText);
    console.log('Get the colors: ' + p_400.innerText);
    console.log('Get the colors: ' + p_600.innerText);
    console.log('Get the colors: ' + sec.innerText);
</script>



<section class="hero" id="hero">
            <div class="container">
                <div class="split">
                    <div class="heroContent">
                        <h2 class="name anim"> <?php echo $row[3]; ?></h2>
                        <h2 class="anim"><?php echo $row[4]; ?></h2>
                        <p class="anim"><?php echo $row[5]; ?></p>
                        <a href="#">
                            <button class="anim" id="contactBtn">Contact Me</button>
                        </a>
                    </div>
                    <div class="img">
                        <img src="<?php echo $hero_image;  ?>" alt="img" width = "400" height = "auto">
                    </div>
                </div>
            </div>
        </section>