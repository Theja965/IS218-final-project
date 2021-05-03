<?php

$host2 = 'sql1.njit.edu';
$username2 = 'nak29';
$password2 = 'Password2021!';
$dbname2 = 'nak29';

//2.1
function showName()
{
    /*$host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/


        return $_SESSION["FullName"];

        // use exec() because no results are returned
        //$dsn->exec($sql);
    /* }

     catch(PDOException $e)
     {
         return "something went big messy" . "<br>" . $e->getMessage();
     }

     $dsn = null;*/
}

//2.2

function listTasks($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "SELECT * FROM Tables WHERE user=? AND isdone!=2;";
        $stmt= $dsn->prepare($sql);
        $stmt->execute([$user]);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}


//2.3
function addTask($title, $description, $urgency, $duedate)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $user = $_SESSION["FullName"];

        $sql = "INSERT INTO Tables (user, title, description, urgency, duedate) VALUES (?,?,?,?,?)";
        $stmt= $dsn->prepare($sql);
        $stmt->execute([$user, $title, $description, $urgency, $duedate]);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }
}


//2.4
function editTask($id, $title, $description, $urgency, $duedate)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "UPDATE Tables where id=? SET title=?, description=?, urgency=? duedate=?";
        $stmt= $dsn->prepare($sql);
        $stmt->execute([$id, $title, $description, $urgency, $duedate]);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}


//2.5
function deleteTask($id)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "DELETE FROM Tables where id=? AND isdone!=2";
        $stmt= $dsn->prepare($sql);
        $stmt->execute([$id]);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}


//2.6
function finishTask($id)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "UPDATE Tables where id=? SET isdone=2";
        $stmt= $dsn->prepare($sql);
        $stmt->execute([$id]);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }
    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}


//2.8
function deleteCompletedTask($id)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "DELETE From Tables where id=? AND isdone=2";
        $stmt= $dsn->prepare($sql);
        $stmt->execute($id);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}

//2.9
function uncompleteTask($id)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "UPDATE Tables where id=? AND isdone=2 SET isdone=1";
        $stmt= $dsn->prepare($sql);
        $stmt->execute($id);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}


//2.10
//shows complete tasks
function countCompletedTasks($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "SELECT COUNT(*) FROM Tables WHERE user=? AND isdone=2;";
        $stmt= $dsn->prepare($sql);
        $stmt->execute([$user]);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}

//shows incomplete tasks
function countCurrentTasks($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "SELECT COUNT(*) FROM Tables WHERE user=? AND isdone!=2;";
        $stmt= $dsn->prepare($sql);
        $stmt->execute([$user]);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}

//2.12

function listUrgentTasks($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $dsn = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
        // set the PDO error mode to exception
        $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "SELECT * FROM Tables WHERE user=? AND urgency=2 AND isdone!=2;";
        $stmt= $dsn->prepare($sql);
        $stmt->execute([$user]);

        return True;
        // use exec() because no results are returned
        //$dsn->exec($sql);
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}