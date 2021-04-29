<?php 

require("connect.php");

//function to display all the values of a table
function dd($value){
    echo "<pre>" , print_r($value, true) , "</pre>";
    die();
}

//funtion to select all values of a table
function selectAll($table){
    global $conn;
    $sql = "SELECT * FROM $table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}


