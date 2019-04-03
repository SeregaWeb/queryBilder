<?
    include 'config/config.php';
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

    $db = new mysql();

    $query = new bilder();

    $query->setFild('col1');
    $query->setFild("col2");

    $query->setNameTable('test');

    $qry = $query->select(false , 0);
    
    $val = $db->select($qry);

    foreach ($val as $v){
        echo " | ". $v ." | ";
    }

    ?>
</body>
</html>