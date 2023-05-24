
<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
$b = isset($_POST['b']) ? $_POST['b'] : null;
$c = isset($_POST['c']) ? $_POST['c'] : null;

if (abs($b-$a)<abs($c-$a)){
    echo "b = ".$b.","." masofa = ".($b-$a);
}
else{
    echo "c = ".$c.","." masofa = ".($c-$a);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>if20</title>
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