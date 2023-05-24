<?php
$n = isset($_POST['n']) ? $_POST ['n'] : null;

if (floor($n / 10) == 0) {
    echo 'Bir xonali ';
    if ($n % 2 == 0) {
        echo 'juft son';
    } else {
        echo 'toq son';
    }
} elseif (floor($n / 10) <= 9) {
    echo 'Ikki xonali ';
    if ($n % 2 == 0) {
        echo 'juft son';
    } else {
        echo 'toq son';
    }
} elseif (floor($n / 100) <= 9) {
    echo 'Uch xonali ';
    if ($n % 2 == 0) {
        echo 'juft son';
    } else {
        echo 'toq son';
    }
}
else {
    echo '1 dan 999 gacha oraliqdagi son kiriting';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if30</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="n" placeholder="n ni kiriting" value="<?php echo $n ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>