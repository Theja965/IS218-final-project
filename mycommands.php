<?php
function allCompletedTasks($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $db = mysqli_connect($host2, $username2,$password2, $dbname2);

        $user_check_query = "SELECT * FROM tables wher isdone=2 ";
        $result = mysqli_query($db, $user_check_query);
    
        $user = mysqli_fetch_array($result);

        return $user;
       
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}


function showIncompleteTasks($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $user_check_query = "SELECT * FROM tables wher isdone !=2 ";
        $result = mysqli_query($db, $user_check_query);
    
        $user = mysqli_fetch_array($result);

        return $user;
       
    }


    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}
function countIncompleteTaskDueTime($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $user_check_query = "SELECT * FROM Tables WHERE user=? AND isdone!=2;";
        $result = mysqli_query($db, $user_check_query);
    
        $user = mysqli_fetch_array($result);

        while($row = mysqli_fetch_array($result)) {
        $duetime=$row["duedate"]-date();
        echo $duetime ;
        }

        return True;
       
    }

    
    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}

function countCompletedTaskDueTime($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $user_check_query = "SELECT * FROM Tables WHERE user=? AND isdone=2;";
        $result = mysqli_query($db, $user_check_query);
    
        $user = mysqli_fetch_array($result);

        while($row = mysqli_fetch_array($result)) {
        $duetime=date() - $row["duedate"];
        echo $duetime ;
        }

        return True;
       
    }

    
    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}




function listUrgentTasks($user)
{
    $host2 = 'sql1.njit.edu';
    $username2 = 'nak29';
    $password2 = 'Password2021!';
    $dbname2 = 'nak29';

    try {
        $user_check_query = "SELECT * FROM Tables WHERE user=? AND urgency=2 AND isdone!=2;";
        $result = mysqli_query($db, $user_check_query);
    
        $user = mysqli_fetch_array($result);

        return $user;
       
        
    }

    catch(PDOException $e)
    {
        return "something went big messy" . "<br>" . $e->getMessage();
    }

}
?>