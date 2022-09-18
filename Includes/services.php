<?php
    $services_select_query = "SELECT * FROM `serviceheadings`";
    $services_select_query_run = mysqli_query($conn, $services_select_query);
    $row =  mysqli_fetch_row($services_select_query_run);
?>



<section class="services" id="services">
            <div class="container container-narrow animServices" id="servicesContainer">
                <p class="text-center color-secondary">SERVICES</p>
                <h1 class="text-center"><?php echo $row[1]; ?></h1>
                <p class="text-center padding-inline" style="margin-bottom: 10px;"><?php echo $row[2]; ?></p>
                <div class="split servicesScroll">
                    <?php
                    $select_service_query = "SELECT * FROM `services`";
                    $select_service_query_run = mysqli_query($conn,$select_service_query);
                        if(mysqli_num_rows($select_service_query_run) >0){
                            foreach($select_service_query_run as $row){
                                ?>
                                    <div class="box">
                                        <div class="hoverEffect">
                                            <i class="<?php echo $row["icon"]; ?>"></i>
                                            <h3><?php echo $row["service"]; ?></h3>
                                            <p><?php echo $row["totalProjects"]; ?>+</p>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                    
                </div>
            </div>
        </section>