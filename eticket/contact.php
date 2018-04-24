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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <!-- Custom styles for this template 
        <link href="css/heroic-features.css" rel="stylesheet"> -->
    <link href="css/contact.css" rel="stylesheet">

</head>

<body>
<div id="app">
<?php
include "includes/navar.php";
?>
<!-- Page Content -->

<div class="container">

    <div class="row">
        <h1 class="header-title"> Contact </h1>
        <hr>
        <div class="col-sm-12" id="parent">
            <div class="col-sm-6">
                <form action="form.php" class="contact-form" method="post">
        
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
                    </div>
                
                
                    <div class="form-group form_left">
                      <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
                    </div>
                
                  <div class="form-group">
                       <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
                  </div>
                  <div class="form-group">
                  <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
                  <br>
                  <button class="btn btn-default btn-send" href="contactConfirm.php"> <span class="glyphicon glyphicon-send"></span> Send </button>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container second-portion">
        <div class="row">
            <!-- Boxes de Acoes -->
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">                           
                    <div class="icon">
                        <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">MAIL & WEBSITE</h3>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp olaganiyu93@gmail.com
                                <br>
                                <br>
                                <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.ticketmaster.com
                            </p>
                        
                        </div>
                    </div>
                    <div class="space"></div>
                </div> 
            </div>
            
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">                           
                    <div class="icon">
                        <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">CONTACT</h3>
                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+353)-852020143
                                <br>
                                <br>
                                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+353)-7567065254 
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div> 
            </div>
                
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">                           
                    <div class="icon">
                        <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">ADDRESS</h3>
                            <p>
                                 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 23 Charnwood Heath,
                                 Closilla Dublin 15.
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
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
