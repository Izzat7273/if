<?php
$x = isset($_POST['x']) ? $_POST ['x'] : null;

if ($x<0){
    $res = 0;
}
elseif(floor($x)%2==0){
    $res = 1;
}
else{
    $res=-1;
}
echo $res;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if27</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="x" placeholder="x ni kiriting" value="<?php echo $x ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>