<?php
/**
 * Created by PhpStorm.
 * User: FUJITSU
 * Date: 4/20/2018
 * Time: 1:40 AM
 */

if (isset($_GET['id'])){
    include ('includes/DB.php');

    $id = $_GET['id'];


    $sql = "DELETE FROM cart WHERE id=".$id."";

    if ($conn->query($sql) === TRUE) {
        header('Location:cart.php?dstatus=1');
    } else {

        header('Location:cart.php?dstatus=0');
    }

    $conn->close();
}





?>