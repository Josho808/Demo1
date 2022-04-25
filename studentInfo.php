<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Demo 1</title>
</head>

<body>
    <h1>Demo 1</h1>

    <?php
    // Instantiate variables
    $name = "Josh Onaka"; // name of person
    $title = "student"; // title of person
    $age = 38;

    echo "<h2>" . $name . " - " . $title . "</h2>";
    echo "<p>This person is " . $age . "years old</p>";

    ?>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab culpa veritatis tempore provident reprehenderit at, omnis, autem quisquam vitae asperiores, et ullam. Illo fuga accusamus aut nihil quia natus libero.</p>


    <?php
    echo $name;
    ?>
</body>



</html>