<?php
$yil = isset($_POST['yil']) ? $_POST ['yil'] : null;
if ($yil%400==0){
    echo "Kabisa yili";
}
elseif ($yil%100==0){
    echo "Kabisa emas";
}
elseif($yil%4==0){
    echo "kabisa yili";
}
else{
    echo "kabisa emas";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if28</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="yil" placeholder="yil ni kiriting" value="<?php echo $yil ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>