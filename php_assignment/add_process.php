<?php
include('function.php');
include('db_conn.php');

if(isset($_POST['add']) && $_POST['add']=='add'){
extract($_POST);
$sql="insert into tb_employee (name,adress,email,number,department,working,hobbies) values ('$name','$adress','$email','$number','$department','$working','$hobbies')";
$res=mysqli_query($conn,$sql) or die ('Error to saving noitice'.mysqli_error($conn));
if ($res){
    notify('Notice saved successfully');
    redirectTO('2.php');

}
else{
    notify('Something went wrong!');
    redirectTO('2.php');
}
}
else{
  redirectTO('2.php');
}
?>