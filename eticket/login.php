<?php
    session_start();
    if (isset($_SESSION['userid'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<?php
include('includes/navar.php');
?>

<!-- Page Content -->
<div class="container" style="height: 500px;">
    <!-- Jumbotron Header -->
    <!-- Page Features -->
    <div class="row text-center">


        <div class="col-lg-5 offset-lg-3 col-md-6 mb-4" style="margin-top: 100px;">
            <div class="card">
                <form class="form-group" method="post" action="">
                <div class="card-body">
                    <h4 class="card-title">Please Login to continue !</h4>

                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required><br>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>

                </div>
                <div class="card-footer text-left">
                    <input type="submit" name="submit" class="btn btn-primary" value="Login"> or <a href="register.php">Register</a>

                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <?php
    if(isset($_POST['submit'])){
        include('includes/DB.php');

        $email =$_POST['email'];
        $password = sha1($_POST['password']) ;
        $password= mysqli_real_escape_string($conn,$password);

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        $data = mysqli_fetch_assoc($result);

        $dbpassword = $data['password'];

        if ($dbpassword == $password){
           $_SESSION['name']=$data['name'];
           $_SESSION['email']=$data['email'];
           $_SESSION['phone']=$data['phone'];
           $_SESSION['userid']=$data['id'];
           header('location:index.php');
        }else{
            echo "<div class='alert alert-danger col-lg-5 offset-3'>Email aur password is not correct!</div>";
        }
        $conn->close();
    }
    ?>
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
