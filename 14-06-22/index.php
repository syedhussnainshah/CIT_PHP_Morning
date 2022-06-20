<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($k = 0; $k <= 10; $k++) {
        echo $k . "<br>";
    }
    $x = 0;
    while ($x <= 10) {
        echo $x;
        $x++;
    }
    $array = ['HTML', 'CSS', 'BOOTSTRAP'];
    // echo $array; 
    print_r($array);
    foreach ($array as $key => $value) {
        echo "<br>" . $key;
        echo "<br>" . $value;
    }
    ?>
</body>

</html>