<?php
$x1 = isset($_POST['x1']) ? $_POST ['x1'] : null;
$y1 = isset($_POST['y1']) ? $_POST ['y1'] : null;
$x2 = isset($_POST['x2']) ? $_POST ['x2'] : null;
$y2 = isset($_POST['y2']) ? $_POST ['y2'] : null;
$x3 = isset($_POST['x3']) ? $_POST ['x3'] : null;
$y3 = isset($_POST['y3']) ? $_POST ['y3'] : null;

if ($x1==$x3){
    $x4 = $x2;
}
else{
    $x4=$x3;
}
if ($y1==$y2){
    $y4 = $y3;
}
else {
    $y4 = $y1;
}

echo "x4 = ".$x4.","."y4 = ".$y4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if23</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="x1" placeholder="x1 ni kiriting" value="<?php echo $x1 ?>">
        <input type="text" name="y1" placeholder="y1 ni kiriting" value="<?php echo $y1 ?>">
        <input type="text" name="x2" placeholder="x2 ni kiriting" value="<?php echo $x2 ?>">
        <input type="text" name="y2" placeholder="y2 ni kiriting" value="<?php echo $y2 ?>">
        <input type="text" name="x3" placeholder="x3 ni kiriting" value="<?php echo $x3 ?>">
        <input type="text" name="y3" placeholder="y3 ni kiriting" value="<?php echo $y3 ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>