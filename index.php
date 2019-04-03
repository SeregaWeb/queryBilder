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

    $db->setFild('id');
    $db->setFild("text");

    $db->setNameTable('test');

    $value = $db->select(false , 0);
    print_r($value);
    echo '<pre>';

    // foreach($value as $val){
    //     echo "{".$val."}" ;
    // }

    ?>
</body>
</html>