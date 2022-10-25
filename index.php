<?php

define('NaME', 'Mario');

$name = "Stephan";
$age = 40;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorials</title>
</head>

<body>

    <h1>User Profile Page</h1>

    <div><?php echo NaME; ?></div>
    <div><?php echo '<br>' . $age; ?></div>

</body>

</html>