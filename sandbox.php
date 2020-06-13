<?php 
    $score = 50;

    // $result = $score > 30 ? 'high score' : 'low score';

    // superglobals
    echo $_SERVER['SERVER_NAME']. '<br />';
    echo $_SERVER['REQUEST_METHOD'] . '<br />';
    echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
    echo $_SERVER['PHP_SELF'] . '<br />';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operator</title>
</head>
<body>
    <!-- <p><?php echo $result; ?></p> -->

    <!-- <p><?php echo $score > 40 ? 'high score!' : 'low score'; ?></p> -->
</body>
</html>