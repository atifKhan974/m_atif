<?php
    if(isset($_POST['update_about'])){
        $dateOfBirth = date('Y-m-d', strtotime($_POST['dateOfBirth']));
        $email = $_POST['email'];
        $address = $_POST['address'];
        $education = $_POST['education'];

        $skill_1 = $_POST['skill_1'];
        $skill_2 = $_POST['skill_2'];
        $skill_3 = $_POST['skill_3'];
        $skill_4 = $_POST['skill_4'];
        $skill_5 = $_POST['skill_5'];
        

        $update_about_query = "UPDATE `about` SET `DoB` = '$dateOfBirth', `email` = '$email', `address` = '$address', `education` = '$education', `skill_1` = '$skill_1', `skill_2` = '$skill_2', `skill_3` = '$skill_3', `skill_4` = '$skill_4', `skill_5` = '$skill_5' WHERE `about`.`Id` = 1";
        $update_about_query_run = mysqli_query($conn,$update_about_query);

        ?>
        <script>
            alert("About Section Updated Successfully" );
        </script>
        <?php

    }
?>

<?php
    $select_query = "SELECT * FROM `about`";
    $select_query_run = mysqli_query($conn, $select_query);
    $row =  mysqli_fetch_row($select_query_run);
?>
<div id="about" style="background-color: #f7f7f7;" class="mt-2 p-3">
    <h4>About Section</h4>
    <form action="./main.php" method="post">
        <div class="form-group my-3">
            <label for="">Date of Birth</label>
            <input type="date" value="2020-05-15" class="form-control" id="dob_input" name="dateOfBirth">

        </div>
        <div class="form-group my-3">
            <label for="">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name="email" 
            value="<?php echo $row[2]; ?>">
        </div>
        <div class="form-group my-3">
            <label for="">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Your Address" name="address"
            value="<?php echo $row[3]; ?>">
        </div>
        <hr>
        <div class="form-group my-3">
            <label for="">Education</label>
            <textarea class="form-control" id="education" rows="3"
                placeholder="Less than 70 characters" name="education"><?php echo $row[4]; ?></textarea>
        </div>
        <p class="d-none" id="doB"><?php echo $row[1]; ?></p>

        <hr>
        <div class="form-group my-3">
            <label for="">Skills</label>
            <div class="d-flex">
                <input type="text" class="form-control skill" placeholder="Skill-1" name="skill_1" 
                value="<?php echo $row[5]; ?>">
                <input type="text" class="form-control skill mx-1" placeholder="Skill-2" name="skill_2"
                value="<?php echo $row[6]; ?>">
                <input type="text" class="form-control skill mx-1" placeholder="Skill-3" name="skill_3"
                value="<?php echo $row[7]; ?>">
                <input type="text" class="form-control skill mx-1" placeholder="Skill-4" name="skill_4"
                value="<?php echo $row[8]; ?>">
                <input type="text" class="form-control skill" placeholder="Skill-5" name="skill_5"
                value="<?php echo $row[9]; ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-2 float-end" name="update_about">Update</button>
    </form>
</div>

<script>
    console.log('Hello');
    let doB = document.getElementById("doB");
    let dob_input = document.getElementById("dob_input");
    dob_input.defaultValue = doB.innerText;
    console.log(dob_input.value);
    
</script>