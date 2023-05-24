
<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
$b = isset($_POST['b']) ? $_POST['b'] : null;
$c = isset($_POST['c']) ? $_POST['c'] : null;

if (($a<$b && $b<$c) || ($a>$b && $b>$c)){
    $a = 2*$a;
    $b = 2*$b;
    $c = 2*$c;
}
else{
    $a = -$a;
    $b = -$b;
    $c = -$c;
}
echo $a." ".$b." ".$c;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>if16-17</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <input type="text" name="b" placeholder="b ni kiriting" value="<?php echo $b ?>">
        <input type="text" name="c" placeholder="c ni kiriting" value="<?php echo $c ?>">

        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>