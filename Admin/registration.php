<?php
    session_start();
    include('includes/login_header.php');
?>
<div class="container my-5">
    <?php include('message.php') ?>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow rounded">
                <div class="card-header">
                    <h4 class="text-center">Register</h4>
                </div>
                <div class="card-body">
                    <form action="registerCode.php" method = "POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" required name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" required id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" required id="exampleInputPassword1" name="cpassword">
                        </div>
                        <button type="submit" id="registerBtn" class="btn btn-primary" name="registerBtn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/login_footer.php');
?>