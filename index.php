<?php 
    // connect to databse
    $conn = mysqli_connect('localhost', 'order_pizza', 'pizza1234', 'order_pizza');

    // check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query for all record in pizzas
    $sql =  'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    // make query and get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // free result from memory
    mysqli_free_result($result);

    // close the db connection
    mysqli_close($conn);
    
    // print_r($pizzas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <?php include 'templates/header.php'; ?>
    
        <h4 class="center grey-text">Pizzas</h4>
        <div class="container">
            <div class="row">
                <?php foreach ($pizzas as $pizza) {?>
                    <div class="col s6 md3">
                        <div class="card z-depth-0">
                            <div class="card-content center">
                                <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                                <div>
                                    <?php echo htmlspecialchars($pizza['ingredients']); ?>
                                </div>
                                <div class="card-action right-align">
                                    <a href="#" class="brand-text">more info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    <?php include 'templates/footer.php'; ?>
</html>