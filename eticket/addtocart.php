<?php
/**
 * Created by PhpStorm.
 * User: FUJITSU
 * Date: 4/20/2018
 * Time: 1:40 AM
 */
include ('includes/DB.php');
        $data = json_decode(file_get_contents("php://input"), true);

        $name = $data['name'];

        if ($data['quantity'] == ''){
            $quantity =1;
        }else{
            $quantity =$data['quantity'];
        }
        $price =$data['price']*$quantity;

        $userid = $data['userid'];


        $sql = "INSERT INTO cart (name,quantity,price,userid)
            VALUES ('$name', '$quantity', '$price','$userid')";

                if ($conn->query($sql) === TRUE) {
                    return 'ok';
                } else {
                    return 'error';
                }

                $conn->close();




?>