
<?php

    if(isset($_POST['updateContact'])){
        
        $conHeading = $_POST['conHeading'];
        $conContent = $_POST['conContent'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $linkedIn = $_POST['linkedIn'];

        $query = "UPDATE `contact` SET `conHeading` = '$conHeading', `conContent` = '$conContent', `email` = '$email', `phone` = '$phone', `linkedIn` = '$linkedIn' WHERE `Id` = 1;";

        $run_query = mysqli_query($conn,$query);
        if($run_query == 'true'){
            ?>
            <script>
                alert("Updated Successsfully");
            </script>        
        <?php 
        }
    }
?>

<?php
    $select_query = "SELECT * FROM `contact`";
    $select_query_run = mysqli_query($conn, $select_query);
    $row =  mysqli_fetch_row($select_query_run);

?>

<div id="contact" style="background-color: #f7f7f7;" class="mt-2 p-3">
    <h4>Contact Section</h4>
    <form action="./main.php" method="post">
        <div class="form-group my-3">
            <label for="">Heading of Contact</label>
            <input type="text" class="form-control" id="heading" name="conHeading" placeholder="max 10 characters"
            value = "<?php echo $row[1] ?>">
        </div>
        <div class="form-group my-3">
            <label for="">Content of Contact</label>
            <input type="text" class="form-control" id="heading" name="conContent" placeholder="max 40 characters"
            value = "<?php echo $row[2] ?>">
        </div>
        <div class="form-group my-3">
            <label for="">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name ="email"
            value = "<?php echo $row[3] ?>">
        </div>
        <div class="form-group my-3">
            <label for="">Phone</label>
            <input type="text" class="form-control" id="phone" placeholder="Your Phone No." name="phone"
            value = "<?php echo $row[4] ?>">
        </div>
        <div class="form-group my-3">
            <label for="">LinkedIn ID</label>
            <input type="text" class="form-control" id="linkedInId" placeholder="Linked In ID" name="linkedIn"
            value = "<?php echo $row[5] ?>">
        </div>
        <button type="submit" class="btn btn-primary my-2 float-end" name="updateContact">Update</button>
    </form>
</div>