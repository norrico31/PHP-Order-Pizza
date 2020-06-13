<?php 
    // connect to databse
    $conn = mysqli_connect('localhost', 'order_pizza', 'pizza1234', 'order_pizza');

    // check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <?php include 'templates/header.php'; ?>
    
    <?php include 'templates/footer.php'; ?>
</html>