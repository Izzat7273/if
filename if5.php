<?php
$son1 = isset($_POST['son1']) ? $_POST['son1'] : null;
$son2 = isset($_POST['son2']) ? $_POST['son2'] : null;
$son3 = isset($_POST['son3']) ? $_POST['son3'] : null;

if ($son1 > 0) {
    $musbat_sonlar++;
} elseif ($son1 < 0) {
    $manfiy_sonlar++;
}

if ($son2 > 0) {
    $musbat_sonlar++;
} elseif ($son2 < 0) {
    $manfiy_sonlar++;
}

if ($son3 > 0) {
    $musbat_sonlar++;
} elseif ($son3 < 0) {
    $manfiy_sonlar++;
}

echo $musbat_sonlar .'<br>'. $manfiy_sonlar;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>if5</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="son1" placeholder="son1 ni kiriting" value="<?php echo $son1 ?>">
        <input type="text" name="son2" placeholder="son2 ni kiriting" value="<?php echo $son2 ?>">
        <input type="text" name="son3" placeholder="son3 ni kiriting" value="<?php echo $son3 ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>