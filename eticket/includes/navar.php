<?php
if(isset($_SESSION['userid'])){
include "includes/DB.php";

$sql = "SELECT count(1) FROM cart WHERE userid = ".$_SESSION['userid']."";
$result = $conn->query($sql);
$data = mysqli_fetch_array($result);

$total = $data[0];
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">E-Ticketing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="product.php">Product
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact Us
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <?php
                    if(isset($_SESSION['userid'])){
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="cart.php"><span class="fa fa-cart-plus"></span> <span class="badge badge-light">'.$total.'</span>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        ';
                    }else{
                        echo '
                            <li class="nav-item active">
                                <a class="nav-link" href="login.php">Login
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        ';
                    }
                ?>

            </ul>
        </div>
    </div>
</nav>
