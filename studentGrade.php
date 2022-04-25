<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo 2</title>
</head>

<body>
    <h1>Student grade</h1>
    <input type="radio" name="grade" value="A">
    <label>A</label>
    <br>
    <input type="radio" name="grade" value="B">
    <label>B</label>
    <br>
    <input type="radio" name="grade" value="C">
    <label>C</label>
    <br>
    <input type="radio" name="grade" value="D">
    <label>D</label>
    <br>
    <input type="radio" name="grade" value="F">
    <label>F</label>
    <br>






    <?php
    $grade = "input";
    if ($grade == "A") {
        echo "<p> You earned an A</p>";
    } else if ($grade == "B") {
        echo "<p> You earned a B</p>";
    } else if ($grade >= 70) {
        echo "<p> You earned a C</p>";
    } else if ($grade >= 60) {
        echo "<p> You earned a D</p>";
    } else {
        echo "<p> You earned a F</p>";
    }
    ?>
</body>

</html>