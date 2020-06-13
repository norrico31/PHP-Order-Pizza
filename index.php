<?php 
    // connect to databse
    $conn = mysqli_connect('localhost', 'order_pizza', 'pizza1234', 'order_pizza');

    // check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query for all record in pizzas
    $sql =  'SELECT title, ingredients, id FROM pizzas';

    // make query and get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // free result from memory
    mysqli_free_result($result);

    // close the db connection
    mysqli_close($conn);
    
    print_r($pizzas);
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