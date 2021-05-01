<?php 

require("connect.php");

//function to display all the values of a table
function dd($value){
    echo "<pre>" , print_r($value, true) , "</pre>";
    die();
}

//funtion to select all values of a table
function selectAll($table, $condition = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($condition)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else{
        //return records with matching condition
        $i = 0;
        foreach ($condition as $key => $value){
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            } else{
                $sql = $sql . " AND $key = $value";
            }
        }
        dd($sql);

    }
    
}

$condition = [
    'admin' => 1,
    'username' => 'testUser1'
];


$users = selectAll('users',$condition);
dd($users);
