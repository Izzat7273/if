
<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
$b = isset($_POST['b']) ? $_POST['b'] : null;
$c = isset($_POST['c']) ? $_POST['c'] : null;
$d = isset($_POST['d']) ? $_POST['d'] : null;


if ($a==$b && $b==$c){
    echo $d;
}
elseif ($a==$b && $b==$d){
    echo $c;
}
elseif ($a==$c && $c==$d){
    echo $b;
}
else{
    echo $a;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>if18-19</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <input type="text" name="b" placeholder="b ni kiriting" value="<?php echo $b ?>">
        <input type="text" name="c" placeholder="c ni kiriting" value="<?php echo $c ?>">
        <input type="text" name="d" placeholder="d ni kiriting" value="<?php echo $d ?>">

        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>