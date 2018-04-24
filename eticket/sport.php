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

            <div class="row">

                <div class="col-lg-3">

                  <h1 class="my-4">Ticket</h1>
                   <div class="list-group">
                    <a href="concert.php" class="list-group-item">Concert</a>
                    <a href="sport.php" class="list-group-item">sport</a>
                    <a href="family.php" class="list-group-item">Family and Attraction</a>
                </div>

            </div>


            <div class="col-lg-9">  <!-- Jumbotron Header -->
                <header class="jumbotron my-4">
                    <h1 class="display-4">Welcome To E-Ticketing!</h1>
                    <p class="lead">You can select any ticket any add into your cart for more processing.</p>

                </header>

                <!-- Page Features -->
                <div class="alert alert-success" v-if="status">Added Successfully</div>
                <div class="alert alert-danger" v-if="errorstatus">There is an error while adding to cart please try later</div>
                <div class="row text-center">

                     <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="images/football.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Movie Ticket</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>
                           <div class="card-footer">
                                <input type="number" name="mquantity" v-model="mquantity">
                                <a href="#" class="btn btn-primary" @click="addmovie(<?php echo $_SESSION['userid']?>)">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="images/corkcity.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Movie Ticket</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>
                            <div class="card-footer">
                                <input type="number" name="mquantity" v-model="mquantity">
                                <a href="#" class="btn btn-primary" @click="addmovie(<?php echo $_SESSION['userid']?>)">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="images/ulster.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Movie Ticket</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>
                            <div class="card-footer">
                                <input type="number" name="mquantity" v-model="mquantity">
                                <a href="#" class="btn btn-primary" @click="addmovie(<?php echo $_SESSION['userid']?>)">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="images/cricket.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Movie Ticket</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>
                            <div class="card-footer">
                                <input type="number" name="mquantity" v-model="mquantity">
                                <a href="#" class="btn btn-primary" @click="addmovie(<?php echo $_SESSION['userid']?>)">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="images/wwe.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Movie Ticket</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>
                            <div class="card-footer">
                                <input type="number" name="mquantity" v-model="mquantity">
                                <a href="#" class="btn btn-primary" @click="addmovie(<?php echo $_SESSION['userid']?>)">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="images/rugby.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Movie Ticket</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>
                            <div class="card-footer">
                                <input type="number" name="mquantity" v-model="mquantity">
                                <a href="#" class="btn btn-primary" @click="addmovie(<?php echo $_SESSION['userid']?>)">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
