<?php

require_once './class/db.class.php';

class adapter extends db{
    
    public function getData()
    {
        $sql = "SELECT * FROM tinhthanh ";
        $stmt = $this->connect()->query($sql);

        while ($row = $stmt->fetch()) {
            echo $row['tentinh'].'<br>';
        }
    }


    function find($id){
        $sql = "SELECT * FROM tinhthanh WHERE matinh = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $name = $stmt->fetchAll();
        foreach ($name as $item){
            echo $item['tentinh'].'<br>';
        }
    }

    public function save($name){
        $sql = "INSERT INTO tinhthanh (tentinh) VALUES (?) ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
    }

    public function update($name, $id){
        $sql = "UPDATE tinhthanh SET tentinh = ? WHERE matinh = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $id]);
    }

    public function delete($id){
        $sql = "DELETE FROM `tinhthanh` WHERE matinh = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

}