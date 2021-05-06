<?php
session_start();
require_once('TODO-Connection.php');

function DisplayData($Username) {
    $conn = DB::getInstance();
    $query="SELECT * FROM Tables WHERE user = :username";
    $statement = $conn->prepare($query);
    $statement->bindValue(':username', $Username);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    if(!$result){
        return false;
    }
    else{
        return $result;
    }
}

