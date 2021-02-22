<?php
function createConnectionMysql($dbname = "soupy", $host = "localhost", $user = "root", $pass = "-.,asd")
{
    $conn = new mysqli($host, $user, $pass, $dbname);
    hanlderConnError($conn);
    return $conn;
}

function hanlderConnError($conn)
{

    if ($conn->connect_error) {
        $error = $conn->connect_error;
        $n_error = $conn->connect_errno;
        header("Location: includes/error.php?error=$error&n_error=$n_error");
        die;
    }
}

function handlerQueryError($conn){
    if ($conn->error) {
        $error = $conn->error;
        $n_error = $conn->errno;
        header("Location: includes/error.php?error=$error&n_error=$n_error");
        die;
    }
    
}

function genericQuery($sql_query, $conn)
{
    $result = $conn->query($sql_query);
    handlerQueryError($conn);
    return $result;
}

