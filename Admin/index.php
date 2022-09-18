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
                        <h4 class="text-center">Login as Admin</h4>
                    </div>
                    <div class="card-body">
                        <form action="loginCode.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                <small><a href="registration.php">Not have Account? Signup</a></small>
                            </div>
                            <button type="submit" name="loginBtn" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('includes/login_footer.php');
?>