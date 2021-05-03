<?php

$host2 = 'sql1.njit.edu';
$username2 = 'nak29';
$password2 = 'Password2021!';
$dbname2 = 'nak29';
$toolate = "If you see this... I'm so sorry.";



try {
    $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
    // set the PDO error mode to exception
    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE Tables (
    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user VARCHAR(60) NOT NULL,
title VARCHAR(60) NOT NULL,
description VARCHAR(120) NOT NULL,
urgency SMALLINT(2) NOT NULL,
isdone SMALLINT(2) NOT NULL,
duedate DATETIME NOT NULL
)";

    // FOR isdone: 2 is COMPLETE, anything else (including 1) is INCOMPLETE

    // use exec() because no results are returned
    $dsn->exec($sql);
    echo "Table Tables created successfully";
} catch(PDOException $e) {
    echo $toolate . "<br>" . $e->getMessage();
}

$dsn = null;
?>