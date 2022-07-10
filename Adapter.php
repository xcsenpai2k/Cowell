<?php
class Adapter{
    protected $adapter;
//    public function __construct(AdapterInterface $adapter)
//    {
//        $this->adapter = $adapter;
//    }
    function connect() {
        $servername = "localhost";
        $dbname="testpdo";
        $username = "root";
        $password = "";
        $conn = new PDO("mysql:host=$servername; dbname=$dbname; charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    function get() //fetchOne
    {
        $conn = connect();
        $sql = 'SELECT * FROM users';
        $statement = $conn->query($sql);

        // fetch the next row
        while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
            echo $row['name'] . '<br>';
        }
    }
    function find($id)
     {
         $conn = connect();
         $sql = 'SELECT * 
        FROM users 
        WHERE user_id =:user_id';

        // prepare the query for execution
        $statement = $conn->prepare($sql);

        // execute the query
        $statement->execute([
            ':user_id' => 1
        ]);

        // fetch the next row
        while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
            echo $row['name'] . PHP_EOL;
        }
     }
     function save(){
         $conn = connect();
         $fullName = 'XXX';
         $sql = 'INSERT INTO users(fullName) VALUES(:fullName)';

         $statement = $conn->prepare($sql);

         $statement->execute([
             ':fullName' => fullName
         ]);

         $user_id = $conn->lastInsertId();

         echo 'The publisher id ' . $user_id . ' was inserted';
     }
    function update($user_id){
        $conn = connect();
        $user = [
            'user_id' => 1,
            'name' => 'McGraw-Hill Education'
        ];

        $sql = 'UPDATE users
        SET name = :name
        WHERE user_id = :user_id';

        // prepare statement
        $statement = $conn->prepare($sql);

        // bind params
        $statement->bindParam(':user_id', $user['user_id'], PDO::PARAM_INT);
        $statement->bindParam(':name', $user['name']);

        // execute the UPDATE statment
        if ($statement->execute()) {
            echo 'The user has been updated successfully!';
        }
    }
    function delete($user_id){
        $conn = connect();
        $sql = 'DELETE FROM publishers
        WHERE user_id = :publisher_id';

        // prepare the statement for execution
        $statement = $conn->prepare($sql);
        $statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);

        // execute the statement
        if ($statement->execute()) {
            echo 'publisher id ' . $user_id . ' was deleted successfully.';
        }
    }
}