<?php
session_start();
    if (!isset($_SESSION['userid'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Select Tickets</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/vue.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>
<div id="app">
<?php
include "includes/navar.php";
?>
<!-- Page Content -->

<div class="container">


    <!-- Jumbotron Header -->
   <hr>
   <hr>
   <hr>
  <p class="m-0 text-center text-black">Thank You for making a booking with us, you should receive an email confirmation shortly.</p>

  <p class="m-0 text-center text-black">You can contact us for any information in the contact us page for any further question relating to your order.</p>

<table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>quantity</th>
                <th>price</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody id="app">
            <?php
            include 'includes/DB.php';
            $sql = "SELECT * FROM cart WHERE userid = ". $_SESSION['userid']."";
            $sql2 = "SELECT SUM(price) as total_sum FROM cart  WHERE userid = ". $_SESSION['userid']." ";
            $result = $conn->query($sql);
            $result2 = $conn->query($sql2);
            $tot = mysqli_fetch_assoc($result2);

        if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['quantity']."</td>
                            <td>".$row['price']."</td>
                            
                          
                            
                        </tr>";

                }
            }
            ?>

    </tbody>
</table>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</body>

</html>
