<?
 include 'class/bilder.php';
 include 'class/posgress.php';
 include 'class/mysql.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>BD</h2>
    <?

    $query = new bilder();

    $query->setFild('name');
    $query->setFild('name2');
    $query->setFild('name3');
    


    echo $query->select(  'test' , 'test = test' , 5);

    ?>
</body>
</html>