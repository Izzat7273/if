<?php
$x = isset($_POST['x']) ? $_POST ['x'] : null;

if ($x<=0){
    $res = -$x;
}
elseif($x>0 && $x<2){
    $res = $x*$x;
}
else {
    $res=4;
}
echo $res;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if26</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="x" placeholder="x ni kiriting" value="<?php echo $x ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>