<?php 
    // connect to databse
    $conn = mysqli_connect('localhost', 'order_pizza', 'pizza1234', 'order_pizza');

    // check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>