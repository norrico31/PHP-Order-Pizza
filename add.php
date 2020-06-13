<?php 
    // if(isset($_GET['submit'])) {
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    if (isset($_POST['submit'])) {

        // check email
        if (empty($_POST['email'])) {
            echo 'An email is required <br />';
        } else {
            echo htmlspecialchars($_POST['email']);
        }

        // check email
        if (empty($_POST['title'])) {
            echo 'An Title is required <br />';
        } else {
            echo htmlspecialchars($_POST['title']);
        }

        // check email
        if (empty($_POST['ingredients'])) {
            echo 'At least one ingredients is required <br />';
        } else {
            echo htmlspecialchars($_POST['ingredients']);
        }
    } // end of the post check
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
    <?php include 'templates/header.php'; ?>

        <section class="container grey-text">
            <h4 class="center">Add a Pizza</h4>
            
            <form action="add.php" class="white" method="POST">
                <label>Email:</label>
                <input type="text" name="email">
                <label>Pizza Title:</label>
                <input type="text" name="title">
                <label>Ingredients (comma separated):</label>
                <input type="text" name="ingredients">
                <div class="center">
                    <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
                </div>
            </form>
        </section>
        
    <?php include 'templates/footer.php'; ?>
</html>