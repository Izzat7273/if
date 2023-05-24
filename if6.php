<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
$b = isset($_POST['b']) ? $_POST['b'] : null;
if($a>$b){
    echo "birinchi son katta";
}else{
    echo "ikkinchi son katta";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>if6</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <input type="text" name="b" placehgolder="b ni kiriting" value="<?php echo $b ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>