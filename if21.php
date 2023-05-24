<?php
$x = isset($_POST['x']) ? $_POST ['x'] : null;
$y = isset($_POST['y']) ? $_POST ['y'] : null;


if ($x == 0 && $y == 0) {
    echo "0";
} elseif ($x == 0) {
    echo "2";
} elseif ($y == 0) {
    echo "1";
} else {
    echo "3";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if21</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="x" placeholder="x ni kiriting" value="<?php echo $x ?>">
        <input type="text" name="y" placeholder="y ni kiriting" value="<?php echo $y ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>