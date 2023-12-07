<?php
$connect = new mysqli("localhost","root","","dainik7");
session_start();
if($connect->connect_error){
    echo "failed to connect";
}
//  insert function 

function insertData($table,$data){
    global $connect;
    $cols = implode(",",array_keys($data));
    $values = implode("','",($data));
    $query = "insert into $table ($cols) values ('$values')";
    $run = $connect->query($query);
    return $run;
}

function callingData($table,$cond=null){
    global $connect;
    if($cond==null){
        $query = "select * from $table";
    }
    else{
        $query = "select *from $table where $cond";
    }
    $run = $connect->query($query);
    $data = $run->fetch_all(MYSQLI_ASSOC);
    return $data;
}
function redirect($page){
    global $connect;
    echo "<script>window.open('$page','_self')</script>";
}
function alert($msg){
    echo "<script>alert('$msg')</script>";
}
function deleteRecord($table,$cond=null){
    global  $connect;
    $query = $connect->query("delete from $table where $cond");
    return $query;
}
function countRecords($table,$cond=NULL){
    global $connect;
    if($cond==null){
        $query = "select * from $table";
    }
    else{
        $query = "select * from $table WHERE $cond";
    }
    $run = $connect->query($query);
    $count = $run->num_rows;
    return $count;
}
?>