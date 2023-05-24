<?php
$n = isset($_POST['n']) ? $_POST ['n'] : null;
if ($n == 0) {
    echo 'son nolga teng';
} elseif ($n > 0) {
    if ($n % 2 == 0) {
        echo 'musbat juft son';
    } else {
        echo 'musbat toq son';
    }
} else {
    if ($n % 2 == 0) {
        echo 'Manfiy juft son';
    } else {
        echo 'Manfiy toq son';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if29</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="n" placeholder="n ni kiriting" value="<?php echo $n ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>