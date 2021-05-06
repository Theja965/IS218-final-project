<?php
class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {


        #Use the Following for njit database
        $dsn = "mysql:host=sql1.njit.edu;dbname=nak29";
        $username = "nak29" ;
        $password = "Password2021!" ;

        // Use the Following Dsn, Username and Password for xampp
        // $dsn = 'mysql:host=localhost;dbname=sunny_is218'; // default is: sunny_is218
        // $username = 'root';
        // $password = '';

        try {
            $db = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            exit();
        }
        return $db;
    }
}
?>
