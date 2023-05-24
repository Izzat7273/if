<?php
$son = isset($_POST['son']) ? $_POST['son'] : null;


if ($son > 0) {
    $son += 1;
}
echo $son;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>if1</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="son" placeholder="son ni kiriting" value="<?php echo $son ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>