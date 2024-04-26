<?php
    include("partials/config.php");
    
    ob_start();
    session_start();

    if (isset($_SESSION['valid'])) {
        if($_SESSION['valid'] == TRUE) {
            header("Location: index.php");
        }
    }

    $msg = "";
    //if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && !empty($_POST['password'])) {
    if (isset($_POST['password']) && !empty($_POST['password']) ) {

            include('php/db.php');
            $pass=$_POST['password'];
            $sql = "SELECT * FROM `rep_id` WHERE `rep_id` = $pass";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $user=$row["rep_name"];
                $id=$row["rep_id"];
                echo $user;
              }
            } else {
              echo "0 results";
              echo $user;
            }
                   
        

                // if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123')
        if ($_POST['password'] == $id)
         {
            $_SESSION['valid'] = TRUE;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $user;
            header("Location: index.php");
        } else {
            $msg = "Invalid Credentials !!";
        }
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partials/head.php"); 
	include("js/cache.php");
	?>
    <title><?php echo $SITE_TITLE; ?></title>
</head>

<body class="bg-gradient-primary" style="background: #485563;background: -webkit-linear-gradient(to right, #29323c, #485563); background: linear-gradient(to right, #29323c, #485563);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9" style="height: 100vh;">
                <div class="card o-hidden border-0 shadow-lg" style="top: 50%; transform: translateY(-50%);">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">U D A Y A M </h1>
                                    </div>
                                    <form class="user" action="login.php" method="post">
                                        <div class="form-group">
                                            <!-- <input type="text" class="form-control form-control-user"
                                                id="txtUsername" name="username" aria-describedby="emailHelp"
                                                placeholder="Enter username" required="required"> -->
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" 
                                                id="txtPassword" placeholder="Enter password" required="required">
                                        </div>
                                        <div class="padding: 10px; color: red; text-align: center;"><?php echo !empty($msg) ? $msg : ""; ?></div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include("partials/js.php"); ?>
</body>

</html>