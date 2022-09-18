
<?php

    // include 'Admin/config/dbconn.php';

    $query = "SELECT * FROM `contact` ";
    $run_query = mysqli_query($conn, $query);
    $row =  mysqli_fetch_row($run_query);

    if($run_query){
        ?>
        <script>
            // alert("Selected Successsfully");
        </script>        
    <?php 
    }

?> 

<section class="contact" id="contact">
            <div class="container">
                <p class="text-center color-secondary animRight">GET IN TOUCH</p>
                <h1 class="text-center animRight">
                    <?php
                        echo $row[1];
                    ?>
                </h1>
                <p class="text-center padding-inline animRight">
                    <?php
                        echo $row[2];
                    ?>
                </p>
                <div class="split">
                    <div class="box contactBox">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="
                            <?php
                                echo $row[3];
                            ?>
                        " target="_blank"
                            class="color-secondary">
                            <?php
                                echo $row[3];
                            ?>
                        </a>
                    </div>
                    <div class="box contactBox">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:
                            <?php
                                echo $row[4];
                            ?>
                        " class="color-secondary">
                            <?php
                                echo $row[4];
                            ?>
                        </a>
                    </div>
                    <div class="box contactBox">
                        <i class="fa-brands fa-linkedin-in"></i>
                        <a href="
                        <?php
                            echo $row[5];
                        ?>
                        " target="_blank" class="color-secondary">
                        <?php
                            echo $row[5];
                        ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <hr>
