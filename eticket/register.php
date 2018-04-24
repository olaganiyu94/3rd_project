<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

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
<div class="container" >

    <!-- Jumbotron Header -->
    <!-- Page Features -->
    <div class="row text-center">


        <div class="col-lg-5 offset-lg-3 col-md-6 mb-4" style="margin-top: 20px;">
            <div class="card">
                <form class="form-group" action="" method="post">
                    <div class="card-body text-left" >
                        <h4 class="card-title text-center">Registration page!</h4>
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                        <label for="password">Password</label>
                        <input type="password" name="password1" class="form-control" placeholder="Enter password" required><br>
                        <input type="password" name="password2" class="form-control" placeholder="Confirm Password" required>

                    </div>
                    <div class="card-footer text-left">
                        <input type="submit" name="submit" class="btn btn-primary" value="Register"> or <a href="login.php">Login</a>

                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.row -->
    <?php
    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $email =$_POST['email'];
        $phone =$_POST['phone'];
        $password1 = sha1($_POST['password1']) ;
        $password2 = sha1($_POST['password2']);
        include('includes/DB.php');
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0){
            echo "<div class='alert alert-danger col-lg-5 offset-3'>Email Already Exit ! Please use another one to register</div>";
            $conn->close();
        }else{
            if($password1 == $password2){

                $sql = "INSERT INTO users (name, email,phone,password)
            VALUES ('$name', '$email', '$phone','$password1')";

                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success col-lg-5 offset-3'>Registered Successfully !</div>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
        }
    }
    ?>
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Assignment</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
