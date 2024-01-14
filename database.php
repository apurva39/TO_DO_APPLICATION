<?php

function make_connection()
{
    $host="localhost";
    $username="root";
    $password="";
    $dbname="todolist";

    $conn=new mysqli($host,$username,$password,$dbname);

    if($conn->connect_error)
    {
        echo "There is an error in Database connection" .$con->connect_error;
    }

    return $conn;
    

}

function add_items($value)
{
    $con=make_connection();
    $que="INSERT INTO todolist(id,item,status) values(NULL,'$value',0)";
    $con->query($que);

}

function get_items()
{
    $con=make_connection();
    $que="SELECT id,item FROM todolist WHERE status='0'";
    $result=$con->query($que);
    return $result;

}
function update_items($id)
{
    $con=make_connection();
    $que="UPDATE todolist SET status='1' where id='$id";
    $con->query($que);
    

}

function get_items_checked()
{
    $con=make_connection();
    $que="SELECT id,item FROM todolist WHERE status='1'";
    $result=$con->query($que);
    return $result;

}

function delete_items($id)
{
    $con=make_connection();
    $que="DELETE from todolist where id='$id' ";
    $con->query($que);
    

}




?>