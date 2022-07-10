<?php
function writeMsg($servername,$username,$password) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new PDO('mysql:host='.$servername.';dbname=test', $username, $password);
}

function insert($params)
 {
     $sql = 'INSERT INTO ' . 'users ' . 'SET ' . 'phone_number = :phone_number, ' . 'name = :name, ' . 'created = :created ';
     $statement = $this->_dbCon->prepare($sql);
     $result = $statement->execute(['phone_number' => $params['phoneNumber'], 'name' => $params['name'], 'created' => $params['created']]);
     return $result;
 }

