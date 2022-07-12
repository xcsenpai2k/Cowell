<?php
require_once './class/adapter.class.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectDB - DPO</title>
</head>

<body>
    <?php
    $name = 'name';

    $a = new adapter;
    // truy van
    echo 'Truy vấn dữ liệu: <br>';
    $a->getData();


    // tim theo id
    echo '<hr>';
    echo 'Truy vấn dữ liệu theo id: <br>';
    $a->find('5');

    // Insert
    // $a->save('');


    // update
    $id = '10';
    $name = 'test22';
    $a->update($name, $id);

    // delete
    $a->delete('');

    ?>
</body>

</html>