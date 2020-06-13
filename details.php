<?php 
    include 'config/db_connect.php';

    // check GET request id parameter
    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // query to the id from db
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        // get the query result
        $result = mysqli_query($conn, $sql);

        // fetch result in array format
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        // print_r($pizza);
    }
?>

<html lang="en">

    <?php include 'templates/header.php'; ?>

        <h2 class="center">Details</h2>
        <div class="container center">
            <?php if ($pizza): ?> 
                <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
                <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
                <?php echo htmlspecialchars($pizza['created_at']); ?>
                <h5>Ingredients:</h5>
                <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
            <?php else: ?>
                <h5>No such pizza exists</h5>
            <?php endif; ?>
        </div>
        
    <?php include 'templates/footer.php'; ?>

</html>